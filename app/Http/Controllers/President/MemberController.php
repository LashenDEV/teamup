<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 2)->get();
        return view('president.members.index', compact('members'));
    }

    public function edit($id)
    {
        return view('president.members.edit');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Member removed Successfully');
    }
}
