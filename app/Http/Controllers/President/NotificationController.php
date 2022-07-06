<?php

namespace App\Http\Controllers\President;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function readAll()
    {
        $president_notifications = Notifications::where('show_to_president', 1)->get();
        foreach ($president_notifications as $president_notification) {
            $president_notification->status_to_president = 1;
            $president_notification->save();
        }

        return redirect()->back();
    }
}
