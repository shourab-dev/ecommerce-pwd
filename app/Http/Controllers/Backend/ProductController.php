<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addOrEditProduct()
    {

        // $products = Product::with('options.attribute')->where('id', 18)->first();
        // $products = Product::with('options.attribute')->where('id', 18)->groupBy(function ($q) {
        //     return $q->options->groupBy('attribute.name');
        // })->get();

        // $attributes = $products->options->groupBy('attribute.name');
        // dd($attributes);
    }
}
