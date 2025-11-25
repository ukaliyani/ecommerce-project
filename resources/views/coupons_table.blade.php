@extends('admin.layouts.app')

@section('content')
<h2>All Coupons</h2>
<a href="{{ route('coupons.create') }}" class="btn btn-primary mb-3">Add New Coupon</a>

<table class="table table-bordered text-center">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Type</th>
            <th>Value</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coupons as $coupon)
        <tr>
            <td>{{ $coupon->id }}</td>
            <td>{{ $coupon->code }}</td>
            <td>{{ $coupon->discount_type }}</td>
            <td>{{ $coupon->discount_value }}</td>
            <td>{{ $coupon->status }}</td>
            <td>
                <a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" class="d-inline">
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
