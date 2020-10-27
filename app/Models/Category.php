<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'image', 'sort_order'];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
