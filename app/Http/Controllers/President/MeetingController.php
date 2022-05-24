<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use App\Models\Meeting;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::where('president_id', Auth::user()->id)->latest()->paginate(3);
        return view('president.meeting.index', compact('meetings'));
    }

    public function create()
    {
        return view('president.meeting.create');
    }

    public function store(StoreMeetingRequest $request)
    {
        Meeting::create($request->all());
        return redirect()->route('president.meeting.index')->with('success', 'MEETING IS CREATED SUCCESSFULLY');
    }

    public function edit($id)
    {
        $meeting = Meeting::findOrFail($id);
        return view('president.meeting.edit', compact('meeting'));
    }

    public function update(UpdateMeetingRequest $request, $id)
    {
        Meeting::findOrFail($id)->update($request->all());
        return redirect()->route('president.meeting.index')->with('success', 'MEETING IS UPDATED SUCCESSFULLY');
    }

    public function destroy($id)
    {
        Meeting::findOrFail($id)->delete();
        return redirect()->route('president.meeting.index')->with('success', 'MEETING IS DELETED SUCCESSFULLY');
    }

    public function publish($id){
        Meeting::findOrFail($id)->update(['status' => 1]);
        return redirect()->route('president.meeting.index')->with('success', 'MEETING IS PUBLISHED SUCCESSFULLY');
    }
}
