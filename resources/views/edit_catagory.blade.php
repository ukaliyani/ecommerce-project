@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card shadow-lg w-50">
        <div class="card-header bg-warning text-white text-center">
            <h3 class="mb-0">Edit Category</h3>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="form-label fw-bold">Category Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" value="{{ $category->name }}">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-lg" value="{{ $category->slug }}">
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Status</label>
                    <select name="status" class="form-select form-select-lg">
                        <option value="active" {{ $category->status == "active" ? "selected" : "" }}>Active</option>
                        <option value="inactive" {{ $category->status == "inactive" ? "selected" : "" }}>Inactive</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-warning btn-lg px-5 fw-bold">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
