<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.club-category.index');
    }

    public function store(Request $request)
    {
        
        return redirect()->route('admin.club-category.index')->with('success', 'President Added Successfully');
    }

    public function edit($id)
    {
        $president = User::whereId($id)->firstOrFail();
        return view('admin.club-category.index', compact('president'));

    }

    public function update($id, Request $request)
    {
        
        return redirect()->route('admin.club-category.index')->with('success', 'President Updated Successfully');
    }

    public function destroy($id)
    {
        User::whereId($id)->delete();
        return redirect()->route('admin.club-category.index')->with('success', 'President Deleted Successfully');
    }
}
