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
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-4">
                <div class="stats-icon purple">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
              <div class="col-md-8">
                <h6 class="text-muted font-semibold">Informasi 1</h6>
                <h6 class="font-extrabold mb-0">150</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-4">
                <div class="stats-icon blue">
                  <i class="fas fa-user"></i>
                </div>
              </div>
              <div class="col-md-8">
                <h6 class="text-muted font-semibold">Informasi 2</h6>
                <h6 class="font-extrabold mb-0">150</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-4">
                <div class="stats-icon green">
                  <i class="fas fa-user-plus"></i>
                </div>
              </div>
              <div class="col-md-8">
                <h6 class="text-muted font-semibold">Informasi 3</h6>
                <h6 class="font-extrabold mb-0">150</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-4">
                <div class="stats-icon red">
                  <i class="fas fa-bookmark"></i>
                </div>
              </div>
              <div class="col-md-8">
                <h6 class="text-muted font-semibold">Informasi 4</h6>
                <h6 class="font-extrabold mb-0">150</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection