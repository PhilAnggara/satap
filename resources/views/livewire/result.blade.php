<div>
  @if ($found == 0)
    <div class="p-5 text-center">
      <i class="fad fa-barcode-scan fa-7x mt-5"></i>
      <p class="lead mt-5">
        Silahkan pindai <b><i>Barcode</i></b> atau masukan <b><i>Kode Barang</i></b> secara manual
      </p>
    </div>
  @elseif ($found == 1)
    @if ($item->gambar)
      <img src="{{ Storage::url($item->gambar) }}" class="img-fluid img-thumbnail mb-2 mt-2 mt-md-0" width="100%">
    @else
      <div class="text-center text-muted">
        <div class="mt-3">
          <i class="fal fa-image fa-7x"></i>
        </div>
        <small class="text-muted mt-2"><i>Belum Ada Gambar</i></small>
      </div>
    @endif
    <div class="table-responsive">
      <table class="table table-lg">
        @if ($cat == 'bangunan')
          <tbody>
            <tr>
              <td>Nama Bangunan</td>
              <th>{{ $item->nama_bangunan }}</th>
            </tr>
            {{-- <tr>
              <td>Jumlah Ruangan</td>
              <th>{{ $item->jumlah_ruangan }}</th>
            </tr> --}}
            <tr>
              <td>Tanggal Dibangun</td>
              <th>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM YYYY') }}</th>
            </tr>
            <tr>
              <td>Kondisi</td>
              <th>
                @if ($item->kondisi == 'Baik')
                  <span class="badge bg-light-success">Baik</span>
                @elseif ($item->kondisi == 'Rusak Ringan')
                  <span class="badge bg-light-warning">Rusak Ringan</span>
                @else
                  <span class="badge bg-light-danger">Rrusak Berat</span>
                @endif
              </th>
            </tr>
            <tr>
              <td>Keterangan</td>
              <th>{{ $item->keterangan }}</th>
            </tr>
          </tbody>
        @else
          <tbody>
            <tr>
              <td>Nama Barang</td>
              <th>{{ $item->nama_barang }}</th>
            </tr>
            {{-- <tr>
              <td>Jumlah</td>
              <th>{{ $item->jumlah }}</th>
            </tr> --}}
            <tr>
              <td>Tanggal Dibangun</td>
              <th>{{ Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM YYYY') }}</th>
            </tr>
            <tr>
              <td>Kondisi</td>
              <th>
                @if ($item->kondisi == 'Baik')
                  <span class="badge bg-light-success">Baik</span>
                @elseif ($item->kondisi == 'Rusak Ringan')
                  <span class="badge bg-light-warning">Rusak Ringan</span>
                @else
                  <span class="badge bg-light-danger">Rrusak Berat</span>
                @endif
              </th>
            </tr>
            <tr>
              <td>Keterangan</td>
              <th>{{ $item->keterangan }}</th>
            </tr>
          </tbody>
        @endif
      </table>
    </div>
  @else
    <div class="p-5 text-center">
      <i class="fad fa-file-search fa-7x mt-5"></i>
      <p class="lead mt-5">
          Data tidak ditemukan
      </p>
    </div>
  @endif
</div>
