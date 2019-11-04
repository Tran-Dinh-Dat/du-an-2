<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'price',
        'sale', 
        'description',
        'quantity',
        'view_id',
        'image_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function view()
    {
        return $this->hasMany(View::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
