<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileDataRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller
{
    public function index()
    {
        return view('user.Dashboard.index');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.Dashboard.profile', compact('user'));
    }

    public function update(UpdateProfileDataRequest $request)
    {
        dd($request);
        if ($request->hasFile('profile_photo')) {
            unlink(Auth::user()->profile_photo);
            $name_gen = hexdec(uniqid()) . '.' . $request->profile_photo->getClientOriginalExtension();
            Image::make($request->profile_photo)->resize(150, 150)->save('image/profile_photos/' . $name_gen);
            $last_img = 'image/profile_photos/' . $name_gen;
        }

        $id = Auth::user()->id;
        User::findOrFail($id)->update(array_merge(
                $request->except('profile_photo'),
                ['profile_photo' => $last_img])
        );
        return redirect()->back()->with('success', 'PROFILE UPDATED SUCCESSFULLY');
    }

    public function settings()
    {
        return view('user.Dashboard.settings');
    }
}
