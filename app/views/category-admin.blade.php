@extends('layout-admin')
@section('main-admin')
    <h1 class="text-center">Category</h1>
    <button type="button" class="btn btn-success">
        <a href="{{BASE_URL . '/admin/category/add'}}" class="text-light text-decoration-none">Add</a>
    </button>
    </button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <th>
                        <button type="button" class="btn btn-info"><a href="{{BASE_URL . '/admin/category/edit/' .$item->id}}" class="text-light text-decoration-none">Edit</a></button>
                        <button type="button" class="btn btn-danger"><a href="{{BASE_URL . '/admin/category/remove/' .$item->id}}" class="text-light text-decoration-none">Remove</a></button>
                    </th>
                </tr>
               
            @endforeach

        </tbody>
    </table>
@endsection
