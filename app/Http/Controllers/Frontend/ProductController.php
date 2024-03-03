<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sku;
use App\Models\Variation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showProduct()
    {
        $product = Product::with('sku.variant', 'attributes.options')->find(1);
        $minPrice = $product->min('price') < $product->sku->flatten()->min('price') ? $product->min('price') : $product->sku->flatten()->min('price');
        $maxPrice = $product->max('price') > $product->sku->flatten()->max('price') ? $product->max('price') : $product->sku->flatten()->max('price');

        return view('frontend.single-product', compact('product', 'minPrice', 'maxPrice'));
    }

    function getSkus(Request $request)
    {
        $id = $request->id;
        $product = [];
        // $product = Sku::where('product_id', $id)->with('variant')->first();
        $variants = Variation::where('product_id', $id)->with('sku')->get();
        foreach($variants as $data){
            $product[$data->options] = $data->sku;
        }
        return response()->json($product);
    }
}
