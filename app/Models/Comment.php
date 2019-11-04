<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id',
        'content',
        'status',
        'product_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
