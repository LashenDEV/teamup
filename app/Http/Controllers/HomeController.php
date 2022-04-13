<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::user()->role == 1) {
            return view('Admin.Dashboard.index');
        } elseif (\Auth::user()->role == 2) {
            return view('President.Dashboard.index');
        }elseif (\Auth::user()->role == 3) {
            return view('User.Dashboard.index');
        }
    }
}
