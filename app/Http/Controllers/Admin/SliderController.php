<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class SliderController extends Controller
{
    public function slider()
    {
        $sliders = Clubs::where('approval', 1)->paginate(3);
        return view('admin.slider.index', compact('sliders'));
    }

    public function add($id)
    {
        $current_sliders_count = Clubs::where('home_slider_approval', '1')->get()->count();
        if ($current_sliders_count < 5) {
            $slider = Clubs::findOrFail($id);
            $slider->home_slider_approval = 1;
            $slider->save();
            return redirect()->back()->with('success', 'Added To Home Slider Successfully');
        } else {
            return redirect()->back()->with('error', 'Reached The Maximum Slider For HomePage');
        }
    }

    public function remove($id)
    {
        $slider = Clubs::findOrFail($id);
        $slider->home_slider_approval = 0;
        $slider->save();
        return redirect()->back()->with('success', 'Removed From The Home Slider Successfully');
    }
}
