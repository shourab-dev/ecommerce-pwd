@if (count($subcategory->subcategories) > 0)
@foreach ($subcategory->subcategories as $subcategory)

<tr>
    <td>🎯</td>
    <td>
        <div class="d-flex"><img height="40" class="me-2" src="{{ asset('storage/'.$subcategory->icon) }}" alt="">{{
            $subcategory->title }}</div>
    </td>
    <td>{{ $subcategory->status }}</td>
    <td><a href="{{ route('admin.category.show',$subcategory->id) }}" class="btn btn-sm btn-primary">Edit</a></td>

</tr>
@include('layouts.categoryComponent')
@endforeach
@endif