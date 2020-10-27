<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'main_image',
        'short_desc',
        'full_desc',
        'sort_order',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
