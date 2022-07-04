<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\Clubs;
use App\Models\HistoryLogs;
use App\Models\RegisteredUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class UserController extends Controller
{
    public function index()
    {
        $clubs = Clubs::paginate(6);
        $home_sliders = Clubs::where('home_slider_approval', '1')->get();
        return view('user.Dashboard.index', compact('clubs', 'home_sliders'));
    }

    public function profile()
    {
        $user = Auth::user();
        $registered_clubs = RegisteredUser::where('user_id', $user->id)->with('registeredClub')->get();
        return view('user.Dashboard.profile', compact('user', 'registered_clubs'));
    }

    public function update(UpdateProfileDataRequest $request)
    {
        $user = Auth::user();
        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo != null) {
                unlink($user->profile_photo);
            }
            $name_gen = hexdec(uniqid()) . '.' . $request->profile_photo->getClientOriginalExtension();
            Image::make($request->profile_photo)->resize(150, 150)->save('image/profile_photos/' . $name_gen);
            $last_img = 'image/profile_photos/' . $name_gen;
            User::findOrFail($user->id)->update(
                array_merge(
                    $request->except('profile_photo'),
                    ['profile_photo' => $last_img]
                )
            );
        } else {
            User::findOrFail($user->id)->update($request->all());
        }
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Updated your profile information.'
        ]);

        return redirect()->back()->with('success', 'PROFILE UPDATED SUCCESSFULLY');
    }

    public function ChangePassword(Request $request)
    {
        $validateData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashed_password = Auth::user()->password;
        if (Hash::check($request->current_password, $hashed_password)) {
            $user = User::findOrFail(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            HistoryLogs::create([
                'user_id' => \Auth::user()->id,
                'description' => 'Your password has been reset.'
            ]);
            Auth::logout();

            return redirect()->route('login')->with('success', 'Password Has been reset successfully');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }

    public function ChangeEmail(Request $request)
    {
        $request->validate([
            'new_email' => 'required|unique:users,email',
        ]);

        $user = User::findOrFail(Auth::id());
        $user->email_verified_at = null;
        $user->email = $request->new_email;
        $user->save();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Your email has been reset.'
        ]);

        return redirect('email/verify')->with('success', 'Email Has been changed successfully');
    }

    public function settings()
    {
        return view('user.Dashboard.settings');
    }
}
