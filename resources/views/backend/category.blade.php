@extends('layouts.backendLayouts')
@section('title', 'Category')
@section('backend')
<div class="row">
    <div class="col-lg-4">
        <div class="card bg-white border-0 shadow">
            <div class="card-header bg-white py-2">
                <b>Add Category</b>
            </div>
            <div class="card-body">
                <form action="{{   route('admin.category.store', $editedCategory ? $editedCategory->id : null) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Category Title</label>
                        <input value="{{ $editedCategory->title ?? '' }}" type="text" class="form-control"
                            placeholder="example: men" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="parentCategory">Parent Category</label>
                        <select name="parent_category" class="form-control">
                            <option disabled selected> Select a parent Category</option>
                            @foreach ($allCategories as $cat)
                            <option {{ $cat->id == $editedCategory?->category_id ? "selected" : "" }} value="{{ $cat->id
                                }}">{{ str($cat->title)->headline() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        @isset($editedCategory->icon)
                        <img src="{{ asset('storage/'.$editedCategory->icon) }}" alt="" width="100">
                        <input type="hidden" name="oldIcon" value="{{ $editedCategory->icon }}">
                        @endisset
                        <label for="icon">Category Icon
                            <input type="file" name="icon" class="form-control">
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 rounded-0">Add Category <span
                            style="margin-top:5px ;font-size: 12px" class="ms-2"><i
                                class="lni lni-plus"></i></span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table bg-white text-center">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Status</td>
                    <td></td>
                </tr>
                @foreach ($categories as $key=>$category)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>
                        <div class="d-flex"><img height="40" class="me-2" src="{{ asset('storage/'.$category->icon) }}"
                                alt="">{{ $category->title }}</div>
                    </td>
                    <td>{{ $category->status }}</td>
                    <td><a href="{{ route('admin.category.show',$category->id) }}"
                            class="btn btn-sm btn-primary">Edit</a></td>

                </tr>
                @if (count($category->subcategories) > 0)

                @foreach ($category->subcategories as $subcategory)

                <tr>
                    <td>🎯</td>
                    <td>
                        <div class="d-flex"><img height="40" class="me-2"
                                src="{{ asset('storage/'.$subcategory->icon) }}" alt="">{{ $subcategory->title }}</div>
                    </td>
                    <td>{{ $subcategory->status }}</td>
                    <td><a href="{{ route('admin.category.show',$subcategory->id) }}"
                            class="btn btn-sm btn-primary">Edit</a></td>

                </tr>
                @include('layouts.categoryComponent')
                @endforeach
                @endif
                @endforeach
            </table>
            <div class="custom-pagination">
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection