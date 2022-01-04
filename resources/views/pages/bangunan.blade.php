@extends('layouts.app')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-6 col-md-6 float-start">
        <h3>Bangunan</h3>
      </div>
      <div class="col-6 col-md-6">
        <button class="btn icon icon-left btn-outline-success float-end">
          <i class="fad fa-plus-circle"></i> 
          Tambah Data
        </button>
      </div>
    </div>
  </div>
  <section class="section mt-3">
    <div class="card">
      <div class="card-body">
        <table class="table table-striped text-center" id="table1">
          <thead>
            <tr>
              <th class="text-center">Kode</th>
              <th class="text-center">Nama Bangunan</th>
              <th class="text-center">Jumlah Ruangan</th>
              <th class="text-center">Tanggal Berdiri</th>
              <th class="text-center">Kondisi</th>
              <th class="text-center">Keterangan</th>
              <th class="text-center"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button type="button" class="btn icon btn-light me-2">
                  <i class="far fa-barcode" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Barcode"></i>
                </button>
                BANG-2009-0001
              </td>
              <td>Ruang Kelas</td>
              <td>3</td>
              <td>5 Juni 2009</td>
              <td>
                <span class="badge bg-success">Baik</span>
              </td>
              <td></td>
              <td>
                <div class="btn-group" role="group">
                  <button type="button" class="btn icon btn-light">
                    <i class="far fa-image text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Gambar"></i>
                  </button>
                  <button type="button" class="btn icon btn-light">
                    <i class="far fa-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"></i>
                  </button>
                  <button type="button" class="btn icon btn-light">
                    <i class="far fa-trash text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection

@push('addon-script')
<script>
  let table1 = document.querySelector('#table1');
  let dataTable = new simpleDatatables.DataTable(table1, {
    sortable: false,
    perPageSelect: false,

    labels: {
      placeholder: "Cari...",
      perPage: "{select} data per halaman",
      noRows: "Data tidak ditemukan",
      info: "Menampilkan {start} - {end} dari {rows} data",
    }
  });

  
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script> 
@endpush