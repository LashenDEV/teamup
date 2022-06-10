<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\Clubs;
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
        return view('user.Dashboard.index', compact('clubs'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.Dashboard.profile', compact('user'));
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
            User::findOrFail($user->id)->update(array_merge(
                    $request->except('profile_photo'),
                    ['profile_photo' => $last_img])
            );
        } else {
            User::findOrFail($user->id)->update($request->all());
        }
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
            Auth::logout();
            return redirect()->route('login')->with('success', 'Password Has been reset successfully');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }

    public function settings()
    {
        return view('user.Dashboard.settings');
    }
}
