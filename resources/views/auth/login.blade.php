@extends('layouts.auth')
@section('title', 'SMP N 5 Satap Likbar | Masuk')

@section('content')
<div class="login-wrap p-4 p-md-5">
  <div class="d-flex">
    <div class="w-100">
      <h3 class="mb-4">Masuk</h3>
    </div>
  </div>
  <form action="{{ route('login') }}" method="POST" class="signin-form">
    @csrf
    <div class="form-group mb-3">
      <label class="label" for="username">Username</label>
      <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" autofocus required>
      @error('username')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label class="label" for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
    </div>
    <div class="form-group d-md-flex">
      <div class="w-50 text-left">
        <label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
        <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </form>
  <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
</div>
@endsection