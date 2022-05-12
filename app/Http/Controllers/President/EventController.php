<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Image;

class EventController extends Controller
{
    private function save(Event $event, Request $request, $event_image)
    {
        $name_gen = hexdec(uniqid()) . '.' . $event_image->getClientOriginalExtension();
        Image::make($event_image)->resize(1920, 1280)->save('image/events/' . $name_gen);
        $last_img = 'image/events/' . $name_gen;

        $event->president_id = $request->president_id;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;;
        $event->time = $request->time;;
        $event->venue = $request->venue;
        $event->image = $last_img;
        $event->created_at = Carbon::now();
        $event->save();
    }

    public function index()
    {
        $events = Event::where('president_id', Auth::user()->id)->get();
        return view('president.event.index', compact('events'));
    }

    public function create()
    {
        return view('president.event.create');
    }

    public function store(Request $request)
    {
        $event_image = $request->file('image');
        $event = new Event();
        $this->save($event, $request, $event_image);
        return redirect()->route('president.event.index')->with('success', 'Your Event Is Created Successfully');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('president.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $old_image = $request->old_image;
        $event_image = $request->file('image');

        if ($event_image) {
            unlink($old_image);
            $event = Event::findOrFail($id);
            $this->save($event, $request, $event_image);
        } else {
            $event = Event::findOrFail($id);
            $event->president_id = $request->president_id;
            $event->name = $request->name;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->venue = $request->venue;
            $event->created_at = Carbon::now();
            $event->save();
        }
        return redirect()->route('president.event.index')->with('success', 'Event Updated Successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        unlink($event->image);
        $event->delete();
        return redirect()->back()->with('success', 'Event Deleted Successfully');
    }
}
