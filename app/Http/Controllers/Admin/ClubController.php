<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
//        $clubs = Clubs::paginate(10);
        return view('admin.club.index');
    }

    public function create()
    {
        return view('admin.president.create');
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function destroy($id)
    {
//        User::whereId($id)->delete();
        return redirect()->route('admin.president.index')->with('success', 'President Deleted Successfully');
    }

}
