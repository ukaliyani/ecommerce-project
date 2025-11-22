@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-5">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">ShopLogo</a>
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item me-3"><a class="nav-link" href="{{ url('browse') }}">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('auth') }}">Login/Signup</a></li>
            </ul>
        </div>
    </nav>

    <!-- Cart Section -->
    <div class="row">
        <!-- Cart Items -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-sm p-3">
                <h3 class="fw-bold mb-4">Your Cart</h3>
                <div class="table-responsive">
                    <table class="table align-middle" id="cart-table">
                        <thead class="table-light">
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 4; $i++)
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="https://picsum.photos/60/60?random={{ $i }}" class="rounded me-2" alt="Product {{ $i }}">
                                    <span>Product {{ $i }}</span>
                                </td>
                                <td>PKR {{ rand(100, 500) }}</td>
                                <td>
                                    <div class="input-group" style="width:100px;">
                                        <button class="btn btn-outline-secondary btn-sm decrement">-</button>
                                        <input type="number" class="form-control text-center qty" value="1" min="1">
                                        <button class="btn btn-outline-secondary btn-sm increment">+</button>
                                    </div>
                                </td>
                                <td>PKR <span class="item-total">0</span></td>
                                <td><button class="btn btn-danger btn-sm remove-item"><i class="bi bi-trash"></i></button></td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Total Summary -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-4">
                <h4 class="fw-bold mb-3">Cart Summary</h4>
                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal:</span>
                    <span id="cart-subtotal">PKR 0</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span>Tax (10%):</span>
                    <span id="cart-tax">PKR 0</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold mb-3">
                    <span>Total:</span>
                    <span id="cart-total">PKR 0</span>
                </div>
                <a href="{{ url('checkout') }}" class="btn btn-success w-100 fw-bold">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Card shadow & hover effect */
    .card {
        border-radius: 12px;
    }

    .card:hover {
        transform: translateY(-3px);
        transition: 0.3s;
    }

    /* Table styling */
    #cart-table td, #cart-table th {
        vertical-align: middle;
    }

    .btn-outline-secondary {
        border-radius: 6px;
    }

    .remove-item i {
        font-size: 1.2rem;
    }

    /* Navbar */
    .navbar {
        background: linear-gradient(90deg, #4a90e2, #50e3c2);
    }

    .navbar .nav-link, .navbar .navbar-brand {
        color: #fff !important;
        font-weight: 600;
    }

    .navbar .nav-link:hover {
        color: #ffd700 !important;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        #cart-table {
            font-size: 14px;
        }
    }
</style>

<!-- JS for quantity increment/decrement & total calculation -->


@endsection
