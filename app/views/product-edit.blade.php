@extends('layout-admin')
@section('main-admin')

<h1 class="text-center">Product Edit</h1>

<form method="POST">
    <div class="mb-3">
        <label class="form-label">Product Name</label>
        <input name="name" type="text" value="{{$product->name}}" class="form-control"   >
    </div>
    <div class="mb-3">
        <label class="form-label"> Category</label>
       <select name="category-id" id="">
        <option value="{{$product->cate()->id}}">{{$product->cate()->name}}</option>
        @foreach ($category as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
       </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" type="text" class="form-control"  value="{{$product->price}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <input name="status" type="text" class="form-control"  value="{{$product->status}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input name="image" type="text" class="form-control"  value="{{$product->image}}" >
    </div>
    <button type="submit" class="btn btn-primary">Add new</button>
</form>
@endsection