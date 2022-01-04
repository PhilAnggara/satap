@extends('layouts.auth')
@section('title', 'SMP N 5 Satap Likbar | Masuk')

@section('content')
<div class="login-wrap p-4 p-md-5">
  <div class="d-flex">
    <div class="w-100">
      <h3 class="mb-4">Masuk</h3>
    </div>
  </div>
  <form action="#" class="signin-form">
    <div class="form-group mb-3">
      <label class="label" for="name">Username</label>
      <input type="text" class="form-control" placeholder="Username" required>
    </div>
    <div class="form-group mb-3">
      <label class="label" for="password">Password</label>
      <input type="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
    </div>
    <div class="form-group d-md-flex">
      <div class="w-50 text-left">
        <label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya
        <input type="checkbox" checked>
        <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </form>
  <p class="text-center">Belum punya akun? <a data-toggle="tab" href="{{ route('register') }}">Daftar</a></p>
</div>
@endsection