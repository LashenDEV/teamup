<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
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
            return redirect()->route('user.dashboard')->with('success', 'Your Have Registered To The ' . $club->name . ' Successfully');
        } else {
            return redirect()->route('user.dashboard')->with('error', 'Your Have Already Registered To The ' . $club->name . ' Successfully');
        }
    }

    public function view()
    {
        return view('clubShow');
    }
}
