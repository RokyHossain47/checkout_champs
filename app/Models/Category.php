<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'is_active',
        'image'
    ];

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
