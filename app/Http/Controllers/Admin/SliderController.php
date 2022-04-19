<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        $sliders = Slider::all();
        return view('president.slider.index', compact('sliders'));
    }

    public function add()
    {
        return view('president.slider.add');
    }

    public function store(Request $request)
    { {
            $slider_image = $request->file('image');

            $name_gen = hexdec(uniqid()) . '.' . $slider_image->getClientOriginalExtension();
            Image::make($slider_image)->resize(1920, 1280)->save('image/slider/' . $name_gen);

            $last_img = 'image/slider/' . $name_gen;

            Slider::insert([
                'president_id' => $request->president_id,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('president.slider')->with('success', 'Slider Inserted Successfully');
        }
    }
}
