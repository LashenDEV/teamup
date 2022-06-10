<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 3)->paginate(2);
        return view('admin.member.index', compact('members'));
    }

    public function create(){
        return view('admin.member.create');
    }

    public function store(StoreMemberRequest $request){
        $hashed_password = Hash::make($request->password);
        User::create([
            'role' => 3,
            'name' => $request->name,
            'email' => $request->email,
            'email verified at' => Null,
            'password' => $hashed_password,
        ]);
        return redirect()->route('admin.member.index')->with('success', 'Member Added Successfully');
    }

    public function edit($id)
    {
        $member = User::findOrFail($id);
        return view('admin.member.edit', compact('member'));
    }

    public function update($id, UpdateMemberRequest $request)
    {
        $member = User::whereId($id)->firstOrFail();
        $member->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('admin.member.index')->with('success', 'Member Updated Successfully');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Member removed Successfully');
    }
}
