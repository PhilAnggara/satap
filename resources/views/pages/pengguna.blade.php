@extends('layouts.app')
@section('title', 'SMP N 5 Satap Likbar')

@section('content')
<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-6 col-md-6 float-start">
        <h3>Kelola Pengguna</h3>
      </div>
    </div>
  </div>
  <section class="section mt-3">

    @if ($count)
      <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="fal fa-info-circle me-2"></i>
        <div>
          Anda mempunyai {{ $count }} pengguna menunggu persetujuan
        </div>
      </div>
    @endif
    
    @error('passwordPengguna')
      <div class="alert alert-danger alert-dismissible show fade">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @enderror
    
    @if(session('success'))
      <div class="alert alert-success alert-dismissible show fade">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped text-center text-nowrap">
            <thead>
              <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Status</th>
                <th class="text-center"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td class="text-start">
                    <div class="avatar avatar-lg bg-secondary me-3">
                      <img src="https://ui-avatars.com/api/?background=0092DE&color=fff&bold=true&name={{ $user->name }}" alt="" srcset="">
                    </div>
                    {{ $user->name }}
                  </td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @if ($user->role == 'Operator')
                      <span class="badge bg-light-success">Operator</span>
                    @elseif ($user->role == 'Tata Usaha')
                      <span class="badge bg-light-info">Tata Usaha</span>
                    @else
                      <span class="badge bg-light-primary">Umum</span>
                    @endif
                  </td>
                  <td>
                    @if ($user->approved)
                      <button class="btn icon icon-left btn-secondary btn-sm" disabled>
                        <i class="far fa-user-shield"></i>
                        Disetujui
                      </button>
                    @else
                      <a href="#" id="setujuUser" class="setuju-user btn icon icon-left btn-primary btn-sm" data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-role="{{ $user->role }}">
                        <i class="far fa-user-check"></i>
                        Setujui
                      </a>
                      <form action="{{ route('pengguna.update', $user->id) }}" id="setuju-user-{{ $user->id }}" method="POST">
                        @method('put')
                        @csrf
                        <input type="hidden" name="approved" value="1">
                      </form>
                    @endif
                  </td>
                  <td>
                    <div class="btn-group" role="group">
                      <a href="#" id="hapusUser" class="hapus-user btn icon btn-light" data-id="{{ $user->id }}" data-name="{{ $user->name }}">
                        <i class="far fa-user-times" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Pengguna"></i>
                      </a>
                      <form action="{{ route('pengguna.destroy', $user->id) }}" id="hapus-user-{{ $user->id }}" method="POST">
                        @method('delete')
                        @csrf
                      </form>
                      <button type="button" class="btn icon btn-light" data-bs-toggle="modal" data-bs-target="#gantiPassword-{{ $user->id }}">
                        <i class="far fa-lock-alt text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Ganti Password"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@include('includes.modals.pengguna-modal')
@endsection

@push('addon-script')
<script>
$(document).ready(function() {

  $('.setuju-user').click( function() {

    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var role = $(this).attr('data-role');

    Swal.fire({
      title: 'Setujui Pengguna',
      text: "Apakah anda ingin menyetujui "+ name +" sebagai "+ role +"?",
      icon: 'success',
      showCancelButton: true,
      confirmButtonColor: '#435EBE',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Setujui',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $(`#setuju-user-${id}`).submit();
      }
    });

  });
  
  $('.hapus-user').click( function() {

    var id = $(this).attr('data-id');
    var name = $(this).attr('data-name');

    Swal.fire({
      title: 'Hapus Pengguna',
      text: "Yakin ingin menghapus "+ name +"?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#435EBE',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $(`#hapus-user-${id}`).submit();
      }
    });

  });

});
</script>
@endpush