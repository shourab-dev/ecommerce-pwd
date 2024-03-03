<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;


    protected $fillable = [

        "product_attribute_id",
        "attribute_id",
        "option_id",
    ];

    function getOption()
    {
        return $this->belongsTo(Option::class, 'option_id');
    }

    
}
