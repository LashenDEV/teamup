<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use App\Models\HistoryLogs;
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
        $event->club_id = $request->club_id;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->venue = $request->venue;
        $event->image = $last_img;
        $event->created_at = Carbon::now();
        $event->save();
    }

    public function index()
    {
        $events = Event::where('president_id', Auth::user()->id)->latest()->paginate(3);
        return view('president.event.index', compact('events'));
    }

    public function create()
    {
        return view('president.event.create');
    }

    public function store(StoreEventRequest $request)
    {
        $event_image = $request->file('image');
        $event = new Event();
        $this->save($event, $request, $event_image);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Created an event as ' . $request->name . '.'
        ]);

        return redirect()->route('president.event.index')->with('success', 'EVENT IS CREATED SUCCESSFULLY');
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
            $event->club_id = $request->club_id;
            $event->name = $request->name;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->venue = $request->venue;
            $event->created_at = Carbon::now();
            $event->save();
        }
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Updated the ' . $request->name . ' event'
        ]);
        return redirect()->route('president.event.index')->with('success', 'EVENT UPDATED SUCCESSFULLY');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        unlink($event->image);
        $event->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Deleted the ' . $event->name . ' event.'
        ]);

        return redirect()->back()->with('success', 'EVENT DELETED SUCCESSFULLY');
    }

    public function publish($id)
    {
        $event = Event::findOrFail($id);
        $event->update(['status' => 1]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Published the ' . $event->title . ' event.'
        ]);
        return redirect()->route('president.event.index')->with('success', 'EVENT IS PUBLISHED SUCCESSFULLY');
    }

    public function draft($id)
    {
        $event = Event::findOrFail($id);
        $event->update(['status' => 0]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Drafted the ' . $event->title . ' event.'
        ]);
        return redirect()->route('president.event.index')->with('success', 'EVENT IS DRAFTED SUCCESSFULLY');
    }
}
