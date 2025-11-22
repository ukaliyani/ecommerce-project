@extends('admin.layouts.admin')

@section('content')
<h2 class="mb-4">Orders Management</h2>

<div class="card p-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1001</td>
                <td>Ali Raza</td>
                <td>PKR 2200</td>
                <td><span class="badge bg-warning">Processing</span></td>
                <td>2025-11-18</td>
                <td>
                    <button class="btn btn-success btn-sm">Update Status</button>
                    <button class="btn btn-info btn-sm">View</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
