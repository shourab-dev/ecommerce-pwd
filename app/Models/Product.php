<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    function productOptions()
    {
        return $this->hasManyThrough(ProductOption::class, ProductAttribute::class);
    }

    function attributes()
    {
        return $this->hasMany(ProductAttribute::class)->with('getName');
    }

    function variations()
    {
        return $this->hasMany(Variation::class);
    }

    function sku()
    {
        return $this->hasMany(Sku::class);
    }


    // function proAttr()
    // {
    //     return $this->hasManyThrough(Attribute::class,Option::class);
    // }
}
