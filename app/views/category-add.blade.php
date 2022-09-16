@extends('layout-admin')
@section('main-admin')

<h1 class="text-center">Category Add</h1>

<form method="POST">
    <div class="mb-3">
        <label class="form-label">Category Name</label>
        <input name="category_name" type="text" class="form-control"   >
    </div>
    <button type="submit" class="btn btn-primary">Add new</button>
</form>
@endsection