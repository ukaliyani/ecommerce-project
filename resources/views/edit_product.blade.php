@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">{{ isset($product) ? 'Edit Product' : 'Add New Product' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name ?? old('name') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (isset($product) && $product->category_id==$category->id) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $product->description ?? old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price ?? old('price') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Sale Price</label>
            <input type="number" step="0.01" name="sale_price" class="form-control" value="{{ $product->sale_price ?? old('sale_price') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{ $product->stock ?? old('stock') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="active" {{ (isset($product) && $product->status=='active') ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ (isset($product) && $product->status=='inactive') ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($product) ? 'Update Product' : 'Add Product' }}</button>
    </form>
</div>
@endsection
