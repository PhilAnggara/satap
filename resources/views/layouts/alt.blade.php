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

  <link rel="stylesheet" href="{{ url('frontend/vendors/barcode/style.css') }}" />
  <script type="text/javascript" src="{{ url('frontend/vendors/barcode/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ url('frontend/vendors/barcode/barcode.js') }}"></script>

  <script type="text/javascript">
    var sound = new Audio("frontend/vendors/barcode/barcode.wav");

    $(document).ready(function() {

      barcode.config.start = 0.1;
      barcode.config.end = 0.9;
      barcode.config.video = '#barcodevideo';
      barcode.config.canvas = '#barcodecanvas';
      barcode.config.canvasg = '#barcodecanvasg';
      barcode.setHandler(function(barcode) {
        $('#result').val(barcode);
        sound.play();	
      });
      barcode.init();

      // $('#result').bind('DOMSubtreeModified', function(e) {
      //   sound.play();	
      // });

    });
  </script>

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

  <script src="{{ url('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    // ToolTip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });
  </script>
</body>
</html>