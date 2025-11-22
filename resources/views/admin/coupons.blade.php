@extends('admin.layouts.admin')

@section('content')
<h2 class="mb-4">Coupons & Discounts</h2>
<a href="#" class="btn btn-success mb-3">Add New Coupon</a>

<div class="card p-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Coupon ID</th>
                <th>Code</th>
                <th>Discount %</th>
                <th>Valid Till</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>BLACKFRIDAY</td>
                <td>20%</td>
                <td>2025-11-30</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
