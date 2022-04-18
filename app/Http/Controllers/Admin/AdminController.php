<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard.index');
    }

    public function profile()
    {
        return view('Admin.dashboard.profile');
    }

    public function settings()
    {
        return view('Admin.dashboard.settings');
    }
}
