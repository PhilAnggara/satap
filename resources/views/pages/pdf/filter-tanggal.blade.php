@extends('layouts.pdf')
@section('title', $title)

@section('content')
<div>
  
  @include('includes.pdf-header')

  <h1 style="text-align:center">
    <span style="font-family:Arial, Helvetica, sans-serif; font-weight:bold; color:#000000">
      Laporan Inventaris Barang
    </span>
  </h1>
  <h4 style="text-align:center; margin-bottom: 20pt">
    <span style="font-family:Arial, Helvetica, sans-serif; color:#000000">
      Tanggal Pembelian : {{ $awal }} - {{ $akhir }}
    </span>
  </h4>

  {{-- <p class="title">Meubel</p> --}}
  <table class="my-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Tanggal Pembelian</th>
        {{-- <th>Jumlah</th> --}}
        <th width="100px">Kondisi</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
      @foreach ($bangunan as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_bangunan }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah_ruangan }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($meubel as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($elektronik as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($buku as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($laboratorium as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($matematika as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($olahraga as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
      @foreach ($kesenian as $item)
        <tr>
          <td class="text-center">{{ $no }}</td>
          <td class="text-center">{{ $item->kode }}</td>
          <td>{{ $item->nama_barang }}</td>
          <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal )->isoFormat('D MMMM Y') }}</td>
          {{-- <td class="text-center">{{ $item->jumlah }}</td> --}}
          <td class="text-center">{{ $item->kondisi }}</td>
          <td class="text-center">{{ $item->keterangan }}</td>
        </tr>
        {{ $no++ }}
      @endforeach
    </tbody>
  </table>
  
  <table class="footer">
    <tr>
      <td>
        Penanggung Jawab Barang
      </td>
      <td class="center"></td>
      <td>
        Mengetahui
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        Kepala Sekolah
      </td>
    </tr>
    <tr class="ttd">
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>
        Robert Paembonan, S.Pd
      </td>
      <td></td>
      <td>
        Jembris Muhaling, S.Pd
      </td>
    </tr>
    <tr>
      <td>
        NIP.198310132010011004
      </td>
      <td></td>
      <td>
        NIP.197204012003121014
      </td>
    </tr>
  </table>

</div>
@endsection