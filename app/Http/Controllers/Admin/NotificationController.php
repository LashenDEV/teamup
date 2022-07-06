<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function readAll()
    {
        $admin_notifications = Notifications::where('show_to_admin', 1)->get();
        foreach ($admin_notifications as $admin_notification) {
            $admin_notification->status_to_admin = 1;
            $admin_notification->save();
        }

        return redirect()->back();
    }

}
