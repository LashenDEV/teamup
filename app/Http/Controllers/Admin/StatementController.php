<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatementRequest;
use App\Http\Requests\UpdateStatementRequest;
use App\Models\Statement;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class StatementController extends Controller
{
    public function index()
    {
        $statements = Statement::get();
        return view('admin.statement.index', compact('statements'));
    }

    public function store(StoreStatementRequest $request)
    {
        Statement::create($request->all());
        return redirect()->back()->with('success',  ucfirst($request->title) . ' Statement Created Successfully');
    }

    public function update($id, UpdateStatementRequest $request)
    {
        Statement::findOrFail($id)->Update($request->all());
        return redirect()->back()->with('success', ucfirst($request->title) . ' Statement Updated Successfully');
    }
}
