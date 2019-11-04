<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillabel = [
        'id',
        'user_id',
        'avatar',
        'phone',
        'address',
        'username',
        'fullname'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
