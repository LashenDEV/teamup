<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePresidentRequest;
use App\Http\Requests\UpdatePresidentRequest;
use App\Models\HistoryLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class PresidentController extends Controller
{
    public function index()
    {
        $presidents = User::where('role', 2)->paginate(10);
        return view('admin.president.index', compact('presidents'));
    }

    public function create()
    {
        return view('admin.president.create');
    }

    public function store(StorePresidentRequest $request)
    {
        $hashed_password = Hash::make($request->password);
        User::create([
            'role' => 2,
            'name' => $request->name,
            'email' => $request->email,
            'email verified at' => Null,
            'password' => $hashed_password,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Added a '. $request->name . ' as a president.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Added Successfully');
    }

    public function edit($id)
    {
        $president = User::whereId($id)->firstOrFail();
        return view('admin.president.edit', compact('president'));

    }

    public function update($id, UpdatePresidentRequest $request)
    {
        $president = User::whereId($id)->firstOrFail();
        $president->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Edit '. $request->name . '\'s details.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::whereId($id)->delete();
        HistoryLogs::create([
            'user_id' => \Auth::user()->id,
            'description' => 'Delete president profile of '. $user->name .'.'
        ]);
        return redirect()->route('admin.president.index')->with('success', 'President Deleted Successfully');
    }
}
