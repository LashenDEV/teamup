<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistroyLogsController extends Controller
{
    public function index(){
        $history_logs = HistoryLogs::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);
        return view('admin.histroy-logs.index', compact('history_logs'));
    }
}
