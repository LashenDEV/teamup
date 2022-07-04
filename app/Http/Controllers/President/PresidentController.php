<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\HistoryLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class PresidentController extends Controller
{
    public function index()
    {
        return view('president.dashboard.index');
    }

    public function profile()
    {
        $president = Auth::user();
        return view('President.dashboard.profile', compact('president'));
    }

    public function update(UpdateProfileDataRequest $request)
    {
        $president = Auth::user();
        if ($request->hasFile('profile_photo')) {
            if ($president->profile_photo != null) {
                unlink($president->profile_photo);
            }
            $name_gen = hexdec(uniqid()) . '.' . $request->profile_photo->getClientOriginalExtension();
            Image::make($request->profile_photo)->resize(150, 150)->save('image/profile_photos/' . $name_gen);
            $last_img = 'image/profile_photos/' . $name_gen;
            User::findOrFail($president->id)->update(
                array_merge(
                    $request->except('profile_photo'),
                    ['profile_photo' => $last_img]
                )
            );
        } else {
            User::findOrFail($president->id)->update($request->all());
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
            $president = User::findOrFail(Auth::id());
            $president->password = Hash::make($request->password);
            $president->save();
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

        $president = User::findOrFail(Auth::id());
        $president->email_verified_at = null;
        $president->email = $request->new_email;
        $president->save();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Your email has been reset.'
        ]);
        return redirect('email/verify')->with('success', 'Email Has been changed successfully');
    }

    public function settings()
    {
        return view('President.dashboard.settings');
    }
}
