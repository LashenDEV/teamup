<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'show_to_admin',
        'show_to_president',
        'icon',
        'notification',
        'status_to_admin',
        'status_to_president',
    ];

    protected $casts = [
        'show_to' => 'array'
    ];
}
