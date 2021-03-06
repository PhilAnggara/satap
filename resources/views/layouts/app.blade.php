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

  <div id="app">
    @include('includes.sidebar')
    <div id="main" class='layout-navbar'>
      @include('includes.navbar')
      <div id="main-content">
        @yield('content')
        @include('includes.footer')
      </div>
    </div>
  </div>
  
  @include('includes.modals.password-modal')

  @stack('prepend-script')
  @include('includes.script')
  <script src="{{ url('js/app.js') }}"></script>
  @livewireScripts
  @stack('addon-script')
  
  @error('current_password')
    <script type="text/javascript">
      var myModal = new bootstrap.Modal(document.getElementById('gantiPassword'));
      myModal.show()
    </script>
  @enderror
  @error('password')
    <script type="text/javascript">
      var myModal = new bootstrap.Modal(document.getElementById('gantiPassword'));
      myModal.show()
    </script>
  @enderror

</body>
</html>