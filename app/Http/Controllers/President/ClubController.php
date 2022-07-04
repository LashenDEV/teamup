<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;
use App\Models\ClubCategory;
use App\Models\Clubs;
use App\Models\HistoryLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Image;

class ClubController extends Controller
{
    private function save(Clubs $club, Request $request, $club_image)
    {
        $name_gen = hexdec(uniqid()) . '.' . $club_image->getClientOriginalExtension();
        Image::make($club_image)->resize(1920, 1280)->save('image/club/' . $name_gen);
        $last_img = 'image/club/' . $name_gen;

        $club->president_id = $request->president_id;
        $club->name = $request->name;
        $club->description = $request->description;
        $club->category_name = $request->category_name;
        $club->vision = $request->vision;
        $club->mission = $request->mission;
        $club->image = $last_img;
        $club->created_at = Carbon::now();
        $club->save();
    }

    public function index()
    {
        $your_club = Clubs::where('president_id', Auth::user()->id)->first();
        return view('president.club.index', compact('your_club'));
    }

    public function create()
    {
        $club_categories = ClubCategory::all();
        return view('president.club.new', compact('club_categories'));
    }

    public function store(StoreClubRequest $request)
    {
        $club_image = $request->file('image');

        $club = new Clubs();
        $this->save($club, $request, $club_image);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Created the ' . $request->name . '.'
        ]);

        return redirect()->route('president.club.index')->with('success', 'Your Club Is Created Successfully');
    }

    public function edit($id)
    {
        $your_club = Clubs::findOrFail($id);
        $club_categories = ClubCategory::all();

        return view('president.club.edit', compact('your_club', 'club_categories'));
    }

    public function update(UpdateClubRequest $request, $id)
    {
        $old_image = $request->old_image;
        $club_image = $request->file('image');

        if ($club_image) {
            unlink($old_image);
            $club = Clubs::findOrFail($id);
            $this->save($club, $request, $club_image);
        } else {
            $club = Clubs::findOrFail($id);
            $club->president_id = $request->president_id;
            $club->name = $request->name;
            $club->description = $request->description;
            $club->category_name = $request->category_name;
            $club->vision = $request->vision;
            $club->mission = $request->mission;
            $club->created_at = Carbon::now();
            $club->save();
        }
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Updated the ' . $request->name . '.'
        ]);
        return redirect()->route('president.club.index')->with('success', 'Club Updated Successfully');
    }

    public function destroy($id)
    {
        $image = Clubs::where('id', $id)->firstOrFail()->image;
        unlink($image);
        $club = Clubs::find($id)->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Deleted the ' . $club->name . '.'
        ]);
        return redirect()->back()->with('success', 'Club deleted Successfully');
    }
}
