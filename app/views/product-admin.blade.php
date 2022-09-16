@extends('layout-admin')
@section('main-admin')
    <h1 class="text-center">Product</h1>
    <button type="button" class="btn btn-success">
        <a href="{{BASE_URL . '/admin/product/add'}}" class="text-light text-decoration-none">Add</a>
    </button>
    </button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name Product</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th>
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->cate()->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->status }}</td>
                    <td><img srcset="{{PUBLIC_URL . $item->image}} 2x" width="50px" alt=""></td>
                    <th>
                        <button type="button" class="btn btn-info"><a href="{{BASE_URL . '/admin/product/edit/' .$item->id}}" class="text-light text-decoration-none">Edit</a></button>
                        <button type="button" class="btn btn-danger"><a href="{{BASE_URL . '/admin/product/remove/' .$item->id}}" class="text-light text-decoration-none">Remove</a></button>
                    </th>
                </tr>
               
            @endforeach

        </tbody>
    </table>
@endsection
