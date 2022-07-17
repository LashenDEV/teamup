<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function all($id)
    {
        $club = Clubs::with('notices', 'clubOwner')->findOrFail($id);
        $all_meetings = Meeting::where('club_id', $id)->where('status', 1)->orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('user.meeting.index', compact('all_meetings', 'club'));
    }
}
