<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\ClubSliderImage;
use App\Models\Event;
use App\Models\HistoryLogs;
use App\Models\Meeting;
use App\Models\Notifications;
use App\Models\RegisteredUser;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    public function register($id)
    {
        $reg_users = RegisteredUser::all();
        $club = Clubs::findOrFail($id);
        $is_already_registered = Null;

        foreach ($reg_users as $reg_user) {

            if (($reg_user->user_id == Auth::user()->id) && ($reg_user->club_id == $id)) {
                $is_already_registered = 1;
            }
        }

        if ($is_already_registered == Null) {
            RegisteredUser::create([
                'user_id' => Auth::user()->id,
                'club_id' => $id
            ]);
            HistoryLogs::create([
                'user_id' => \Auth::user()->id,
                'description' => 'Registered to the ' . $club->name . '.'
            ]);
            $user = Auth::user();
            Notifications::create([
                'user_id' => $user->id,
                'icon' => '<i class="fa-duotone fa-user-plus ml-2"></i>',
                'show_to_admin' => 1,
                'show_to_president' => 1,
                'notification' => $user->name . ' registered to the ' . $club->name . '.',
            ]);

            return redirect()->route('club.view', $id)->with('success', 'Your Have Registered To The ' . $club->name . ' Successfully');
        } else {
            return redirect()->route('club.view', $id)->with('error', 'Your Have Already Registered To The ' . $club->name . ' Successfully');
        }
    }

    public function view($id)
    {
        $events = Event::where('club_id', $id)->where('status', 1)->paginate(2);
        $next_meeting = Meeting::where('club_id', $id)->where('status', 1)->orderBy('date', 'asc')->orderBy('time', 'asc')->first();
        $clubs = Clubs::paginate(6);
        $club = Clubs::with('notices', 'clubOwner')->findOrFail($id);
        $registerd_user = RegisteredUser::where('user_id', Auth::user()->id)->first();
        $club_image_sliders = ClubSliderImage::where('club_id', $club->id)->get();
        return view('clubShow', compact('clubs', 'club', 'club_image_sliders', 'registerd_user', 'next_meeting', 'events'));
    }

    public function payment_page($id)
    {
        $clubs = Clubs::paginate(6);
        $club = Clubs::findOrFail($id);
        return view('user.payment_page', compact('clubs', 'club'));
    }
}
