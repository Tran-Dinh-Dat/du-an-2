<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id',
        'name',
        'image_url',
        'image_alt'
    ]; 

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
