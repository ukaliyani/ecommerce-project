@extends('admin.layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">ShopLogo</a>
  </div>
</nav>

<section class="py-5">
  <div class="container">
    <h2>Checkout</h2>
    <form id="checkout-form">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Payment Method</label>
        <select class="form-select" required>
          <option value="">Select</option>
          <option value="cod">Cash on Delivery</option>
          <option value="paypal">PayPal</option>
          <option value="stripe">Stripe</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Place Order</button>
    </form>
  </div>
</section>
@endsection
