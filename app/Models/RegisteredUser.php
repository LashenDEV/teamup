<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'club_id',
    ];

    public function registeredClub()
    {
        return $this->belongsTo(Clubs::class, 'club_id', 'id');
    }

    public function registeredUsers()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
