@extends('admin.layouts.app')

@section('content')
<h2 class="mb-4">All Orders</h2>

<div class="text-end mb-3">
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Add New Order</a>
</div>

<table class="table table-bordered text-center bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
             <th>customer_Name</th>
            <th>Total Amount</th>
            <th>Payment Method</th>
            <th>Payment Status</th>
            <th>Order Status</th>
            <th>Shipping Address</th>
            <th>City</th>
            <th>Tracking Number</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
              <td>{{ $order->name }}</td>
            <td>${{ $order->total_amount }}</td>
            <td>{{ $order->payment_method }}</td>
            <td>{{ $order->payment_status }}</td>
            <td>{{ $order->order_status }}</td>
            <td>{{ $order->shipping_address }}</td>
            <td>{{ $order->city }}</td>
            <td>{{ $order->tracking_number ?? '-' }}</td>
            <td>
                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
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
