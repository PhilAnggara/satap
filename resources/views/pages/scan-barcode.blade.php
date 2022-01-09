@extends('layouts.alt')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="container">

  <div class="card mt-md-5">
    <div class="card-header">
      <div class="row">
        <div class="col-12 col-md-6">
          <h4 class="card-title">Scan Barcode</h4>
        </div>
        <div class="col-12 col-md-6">
          @livewire('input')
        </div>
      </div>
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-12 col-md-6">
          <div id="camera" width="100%"></div>
        </div>
        <div class="col-12 col-md-6">
          @livewire('result')
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="{{ url('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('frontend/vendors/quaggaJs/quagga.min.js') }}"></script>
  <script>

    var sound = new Audio('frontend/sound/found.wav');

    // ToolTip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    // Clear Input
    function clearInput() {
      document.getElementById('result').value = '';
      document.getElementById('result').dispatchEvent(new Event('input'));
    }

    // Scanner
    Quagga.init({
      inputStream : {
        name : "Live",
        type : "LiveStream",
        target: document.querySelector('#camera')
      },
      frequency: 1,
      decoder : {
        readers : ["code_128_reader"]
      }
    }, function(err) {
      if (err) {
        console.log(err);
        return
      }
      console.log("Ready to start");
      Quagga.start();
    });

    Quagga.onDetected(function (data){
      console.log(data);
      document.querySelector('#result').value=data.codeResult.code;
      document.getElementById('result').dispatchEvent(new Event('input'));
      sound.play();
    });
    
  </script>
@endpush