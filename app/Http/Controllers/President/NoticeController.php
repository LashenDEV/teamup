<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('president.notice.index');
    }

    public function create()
    {
        return view('president.notice.create');
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
        return redirect()->back()->with('success', 'notice Deleted Successfully');
    }
}
