{{-- Ganti Password --}}
<div class="modal fade text-left" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel1">Ganti Password</h5>
        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('ganti-password') }}" method="post">
        @method("put")
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label for="current_password">Kata Sandi Lama</label>
            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="current_password" required>
            @error('current_password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Kata Sandi Baru</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
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