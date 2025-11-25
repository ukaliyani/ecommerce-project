@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card shadow-lg w-75">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Edit Coupon</h3>
        </div>
        <div class="card-body p-5">

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

            <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Coupon Code --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Coupon Code</label>
                    <input type="text" name="code" class="form-control form-control-lg" 
                           placeholder="Enter coupon code" value="{{ old('code', $coupon->code) }}">
                </div>

                {{-- Discount Type --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Discount Type</label>
                    <select name="discount_type" class="form-select form-select-lg">
                        <option value="percentage" {{ old('discount_type', $coupon->discount_type) == 'percentage' ? 'selected' : '' }}>Percentage</option>
                        <option value="fixed" {{ old('discount_type', $coupon->discount_type) == 'fixed' ? 'selected' : '' }}>Fixed</option>
                    </select>
                </div>

                {{-- Discount Value --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Discount Value</label>
                    <input type="number" step="0.01" name="discount_value" class="form-control form-control-lg" 
                           placeholder="Enter discount value" value="{{ old('discount_value', $coupon->discount_value) }}">
                </div>

                {{-- Status --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Status</label>
                    <select name="status" class="form-select form-select-lg">
                        <option value="active" {{ old('status', $coupon->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $coupon->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                {{-- Submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Update Coupon</button>
                </div>
            </form>

        </div>
    </div>
</div>

<style>
    .card { border-radius: 15px; }
    .form-control-lg, .form-select-lg { border-radius: 10px; padding: 15px; }
    .btn-success { border-radius: 10px; font-size: 1.1rem; }
</style>
@endsection
