@extends('admin.layouts.app')

@section('content')
<h2 class="mb-4">All Products</h2>

<div class="text-end mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
</div>

<table class="table table-bordered text-center bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sale Price</th>
            <th>Stock</th>
            <th>Status</th>
            <th width="20%">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name ?? '-' }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->sale_price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->status }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
