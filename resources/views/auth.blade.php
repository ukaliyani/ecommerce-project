@extends('admin.layouts.app')

@section('content')
<section class="vh-100 d-flex align-items-center justify-content-center bg-light">
  <div class="card p-5" style="width: 400px;">
    <h3 class="text-center mb-4">Login / Signup</h3>
    <form>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
      <button type="button" class="btn btn-danger w-100">Login with Gmail</button>
    </form>
  </div>
</section>
@endsection
