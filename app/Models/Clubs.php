<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'president_id',
        'name',
        'description',
        'category_name',
        'vision',
        'mission',
        'image',
        'approval',
        'home_slider_approval',
    ];

    public function clubOwner()
    {
        return $this->belongsTo(User::class, 'president_id', 'id');
    }

    public function notices(){
        return $this->hasMany(Notice::class, 'club_id', 'id');
    }
}
