{{-- Flter Kondisi --}}
<div class="modal fade text-left" id="filterKondisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Cetak Laporan Berdasarkan Kondisi Barang</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('filter-kondisi') }}" target="_blank" method="post">
        @csrf
        <div class="modal-body">

          <div class="input-group">
            <span class="input-group-text">Kondisi</span>
            <select class="form-select" name="kondisi" required>
              <option value="" selected disabled>-- Pilih Kondisi --</option>
              <option>Baik</option>
              <option>Rusak Ringan</option>
              <option>Rusak Berat</option>
            </select>
            <button class="btn btn-primary" type="submit">Cetak</button>
          </div>

        </div>
      </form>
    </div>
  </div>
</div>

{{-- Flter Tanggal Pembelian --}}
<div class="modal fade text-left" id="filterTanggalPembelian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Cetak Laporan Berdasarkan Tanggal pembelian</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('filter-tanggal') }}" target="_blank" method="post">
        @csrf
        <div class="modal-body">

          <div class="input-group mb-3">
            <span class="input-group-text">Tanggal Awal</span>
            <input type="date" class="form-control" name="tgl_awal" required>
          </div>
          
          <div class="input-group">
            <span class="input-group-text">Tanggal Akhir</span>
            <input type="date" class="form-control" name="tgl_akhir" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            Cetak
          </button>
        </div>
      </form>
    </div>
  </div>
</div>