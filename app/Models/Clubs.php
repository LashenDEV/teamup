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
        'vision',
        'mission',
        'image',
        'approval',
    ];

    public function clubOwner()
    {
        return $this->belongsTo(User::class, 'president_id', 'id');
    }
}
