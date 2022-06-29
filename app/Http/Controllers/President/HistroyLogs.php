<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistroyLogs extends Controller
{
    public function index(){
        return view('president.histroy-logs.index');
    }
}
