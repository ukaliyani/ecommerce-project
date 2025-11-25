@extends('admin.layouts.app')

@section('content')

<!-- NAVBAR -->
<nav class="apple-nav navbar navbar-expand-lg shadow-sm bg-white">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3 text-dark" href="{{ route('home') }}">
            <span class="gradient-text">ShopLogo</span>
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">

                <!-- Search Bar -->
                <li class="nav-item me-3">
                    <form class="d-flex" action="{{ route('shop') }}" method="GET">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Search products..." name="query">
                        <button class="btn btn-dark btn-sm" type="submit">Search</button>
                    </form>
                </li>

                <li class="nav-item me-3"><a class="nav-link menu-link" href="{{ route('shop') }}">Shop</a></li>
                <li class="nav-item me-3"><a class="nav-link menu-link" href="{{ route('cart') }}">Cart</a></li>
                <li class="nav-item me-3"><a class="nav-link menu-link" href="#">Orders</a></li>

                <!-- Auth Buttons -->
                <li class="nav-item me-2">
                    <a class="btn btn-outline-dark px-3 py-1 rounded-pill" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item me-3">
                    <a class="btn btn-outline-primary px-3 py-1 rounded-pill" href="{{route('register')}}">Sign Up</a>
                </li>

                <!-- Profile -->
                <li class="nav-item">
                    <a class="btn btn-dark px-3 py-1 rounded-pill" href="{{route('admin.dashboard')}}">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="modern-hero text-center d-flex align-items-center">
    <div class="container">
        <h1 class="display-3 fw-bold fade-in">Shop Smarter With Premium Products</h1>
        <p class="lead mt-3 mb-4 fade-in">Find the best products with exclusive deals and top-quality items.</p>
        <a href="{{ route('shop') }}" class="btn hero-btn fade-in px-5 py-3 rounded-pill fw-bold">Explore Now</a>
    </div>
</section>

<!-- CATEGORY CARDS -->
<section class="container my-5">
    <h2 class="fw-bold text-center mb-4">Shop by Category</h2>
    <div class="row g-4">
        @php
            // Database se fetch karoge to: $categories = App\Models\Category::all();
            $categories = ['Electronics','Fashion','Kitchen','Toys','Books','Sports','Beauty','Mobiles'];
        @endphp
        @foreach($categories as $category)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{ route('shop', ['category' => $category]) }}" class="text-decoration-none">
                <div class="card category-card text-center shadow-sm rounded-4 p-4">
                    <h5 class="fw-semibold text-dark">{{ $category }}</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- PRODUCTS -->
<section class="container my-5">
    <h2 class="fw-bold text-center mb-5 gradient-text">Popular Products</h2>
    <div class="row g-4">
        @for($i=1; $i<=8; $i++)
        <div class="col-md-3">
            <div class="modern-product shadow-lg rounded-4 bg-white">
                <img src="https://images.unsplash.com/photo-1606813902911-113c8b47767a" class="modern-img rounded-top">
                <div class="p-3 text-center">
                    <h5 class="fw-semibold">Product {{ $i }}</h5>
                    <p class="text-muted">$49.99</p>
                    <!-- Ratings -->
                    <div class="mb-2">
                        <span class="text-warning">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                    </div>
                    <button class="btn btn-outline-dark btn-sm px-4 rounded-pill me-2">View</button>
                    <button class="btn btn-dark btn-sm px-4 rounded-pill">Add</button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>

<!-- WHY US -->
<section class="container my-5">
    <h2 class="fw-bold text-center mb-4">Why Choose Us?</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="info-box text-center p-4 rounded-4 shadow-sm">
                <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" class="info-icon mb-3">
                <h5 class="fw-bold">Secure Payments</h5>
                <p class="text-muted">Pay using PayPal, Stripe or Cash on Delivery.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box text-center p-4 rounded-4 shadow-sm">
                <img src="https://cdn-icons-png.flaticon.com/512/1548/1548434.png" class="info-icon mb-3">
                <h5 class="fw-bold">Fast Delivery</h5>
                <p class="text-muted">We deliver products super fast.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box text-center p-4 rounded-4 shadow-sm">
                <img src="https://cdn-icons-png.flaticon.com/512/992/992703.png" class="info-icon mb-3">
                <h5 class="fw-bold">Easy Returns</h5>
                <p class="text-muted">7-day return & refund policy.</p>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="apple-footer text-center text-muted py-4 bg-dark text-white">
    <p class="m-0">&copy; 2025 ShopLogo — Premium & Modern Shopping Experience.</p>
</footer>

<!-- CSS -->
<style>
.gradient-text { background: linear-gradient(90deg, #4f46e5, #6d28d9); -webkit-background-clip: text; color: transparent; }
.menu-link { font-weight: 600; transition: .3s; }
.menu-link:hover { color: #6d28d9 !important; }

.modern-hero { height: 70vh; background: linear-gradient(to bottom right, #f7f7f7, #ececec); }
.hero-btn { background: linear-gradient(90deg, #4f46e5, #6d28d9); border: none; color: white; transition: .3s; }
.hero-btn:hover { opacity: 0.85; }

.modern-product { transition: transform .3s, box-shadow .3s; border: 1px solid #eee; }
.modern-product:hover { transform: translateY(-10px); box-shadow: 0 8px 25px rgba(0,0,0,0.08); }
.modern-img { width: 100%; height: 220px; object-fit: cover; }

.info-box { border: 1px solid #eee; transition: .3s; }
.info-box:hover { transform: scale(1.05); }
.info-icon { width: 60px; opacity: 0.8; }

.category-card { cursor: pointer; border: 1px solid #eee; transition: .3s; padding: 30px 0; }
.category-card:hover { transform: scale(1.05); background: #f8f8f8; }

.apple-footer { background: #222; color: #fff; }
</style>

@endsection
