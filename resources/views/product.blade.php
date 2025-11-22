@extends('admin.layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">ShopLogo</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="{{ url('cart') }}">Cart</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('auth') }}">Login/Signup</a></li>
    </ul>
  </div>
</nav>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('assets/img/product1.jpg') }}" class="img-fluid rounded" alt="Product">
      </div>
      <div class="col-md-6">
        <h2>Product Name</h2>
        <p class="text-muted">Category: Electronics</p>
        <h3>PKR 4,500</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity</label>
          <input type="number" id="quantity" value="1" class="form-control w-25">
        </div>
        <button class="btn btn-success" id="addToCart">Add to Cart</button>
      </div>
    </div>
  </div>
</section>
@endsection
