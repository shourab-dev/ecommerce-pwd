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

    function show($id = null)
    {
        $editedCategory = null;
        $allCategories = Category::with('subcategories')->latest()->get();
        if ($id) {
            $editedCategory = $allCategories->where('id', $id)->first();
        }
        $categories = $allCategories->where('category_id', null)->flatten();

        return view('backend.category', compact('categories', 'allCategories', 'editedCategory'));
    }

    function store(Request $req, $id = null)
    {
        $slug = $this->createSlug(Category::class, $req->title);
        $storeImage = $this->uploadImage($req->icon, $req->title, 'category', $req->oldIcon);
        $category =    $this->storeAndUpdate($req, $storeImage, $id);
        return redirect(route('admin.category.show'));
    }



    private function storeAndUpdate($req, $storeImage = null, $id = null)
    {
        $category = Category::findOrNew($id);
        $category->title = $req->title;
        $category->slug = str($req->title)->slug();
        $category->category_id = $req->parent_category;
        $category->icon = $storeImage ?? $category->icon;
        $category->save();
        return $category ? true : false;
    }
}
