<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 3)->paginate(2);
        return view('president.members.index', compact('members'));
    }

    public function edit($id)
    {
        $member = User::findOrFail($id);
        return view('president.members.edit',compact('member'));
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Member removed Successfully');
    }
}
