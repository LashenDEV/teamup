<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        $presidents = User::where('role', 2)->with('getClub')->paginate(10);
        return view('admin.president.index', compact('presidents'));
    }

    public function create()
    {
        return view('admin.president.create');
    }
}
