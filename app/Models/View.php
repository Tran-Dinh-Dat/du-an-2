<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillabel = [
        'id',
        'count'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
