@extends('layouts.auth')
@section('title', 'SMP N 5 Satap Likbar | Daftar')

@section('content')
<div class="login-wrap p-4 p-md-5">
  <div class="d-flex">
    <div class="w-100">
      <h3 class="mb-4">Buat Akun</h3>
    </div>
  </div>
  <form action="{{ route('register') }}" method="POST" class="signin-form">
    @csrf
    
    <div class="form-group mb-3">
      <label class="label" for="name">Nama</label>
      <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" value="{{ old('name') }}" autofocus required>
      @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label class="label" for="username">Username</label>
      <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
      @error('username')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label class="label" for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label class="label" for="role">Jabatan <small>(Optional)</small></label>
      <select id="role" name="role" class="form-control" required>
        <option value="Umum" selected disabled>-- Pilih Jabatan --</option>
        <option {{ old('role') == 'Operator' ? 'selected' : '' }} value="Operator">Operator</option>
        <option {{ old('role') == 'Tata Usaha' ? 'selected' : '' }} value="Tata Usaha">Tata Usaha</option>
      </select>
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

    <div class="form-group mb-3">
      <label class="label" for="password-confirm">Konfirmasi Password</label>
      <input type="password" id="password-confirm" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password" required>
      @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="form-group">
      <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
    </div>
  </form>
  <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
</div>
@endsection