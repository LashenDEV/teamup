<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubSliderImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'president_id',
        'club_id',
        'slider_no',
        'slider_image',
    ];
}
