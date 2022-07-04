<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\ClubSliderImage;
use App\Models\HistoryLogs;
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

            return redirect()->route('club.view', $id)->with('success', 'Your Have Registered To The ' . $club->name . ' Successfully');
        } else {
            return redirect()->route('club.view', $id)->with('error', 'Your Have Already Registered To The ' . $club->name . ' Successfully');
        }
    }

    public function view($id)
    {
        $club = Clubs::findOrFail($id);
        $club_image_sliders = ClubSliderImage::where('club_id', $club->id)->get();
        return view('clubShow', compact('club', 'club_image_sliders'));
    }

    public function payment_page($id)
    {
        $club = Clubs::findOrFail($id);
        return view('user.payment_page', compact('club'));
    }
}
