@extends('admin.layouts.admin')

@section('content')
<h2 class="mb-4">Users Management</h2>

<div class="card p-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ali Raza</td>
                <td>ali@example.com</td>
                <td>Customer</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
