<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'attribute_id'
    ];
    function getName()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id')->select('id', 'name');
    }
    function options()
    {
        return $this->hasMany(ProductOption::class)->with('getOption');
    }
}
