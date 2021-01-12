<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'category_id', 'description', 'image'
    ];
    public function getFeaturedAttribute($image)
    {
        return asset($image);
    }
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}
