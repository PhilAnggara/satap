{{-- Ganti Password --}}
@foreach ($users as $user)
<div class="modal fade text-left" id="gantiPassword-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Ganti Password untuk {{ $user->name }}</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('ganti-password-pengguna', $user->id) }}" method="post">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="passwordPengguna">Kata Sandi Baru</label>
            <input type="password" class="form-control" name="passwordPengguna" id="passwordPengguna" required>
          </div>

          <div class="form-group">
            <label for="passwordPengguna_confirmation">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" name="passwordPengguna_confirmation" id="passwordPengguna_confirmation" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary ml-1">
            Ubah Kata Sandi
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach