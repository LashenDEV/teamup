<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Clubs::with('clubOwner')->paginate(2);
        return view('admin.club.index', compact('clubs'));
    }


    public function approval($id)
    {
        $club = Clubs::whereId($id)->first();
        $club->approval = 1;
        $club->save();
        return redirect()->back()->with('success', 'Club Approved Successfully');
    }

    public function rejection($id)
    {
        $club = Clubs::whereId($id)->first();
        $club->approval = Null;
        $club->save();
        return redirect()->back()->with('success', 'Club rejected Successfully');
    }

    public function destroy($id)
    {
        Clubs::whereId($id)->delete();
        return redirect()->route('admin.club.index')->with('success', 'Club Deleted Successfully');
    }

    public function show()
    {
        $clubs = Clubs::where('approval', 1)->paginate(6);
        $home_sliders = Clubs::where('home_slider_approval', '1')->get();
        return view('welcome', compact('clubs', 'home_sliders'));
    }

}
