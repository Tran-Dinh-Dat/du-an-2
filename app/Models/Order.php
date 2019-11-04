<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'email',
        'name',
        'address',
        'phone',
        'note', 
        'status'
    ];
}
