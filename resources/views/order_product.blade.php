@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card shadow-lg w-75">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">Add New Order</h3>
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

            <form action="{{ route('orders.store') }}" method="POST">
                @csrf

                {{-- Customer Name --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Customer Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" 
                           placeholder="Enter customer name" value="{{ old('name') }}">
                </div>

                {{-- Total Amount --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Total Amount ($)</label>
                    <input type="number" step="0.01" name="total_amount" class="form-control form-control-lg" 
                           placeholder="Enter total amount" value="{{ old('total_amount') }}">
                </div>

                {{-- Payment Method --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Payment Method</label>
                    <select name="payment_method" class="form-select form-select-lg">
                        <option value="">--Select Payment Method--</option>
                        <option value="paypal" {{ old('payment_method') == 'paypal' ? 'selected' : '' }}>PayPal</option>
                        <option value="stripe" {{ old('payment_method') == 'stripe' ? 'selected' : '' }}>Stripe</option>
                        <option value="cod" {{ old('payment_method') == 'cod' ? 'selected' : '' }}>Cash on Delivery</option>
                    </select>
                </div>

                {{-- Payment Status --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Payment Status</label>
                    <select name="payment_status" class="form-select form-select-lg">
                        <option value="pending" {{ old('payment_status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="paid" {{ old('payment_status') == 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="failed" {{ old('payment_status') == 'failed' ? 'selected' : '' }}>Failed</option>
                    </select>
                </div>

                {{-- Order Status --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Order Status</label>
                    <select name="order_status" class="form-select form-select-lg">
                        <option value="processing" {{ old('order_status') == 'processing' ? 'selected' : '' }}>Processing</option>
                        <option value="shipped" {{ old('order_status') == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ old('order_status') == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="cancelled" {{ old('order_status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                {{-- Shipping Address --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Shipping Address</label>
                    <input type="text" name="shipping_address" class="form-control form-control-lg" 
                           placeholder="Enter shipping address" value="{{ old('shipping_address') }}">
                </div>

                {{-- City --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">City</label>
                    <input type="text" name="city" class="form-control form-control-lg" 
                           placeholder="Enter city" value="{{ old('city') }}">
                </div>

                {{-- Tracking Number --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Tracking Number</label>
                    <input type="text" name="tracking_number" class="form-control form-control-lg" 
                           placeholder="Enter tracking number (optional)" value="{{ old('tracking_number') }}">
                </div>

                {{-- Submit --}}
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Create Order</button>
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
