<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'icon'

    ];


    function subcategories()
    {
        return $this->hasMany(Category::class, 'category_id')->with('subcategories');
    }
    function category()
    {
        return $this->belongsTo(Category::class);
    }
}
