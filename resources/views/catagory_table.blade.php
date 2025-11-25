@extends('admin.layouts.app')

@section('content')
<h2 class="mb-4">All Categories</h2>

<div class="text-end mb-3">
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
</div>

<table class="table table-bordered text-center bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th width="20%">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->slug }}</td>
            <td>{{ $cat->status }}</td>
            <td>
                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('categories.destroy', $cat->id) }}" method="POST" class="d-inline">
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
