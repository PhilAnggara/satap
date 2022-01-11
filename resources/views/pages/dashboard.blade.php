@extends('layouts.app')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Beranda</h3>
      </div>
    </div>
  </div>
  <section class="section mt-4">
    <div class="row">
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon purple">
                  <i class="fas fa-school"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Bangunan</h6>
                <h6 class="font-extrabold mb-0">{{ $a }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon blue">
                  <i class="fas fa-chair-office"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Meubel</h6>
                <h6 class="font-extrabold mb-0">{{ $b }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon green">
                  <i class="fas fa-desktop-alt"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Alat Elektronik</h6>
                <h6 class="font-extrabold mb-0">{{ $c }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-4">
                <div class="stats-icon red">
                  <i class="fas fa-cabinet-filing"></i>
                </div>
              </div>
              <div class="col-8">
                <h6 class="text-muted font-semibold">Alat Penunjang KBM</h6>
                <h6 class="font-extrabold mb-0">{{ $d }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Kondisi Barang</h4>
          </div>
          <div class="card-body">
            <canvas id="bar"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Jumlah Pengguna</h4>
          </div>
          <div class="card-body">
            <div id="chart-visitors-profile"></div>
          </div>
        </div>
      </div>
    </div> --}}

  </section>
</div>
@endsection

@push('addon-style')
  <script src="{{ url('frontend/assets/vendors/chartjs/Chart.min.css') }}"></script>
@endpush

@push('addon-script')
  <script src="{{ url('frontend/assets/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendors/apexcharts/apexcharts.js') }}"></script>
@endpush