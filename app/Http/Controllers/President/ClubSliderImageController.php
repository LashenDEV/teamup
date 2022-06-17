<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClubSliderImage;
use App\Models\Clubs;
use App\Models\ClubSliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class ClubSliderImageController extends Controller
{
    public function index()
    {
        $slider_image_1 = ClubSliderImage::where('president_id', Auth::user()->id)->where('slider_no', 1)->first();
        $slider_image_2 = ClubSliderImage::where('president_id', Auth::user()->id)->where('slider_no', 2)->first();
        $slider_image_3 = ClubSliderImage::where('president_id', Auth::user()->id)->where('slider_no', 3)->first();
        return view('president.clubSliderImage.index', compact('slider_image_1', 'slider_image_2', 'slider_image_3'));
    }

    public function create()
    {
        return view('president.notice.create');
    }

    public function store(StoreClubSliderImage $request)
    {
        $club_image_slider_image= $request->file('slider_img');
        $name_gen = hexdec(uniqid()) . '.' . $club_image_slider_image->getClientOriginalExtension();
        Image::make($club_image_slider_image)->resize(1288, 600)->save('image/club_slider_image/' . $name_gen);
        $last_img = 'image/club_slider_image/' . $name_gen;

        $club_id = Clubs::where('president_id', Auth::user()->id)->first()->id;
        ClubSliderImage::create([
            'president_id' => Auth::user()->id,
            'club_id' => $club_id,
            'slider_no' => $request->slider_no,
            'slider_image' => $last_img
        ]);

        return redirect()->route('president.slider.image.index')->with('success', 'Club Image Slider Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $old_image = $request->slider_old_img;
        $club_image_slider_image= $request->file('slider_img');
        $club_id = Clubs::where('president_id', Auth::user()->id)->first()->id;

        if ($club_image_slider_image) {
            unlink($old_image);
            $name_gen = hexdec(uniqid()) . '.' . $club_image_slider_image->getClientOriginalExtension();
            Image::make($club_image_slider_image)->resize(1288, 600)->save('image/club_slider_image/' . $name_gen);
            $last_img = 'image/club_slider_image/' . $name_gen;
            ClubSliderImage::findOrFail($id)->update([
                'president_id' => Auth::user()->id,
                'club_id' => $club_id,
                'slider_no' => $request->slider_no,
                'slider_image' => $last_img
            ]);
        }
        return redirect()->route('president.slider.image.index')->with('success', 'Club Image Slider Updated Successfully');
    }
}

