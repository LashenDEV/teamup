<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\Clubs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class AdminController extends Controller
{
    public function index()
    {
        $president_count = User::where('role', 2)->count();
        $member_count = User::where('role', 3)->whereNotNull('email_verified_at')->count();
        $new_members = User::where('role', 3)->whereMonth('created_at', Carbon::now()->month)->count();
        $club_count = Clubs::where('approval', 1)->count();
        $recent_clubs = Clubs::orderBy('id', 'desc')->take(5)->get();
        $total_clubs_year = Clubs::where('approval', 1)->whereYear('created_at', Carbon::now()->year)->count();
        $total_members_year = User::where('role', 3)->whereNotNull('email_verified_at')->whereYear('created_at', Carbon::now()->year)->count();
        return view('admin.dashboard.index', compact('president_count', 'total_clubs_year', 'total_members_year', 'member_count', 'club_count', 'recent_clubs', 'new_members'));
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
