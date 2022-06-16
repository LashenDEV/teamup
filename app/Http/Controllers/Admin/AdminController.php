<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function profile()
    {
        $admin = Auth::user();
        return view('admin.dashboard.profile', compact('admin'));
    }

    public function update(UpdateProfileDataRequest $request)
    {
        $admin = Auth::user();
        if ($request->hasFile('profile_photo')) {
            if ($admin->profile_photo != null) {
                unlink($admin->profile_photo);
            }
            $name_gen = hexdec(uniqid()) . '.' . $request->profile_photo->getClientOriginalExtension();
            Image::make($request->profile_photo)->resize(150, 150)->save('image/profile_photos/' . $name_gen);
            $last_img = 'image/profile_photos/' . $name_gen;
            User::findOrFail($admin->id)->update(
                array_merge(
                    $request->except('profile_photo'),
                    ['profile_photo' => $last_img]
                )
            );
        } else {
            User::findOrFail($admin->id)->update($request->all());
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
            $admin = User::findOrFail(Auth::id());
            $admin->password = Hash::make($request->password);
            $admin->save();
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

        $admin = User::findOrFail(Auth::id());
        $admin->email_verified_at = null;
        $admin->email = $request->new_email;
        $admin->save();
        return redirect('email/verify')->with('success', 'Email Has been changed successfully');
    }

    public function settings()
    {
        return view('admin.dashboard.settings');
    }
}
