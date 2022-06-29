<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistroyLogs extends Controller
{
    public function index(){
        return view('admin.histroy-logs.index');
    }
}
