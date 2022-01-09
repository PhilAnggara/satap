<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @livewireStyles
  @stack('addon-style')

</head>
<body>

  <nav class="navbar navbar-light">
    <div class="container d-block">
      <a href="{{ route('dashboard') }}"><i class="bi bi-chevron-left"></i></a>
      <a class="app-logo-alt navbar-brand ms-4" href="{{ route('dashboard') }}">
        <img src="{{ url('frontend/images/logo-alt.png') }}">
      </a>
    </div>
  </nav>
  
  @yield('content')
  
  @stack('prepend-script')
  @livewireScripts
  @stack('addon-script')

</body>
</html>