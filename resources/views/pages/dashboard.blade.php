@extends('layouts.app')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-6 col-md-6 float-start">
        <h3>Beranda</h3>
      </div>
      @if (auth()->user()->role == 'Operator')
        <div class="col-6 col-md-6">
          {{-- <a href="{{ route('cetak-laporan') }}" class="btn icon icon-left btn-outline-secondary float-end" target="_blank">
            <i class="fad fa-print"></i> 
            Cetak Laporan
          </a> --}}
          <div class="dropdown">
            <a class="btn icon icon-left btn-outline-secondary float-end dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fad fa-print"></i> 
              Cetak Laporan
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a class="dropdown-item" href="{{ route('laporan-keseluruhan') }}" target="_blank">Laporan keseluruhan</a>
              </li>
              <li>
                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#filterKondisi">
                  Filter kondisi
                </button>
              </li>
              <li>
                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#filterTanggalPembelian">
                  Filter tanggal pembelian
                </button>
              </li>
            </ul>
          </div>
        </div>
      @endif
    </div>
  </div>
  <section class="section mt-4">
    
    @if(session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session('gagal'))
      <div class="alert alert-danger alert-dismissible show fade">
        {{ session('gagal') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
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
@include('includes.modals.laporan-modal')
@endsection

@push('addon-style')
  <script src="{{ url('frontend/assets/vendors/chartjs/Chart.min.css') }}"></script>
@endpush

@push('addon-script')
  <script src="{{ url('frontend/assets/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendors/apexcharts/apexcharts.js') }}"></script>
@endpush