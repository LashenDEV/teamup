<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClubCategory;
use Illuminate\Http\Request;

class ClubCategoryController extends Controller
{
    public function index()
    {
        $club_categories = ClubCategory::paginate(4);
        return view('admin.club-category.index', compact('club_categories'));
    }

    public function store(Request $request)
    {
        ClubCategory::create($request->all());
        return redirect()->route('admin.category.index')->with('success', 'Club Category Created Successfully');
    }

    public function edit($id)
    {
        $club_categories = ClubCategory::paginate(4);
        $club_category = ClubCategory::whereId($id)->firstOrFail();
        return view('admin.club-category.index', compact('club_category', 'club_categories'));
    }

    public function update($id, Request $request)
    {
        ClubCategory::findOrFail($id)->update($request->all());
        return redirect()->route('admin.category.index')->with('success', 'Club Category Updated Successfully');
    }

    public function destroy($id)
    {
        ClubCategory::whereId($id)->delete();
        return redirect()->route('admin.category.index')->with('success', 'Club Category Deleted Successfully');
    }
}
