{{-- Tambah Data --}}
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('bangunan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          @if($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          @endif

          <div class="form-group">
            <label for="gambar">Gambar</label>
            <small class="text-muted">(optional)</small>
            <div class="image-preview" id="imagePreview">
              <img src="" alt="Image Preview" class="ip-image">
              <span class="ip-default-text">Pilih Gambar</span>
            </div>
            <div class="input-group mb-3">
              <label class="input-group-text" for="gambar"><i class="bi bi-upload"></i></label>
              <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
            </div>
          </div>

          {{-- <div class="form-group">
            <label for="gambar">Gambar</label>
            <small class="text-muted">(optional)</small>
            <div class="input-group mb-3">
              <label class="input-group-text" for="gambar"><i class="bi bi-upload"></i></label>
              <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
          </div> --}}

          <div class="form-group">
            <label for="nama_bangunan">Nama Banngunan</label>
            <input type="text" class="form-control" name="nama_bangunan" id="nama_bangunan" required>
          </div>

          <div class="form-group">
            <label for="jumlah_ruangan">Jumlah Ruangan</label>
            <input type="text" class="form-control" name="jumlah_ruangan" id="jumlah_ruangan" required>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Berdiri</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
          </div>

          <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select class="form-select" name="kondisi" id="kondisi" required>
              <option value="" selected disabled>-- Pilih Kondisi --</option>
              <option>Baik</option>
              <option>Rusak Ringan</option>
              <option>Rusak Berat</option>
            </select>
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary ml-1">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Barcode --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="barcode-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header bg-dark white">
      <span class="modal-title" id="myModalLabel1">{{ $item->nama_bangunan }}</span>
      <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
        <i data-feather="x"></i>
      </button>
    </div>
    <div class="modal-body text-center pt-5">

      <a href="{{ Storage::url($item->barcode) }}" download>
        <img src="{{ Storage::url($item->barcode) }}" class="barcode-img img-fluid mb-3">
      </a>
      <p class="lead">{{ $item->kode }}</p>

    </div>
  </div>
</div>
</div>
@endforeach

{{-- Gambar --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="gambar-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">{{ $item->nama_bangunan }}</h5>
      <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
        <i data-feather="x"></i>
      </button>
    </div>
    <div class="modal-body">
      
      @if ($item->gambar)
        <img src="{{ Storage::url($item->gambar) }}" class="img-fluid img-thumbnail mb-3" width="100%">
        <div class="d-flex justify-content-center">
          <a href="#" id="hapusGbr" class="hapus-gbr btn btn-sm icon btn-light" data-id="{{ $item->id }}" data-title="{{ $item->nama_bangunan }}">
            <i class="far fa-trash text-secondary"></i>
            Hapus Gambar
          </a>
        </div>
        <form action="{{ route('delete-image', $item->id) }}" id="hapus-gbr-{{ $item->id }}" method="POST">
          @csrf
          <input type="hidden" name="table" value="Bangunan">
        </form>
      @else
        <div class="border rounded mb-2 py-5">
          <div class="text-center my-5">
            <i class="fal fa-image fa-7x"></i>
            <p>Belum Ada Gambar</p>
            <button class="btn btn-outline-primary mt-3" data-bs-target="#edit-{{ $item->id }}" data-bs-toggle="modal" data-bs-dismiss="modal">
              Tambah Gambar
            </button>
          </div>
        </div>
      @endif

    </div>
  </div>
</div>
</div>
@endforeach

{{-- Edit --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Edit Data</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('bangunan.update', $item->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="modal-body">

          @if($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
          @endif

          <div class="form-group">
            <label for="gambar">{{ $item->gambar ? 'Ganti ' : 'Tambah ' }}Gambar</label>
            <small class="text-muted">(optional)</small>
            {{-- @if ($item->gambar)
              <img src="{{ Storage::url($item->gambar) }}" class="img-fluid rounded mb-3">
            @else
              <div class="image-preview" id="imagePreview">
                <img src="" alt="Image Preview" class="ip-image">
                <span class="ip-default-text">Pilih Gambar</span>
              </div>
            @endif --}}
            <div class="input-group mb-3">
              <label class="input-group-text" for="gambar"><i class="bi bi-upload"></i></label>
              <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
            </div>
          </div>

          <div class="form-group">
            <label for="nama_bangunan">Nama Banngunan</label>
            <input type="text" class="form-control" name="nama_bangunan" id="nama_bangunan" value="{{ $item->nama_bangunan }}" required>
          </div>

          <div class="form-group">
            <label for="jumlah_ruangan">Jumlah Ruangan</label>
            <input type="text" class="form-control" name="jumlah_ruangan" id="jumlah_ruangan" value="{{ $item->jumlah_ruangan }}" required>
          </div>

          <div class="form-group">
            <label for="tanggal">Tanggal Berdiri</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $item->tanggal }}" required>
          </div>

          <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select class="form-select" name="kondisi" id="kondisi" required>
              <option value="" selected disabled>-- Pilih Kondisi --</option>
              <option {{ $item->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
              <option {{ $item->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
              <option {{ $item->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
            </select>
          </div>

          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ $item->keterangan }}">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary ml-1">
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach