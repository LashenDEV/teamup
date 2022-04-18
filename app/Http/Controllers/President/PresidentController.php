<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        return view('president.dashboard.index');
    }

    public function profile()
    {
        return view('President.dashboard.profile');
    }

    public function settings()
    {
        return view('President.dashboard.settings');
    }
}
