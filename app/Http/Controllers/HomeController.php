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
            return view('admin.dashboard.index');
        } elseif (\Auth::user()->role == 2) {
            return view('president.dashboard.index');
        }elseif (\Auth::user()->role == 3) {
            return view('user.dashboard.index');
        }
    }
}
