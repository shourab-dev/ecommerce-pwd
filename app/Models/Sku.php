<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id',
        "variation_id",
        "sku",
        "is_stock",
        "price",
        "sell_price",
        "variation_img",
    ];


    function variant(){
        return $this->belongsTo(Variation::class, 'variation_id');
    }
}
