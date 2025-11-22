@extends('admin.layouts.app')

@section('title','Home')

@section('content')

<!-- HERO SECTION -->
<section class="py-5 text-white text-center" style="background: linear-gradient(90deg, #4f46e5, #6d28d9);">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Shop Smarter With Premium Products</h1>
        <p class="lead mb-4">Find the best products with exclusive deals and top-quality items.</p>
        <a href="{{ route('shop') }}" class="btn btn-light btn-lg rounded-pill btn-hover">Explore Now</a>
    </div>
</section>

<!-- SEARCH BAR ABOVE PRODUCTS -->
<section class="container my-5">
    <form action="{{ route('shop') }}" method="GET" class="d-flex justify-content-center">
        <input type="text" name="query" placeholder="Search products..." class="form-control w-50 me-2">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</section>

<!-- CATEGORY CARDS -->
<section class="container my-5">
    <h2 class="text-center fw-bold mb-4">Shop by Category</h2>
    <div class="row g-3">
        @php
            $categories = ['Electronics','Fashion','Kitchen','Toys','Books','Sports','Beauty','Mobiles'];
        @endphp
        @foreach($categories as $category)
        <div class="col-6 col-md-3">
            <a href="{{ route('shop', ['category' => $category]) }}" class="text-decoration-none">
                <div class="card text-center p-4 shadow-sm card-hover">
                    <h5 class="fw-semibold">{{ $category }}</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- PRODUCTS -->
<section class="container my-5">
    <h2 class="text-center fw-bold mb-5" style="background: linear-gradient(90deg, #6d28d9, #4f46e5); -webkit-background-clip: text; color: transparent;">Popular Products</h2>
    <div class="row g-4">
        @for($i=1; $i<=8; $i++)
        <div class="col-6 col-md-3">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1606813902911-113c8b47767a" class="card-img-top" style="height:220px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold">Product {{ $i }}</h5>
                    <p class="text-muted">$49.99</p>
                    <div class="mb-2 text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                    <div class="d-flex justify-content-center gap-2">
                        <!-- View -->
                        <a href="{{ route('product.detail', $i) }}" class="btn btn-outline-dark btn-sm">View</a>
                        <!-- Add -->
                        <form action="{{ route('cart.add', $i) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="container my-5">
    <h2 class="text-center fw-bold mb-4">Why Choose Us?</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm card-hover">
                <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" class="mx-auto mb-3" style="width:60px;">
                <h5 class="fw-bold">Secure Payments</h5>
                <p class="text-muted">Pay using PayPal, Stripe or Cash on Delivery.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm card-hover">
                <img src="https://cdn-icons-png.flaticon.com/512/1548/1548434.png" class="mx-auto mb-3" style="width:60px;">
                <h5 class="fw-bold">Fast Delivery</h5>
                <p class="text-muted">We deliver products super fast.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-4 shadow-sm card-hover">
                <img src="https://cdn-icons-png.flaticon.com/512/992/992703.png" class="mx-auto mb-3" style="width:60px;">
                <h5 class="fw-bold">Easy Returns</h5>
                <p class="text-muted">7-day return & refund policy.</p>
            </div>
        </div>
    </div>
</section>

@endsection
