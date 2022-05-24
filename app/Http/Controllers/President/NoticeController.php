<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNoticeRequest;
use App\Http\Requests\UpdateNoticeRequest;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::where('president_id', Auth::user()->id)->latest()->paginate(3);
        return view('president.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('president.notice.create');
    }

    public function store(StoreNoticeRequest $request)
    {
        Notice::create($request->all());
        return redirect()->route('president.notice.index')->with('success', 'MEETING IS CREATED SUCCESSFULLY');
    }

    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        return view('president.notice.edit', compact('notice'));
    }

    public function update(UpdateNoticeRequest $request, $id)
    {
        Notice::findOrFail($id)->update($request->all());
        return redirect()->route('president.notice.index')->with('success', 'MEETING IS UPDATED SUCCESSFULLY');
    }

    public function destroy($id)
    {
        Notice::findOrFail($id)->delete();
        return redirect()->route('president.notice.index')->with('success', 'MEETING IS DELETED SUCCESSFULLY');
    }

    public function publish($id){
        Notice::findOrFail($id)->update(['status' => 1]);
        return redirect()->route('president.notice.index')->with('success', 'MEETING IS PUBLISHED SUCCESSFULLY');
    }
}
