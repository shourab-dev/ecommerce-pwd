<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    function show()
    {
        $categories = Category::latest()->paginate(1);
        return view('backend.category', compact('categories'));
    }

    function store(Request $req)
    {
        $category =    $this->storeAndUpdate($req);
        return redirect(route('admin.category.show'));
    }


    private function storeAndUpdate($req, $id = null)
    {
        $category = Category::findOrNew($id);
        $category->title = $req->title;
        $category->slug = str($req->title)->slug();
        $category->category_id = $req->category_id;
        $category->icon = $req->icon ?? null;
        $category->save();
        return $category ? true : false;
    }
}
