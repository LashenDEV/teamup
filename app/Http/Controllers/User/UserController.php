<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('User.Dashboard.index');
    }

    public function profile()
    {
        return view('User.Dashboard.profile');
    }

    public function settings()
    {
        return view('User.Dashboard.settings');
    }
}
