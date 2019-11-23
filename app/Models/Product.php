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
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function view()
    {
        return $this->hasOne(View::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
