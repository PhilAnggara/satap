<header class='mb-3'>
  <nav class="navbar navbar-expand navbar-light ">
    <div class="container-fluid">
      <a href="#" class="burger-btn d-block">
        <i class="bi bi-justify fs-3"></i>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="dropdown ms-auto">
          <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user-menu d-flex">
              <div class="user-name text-end me-3">
                <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                @if (auth()->user()->approved)
                  <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->role }}</p>
                @else
                  <span class="badge bg-light-warning">Menunggu Persetujuan</span>
                @endif
              </div>
              <div class="user-img d-flex align-items-center">
                <div class="avatar avatar-md">
                  <img src="https://ui-avatars.com/api/?background=a0a0a0&color=fff&bold=true&name={{ auth()->user()->name }}">
                </div>
              </div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <li>
              <h6 class="dropdown-header">Halo, {{ auth()->user()->name }}!</h6>
            </li>
            <li>
              <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#gantiPassword">
                <i class="icon-mid bi bi-lock me-2"></i>
                Ganti Password
              </button>
            </li>
            {{-- <li>
              <a class="dropdown-item" href="{{ route('dashboard') }}">
                <i class="icon-mid bi bi-person me-2"></i>
                Profil Saya
              </a>
            </li> --}}
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit">
                  <i class="icon-mid bi bi-box-arrow-left me-2"></i>
                  Keluar
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>