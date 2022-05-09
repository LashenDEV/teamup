<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class EventController extends Controller
{
    public function index()
    {
        return view('president.event.index');
    }

    public function create()
    {
        return view('president.event.create');
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        return redirect()->back()->with('success', 'Event Deleted Successfully');
    }
}
