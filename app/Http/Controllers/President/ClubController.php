<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Laravel\Ui\Presets\React;

class ClubController extends Controller
{
    public function index()
    {
        return view('president.club.index');
    }

    public function store(Request $request)
    {
        $club_image = $request->file('image');

        $name_gen = hexdec(uniqid()) . '.' . $club_image->getClientOriginalExtension();
        Image::make($club_image)->resize(1920, 1280)->save('image/club/' . $name_gen);

        $last_img = 'image/club/' . $name_gen;

        Clubs::insert([
            'president_id' => $request->president_id,
            'title' => $request->title,
            'description' => $request->description,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('president.slider')->with('success', 'Club Inserted Successfully');

        return view('president.club.new');
    }

    public function edit()
    {
        return view('president.club.edit');
    }

    public function update(Request $request)
    {
        $old_image = $request->old_image;
        $image = $request->file('image');

        if ($image) {

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 200)->save('image/club/' . $name_gen);
            $last_img = 'image/club/' . $name_gen;

            unlink($old_image);
            Clubs::find($id)->update([
                'president_id' => $request->president_id,
                'title' => $request->title,
                'description' => $request->description,
                'vision' => $request->vision,
                'mission' => $request->mission,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        } else {
            Clubs::find($id)->update([
                'president_id' => $request->president_id,
                'title' => $request->title,
                'description' => $request->description,
                'vision' => $request->vision,
                'mission' => $request->mission,
                'created_at' => Carbon::now()
            ]);
        }
        return redirect()->back()->with('success', 'Club Updated Successfully');
    }
}