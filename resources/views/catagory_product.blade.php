<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card shadow-lg w-50">
        <div class="card-header bg-info text-white text-center">
            <h3 class="mb-0">Add New Category</h3>
        </div>
        <div class="card-body p-4">

            {{-- Error Messages --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                {{-- Category Name --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Category Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter category name" value="{{ old('name') }}">
                </div>

                {{-- Slug --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-lg" placeholder="Unique URL slug" value="{{ old('slug') }}">
                </div>

                {{-- Status --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Status</label>
                    <select name="status" class="form-select form-select-lg">
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                {{-- Submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-lg px-5 fw-bold">Create Category</button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- Optional: Custom Styles --}}
<style>
    .card {
        border-radius: 15px;
    }
    .form-control-lg, .form-select-lg {
        border-radius: 10px;
        padding: 15px;
    }
    .btn-info {
        border-radius: 10px;
        font-size: 1.1rem;
    }
</style>
@endsection
