<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'president_id',
        'title',
        'description',
        'image',
    ];

    public function president()
    {
        return $this->belongsTo(User::class, 'president_id');
    }
}
