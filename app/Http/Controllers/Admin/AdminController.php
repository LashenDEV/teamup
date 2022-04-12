<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard.index');
    }

    public function profile()
    {
        return view('Admin.Dashboard.profile');
    }

    public function settings()
    {
        return view('Admin.Dashboard.settings');
    }
}
