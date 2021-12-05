@extends('layouts.alt')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="container">
  
  {{-- <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3>Scan Barcode</h3>
    </div>
  </div> --}}

  <div class="card mt-5">
    <div class="card-header">
      <h4 class="card-title">Scan Barcode</h4>
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-12 col-md-6">
          <div id="barcode">
            <video id="barcodevideo" width="100%" autoplay></video>
            <canvas id="barcodecanvasg"></canvas>
          </div>
          <canvas id="barcodecanvas"></canvas>
          {{-- <div id="result"></div> --}}
        </div>
        <div class="col-12 col-md-6">
          <div class="input-group mb-3">
            <input id="result" type="search" class="form-control" placeholder="Kode Barang">
            <span class="input-group-text" id="basic-addon2">
              <i class="bi bi-upc-scan"></i>
            </span>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection