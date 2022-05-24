<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'president_id',
        'title',
        'meeting_link',
        'meeting_id',
        'meeting_password',
        'date',
        'time',
        'status'
    ];
}
