@extends('admin.layouts.app')

@section('content')

<div class="container-fluid py-5">
    <div class="row">

        <!-- Sidebar Filter -->
        <div class="col-lg-3 mb-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold mb-4 text-center">Filter Products</h5>

                <div class="mb-3">
                    <label for="categoryFilter" class="form-label fw-semibold">Category</label>
                    <select class="form-select" id="categoryFilter">
                        <option value="">All Categories</option>
                        <option value="electronics">Electronics</option>
                        <option value="fashion">Fashion</option>
                        <option value="home">Home</option>
                        <option value="beauty">Beauty</option>
                        <option value="books">Books</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="priceFilter" class="form-label fw-semibold">Sort by Price</label>
                    <select class="form-select" id="priceFilter">
                        <option value="">Select</option>
                        <option value="low">Low to High</option>
                        <option value="high">High to Low</option>
                    </select>
                </div>

                <div class="d-grid mt-3">
                    <button class="btn btn-primary shadow-sm fw-bold">Apply Filters</button>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9">
            <h3 class="fw-bold mb-4">All Products</h3>
            <div class="row g-4" id="product-list">

                @for ($i = 1; $i <= 12; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0 hover-scale">
                        <img src="https://picsum.photos/300/200?random={{ $i }}" class="card-img-top" alt="Product {{ $i }}">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Product {{ $i }}</h5>
                            <p class="text-muted mb-2">$ {{ rand(10, 100) }}.00</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>

    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Card hover effect */
    .hover-scale:hover {
        transform: translateY(-8px);
        transition: 0.3s ease-in-out;
        box-shadow: 0 12px 25px rgba(0,0,0,0.18);
    }

    /* Sidebar card */
    .card {
        border-radius: 12px;
    }

    /* Buttons styling */
    .btn-primary, .btn-outline-primary {
        border-radius: 50px;
        font-weight: 600;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #4a90e2, #50e3c2);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .btn-outline-primary:hover {
        background: #4a90e2;
        color: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* Labels & fonts */
    .form-label {
        font-size: 14px;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .col-lg-3 {
            margin-bottom: 20px;
        }
    }
</style>

@endsection
