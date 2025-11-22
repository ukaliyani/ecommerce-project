@extends('admin.layouts.admin')

@section('content')
<h2 class="mb-4">Products Management</h2>
<a href="#" class="btn btn-success mb-3">Add New Product</a>

<div class="card p-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="{{ asset('assets/img/product1.jpg') }}" width="50"></td>
                <td>Smartphone</td>
                <td>Electronics</td>
                <td>PKR 25,000</td>
                <td>50</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
