<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        return view('admin.president.index');
    }
}
