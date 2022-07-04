<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\HistoryLogs;
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

        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Approved the ' . $club->name
        ]);
        return redirect()->back()->with('success', 'Club Approved Successfully');
    }

    public function rejection($id)
    {
        $club = Clubs::whereId($id)->first();
        $club->approval = Null;
        $club->save();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Rejected the ' . $club->name
        ]);
        return redirect()->back()->with('success', 'Club rejected Successfully');
    }

    public function destroy($id)
    {
        $club = Clubs::whereId($id)->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Approved the ' . $club->name
        ]);
        return redirect()->route('admin.club.index')->with('success', 'Club Deleted Successfully');
    }
}
