@extends('layouts.app')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-6 col-md-6 float-start">
        <h3>Meubel</h3>
      </div>
      @if (auth()->user()->role == 'Operator' || auth()->user()->role == 'Tata Usaha')
        <div class="col-6 col-md-6">
          <button class="btn icon icon-left btn-outline-success float-end" data-bs-toggle="modal" data-bs-target="#tambah">
            <i class="fad fa-plus-circle"></i> 
            Tambah Data
          </button>
        </div>
      @endif
    </div>
  </div>
  <section class="section mt-3">


    @if($errors->any())
      <div class="alert alert-danger alert-dismissible show fade">
        Data gagal disimpan! Coba periksa kembali data yang anda masukan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    @if(session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card">
      <div class="card-body">
        <table class="table table-striped text-center text-nowrap" id="table1">
          <thead>
            <tr>
              <th class="text-center">Kode</th>
              <th class="text-center">Nama Barang</th>
              <th class="text-center">Tanggal Pembelian</th>
              {{-- <th class="text-center">Jumlah</th> --}}
              <th class="text-center">Kondisi</th>
              <th class="text-center">Keterangan</th>
              @if (auth()->user()->role == 'Operator' || auth()->user()->role == 'Tata Usaha')
                <th class="text-center"></th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>
                  <button type="button" class="btn icon btn-light me-2" data-bs-toggle="modal" data-bs-target="#barcode-{{ $item->id }}">
                    <i class="far fa-barcode" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Barcode"></i>
                  </button>
                  {{ $item->kode }}
                </td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM YYYY') }}</td>
                {{-- <td>{{ $item->jumlah }}</td> --}}
                <td>
                  @if ($item->kondisi == 'Baik')
                    <span class="badge bg-light-success">Baik</span>
                  @elseif ($item->kondisi == 'Rusak Ringan')
                    <span class="badge bg-light-warning">Rusak Ringan</span>
                  @else
                    <span class="badge bg-light-danger">Rrusak Berat</span>
                  @endif
                </td>
                <td>{{ $item->keterangan }}</td>
                @if (auth()->user()->role == 'Operator' || auth()->user()->role == 'Tata Usaha')
                  <td>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn icon btn-light" data-bs-toggle="modal" data-bs-target="#gambar-{{ $item->id }}">
                        <i class="{{ $item->gambar ? 'far' : 'fal' }} fa-image text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Gambar"></i>
                      </button>
                      <button type="button" class="btn icon btn-light" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                        <i class="far fa-edit text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"></i>
                      </button>
                      <a href="#" id="btnHapus" class="btn-hapus btn icon btn-light" data-id="{{ $item->id }}" data-title="{{ $item->nama_barang }}">
                        <i class="far fa-trash text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"></i>
                      </a>
                      <form action="{{ route('meubel.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                        @method('delete')
                        @csrf
                      </form>
                    </div>
                  </td>
                @endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@include('includes.modals.meubel-modal')
@endsection

@push('addon-script')
<script>
  // Image Preview
  const inpFile = document.getElementById("gambar");
  const previewContainer = document.getElementById("imagePreview");
  const previewImage = previewContainer.querySelector(".ip-image");
  const previewDefaultText = previewContainer.querySelector(".ip-default-text");

  previewContainer.addEventListener("click", function() {
    console.log("Di klik");
    inpFile.click();
  });

  inpFile.addEventListener("change", function() {
    const file = this.files[0];
    console.log(file);
    
    if (file) {
      const reader = new FileReader();

      previewDefaultText.style.display = "none";
      previewImage.style.display = "block";

      reader.addEventListener("load", function() {
        console.log(this);
        previewImage.setAttribute("src", this.result);
      });

      reader.readAsDataURL(file);
    } else {
      previewDefaultText.style.display = null;
      previewImage.style.display = null;
      previewImage.setAttribute("src", "");
    }
  });

  // DataTable
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
</script>
@endpush