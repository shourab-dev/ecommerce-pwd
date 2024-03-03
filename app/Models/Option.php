<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_id',
        'name',
        'color',
        'option_image'
    ];


    function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }



    function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
