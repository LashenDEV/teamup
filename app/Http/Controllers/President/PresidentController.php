<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        return view('President.Dashboard.index');
    }

    public function profile()
    {
        return view('President.Dashboard.profile');
    }

    public function settings()
    {
        return view('President.Dashboard.settings');
    }
}
