<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\Statement;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function show()
    {
        $welcome = Statement::where('title', 'welcome')->first();
        $about = Statement::where('title', 'about')->first();
        $mission = Statement::where('title', 'mission')->first();
        $plan = Statement::where('title', 'plan')->first();
        $vision = Statement::where('title', 'vision')->first();
        $clubs = Clubs::where('approval', 1)->paginate(6);
        $home_sliders = Clubs::where('home_slider_approval', '1')->get();
        return view('welcome', compact('clubs', 'home_sliders', 'welcome', 'about', 'mission', 'plan', 'vision'));
    }
}
