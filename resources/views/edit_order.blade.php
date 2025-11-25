@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card shadow-lg w-50">
        <div class="card-header bg-warning text-white text-center">
            <h3 class="mb-0">Edit Order</h3>
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

            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
<div class="mb-4">
                    <label class="form-label fw-bold">Customer Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" 
                           placeholder="Enter customer name" value="{{ old('name') }}">
                </div>
                {{-- Total Amount --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Total Amount</label>
                    <input type="number" step="0.01" name="total_amount" class="form-control" value="{{ old('total_amount', $order->total_amount) }}">
                </div>

                {{-- Payment Method --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Payment Method</label>
                    <input type="text" name="payment_method" class="form-control" value="{{ old('payment_method', $order->payment_method) }}">
                </div>

                {{-- Payment Status --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Payment Status</label>
                    <select name="payment_status" class="form-select">
                        <option value="paid" {{ old('payment_status', $order->payment_status) == 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="pending" {{ old('payment_status', $order->payment_status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="failed" {{ old('payment_status', $order->payment_status) == 'failed' ? 'selected' : '' }}>Failed</option>
                    </select>
                </div>

                {{-- Order Status --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Order Status</label>
                    <select name="order_status" class="form-select">
                        <option value="processing" {{ old('order_status', $order->order_status) == 'processing' ? 'selected' : '' }}>Processing</option>
                        <option value="shipped" {{ old('order_status', $order->order_status) == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ old('order_status', $order->order_status) == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="cancelled" {{ old('order_status', $order->order_status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                {{-- Shipping Address --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Shipping Address</label>
                    <textarea name="shipping_address" class="form-control_
