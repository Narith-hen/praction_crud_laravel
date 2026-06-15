<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'price',
        'stock',
        'description',
    ];

    /**
     * Get the category this product belongs to.
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\category::class, 'category_id');
    }
}
