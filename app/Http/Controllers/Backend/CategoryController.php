<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Helpers\MediaUploader;
use App\Helpers\SlugBuilder;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    use MediaUploader, SlugBuilder;

    function show()
    {
        // $categories = Category::with('subcategories')->where('category_id', null)->latest()->get();
        $allCategories = Category::with('subcategories')->latest()->get();
        $categories = $allCategories->where('category_id', null)->flatten();
        // dd($categories);
        return view('backend.category', compact('categories', 'allCategories'));
    }

    function store(Request $req)
    {
        $slug = $this->createSlug(Category::class, $req->title);
        $storeImage = $this->uploadImage($req->icon, $req->title, 'category');
        $category =    $this->storeAndUpdate($req, $storeImage);
        return redirect(route('admin.category.show'));
    }


    private function storeAndUpdate($req, $storeImage = null, $id = null)
    {
        $category = Category::findOrNew($id);
        $category->title = $req->title;
        $category->slug = str($req->title)->slug();
        $category->category_id = $req->parent_category;
        $category->icon = $storeImage ?? null;
        $category->save();
        return $category ? true : false;
    }
}
