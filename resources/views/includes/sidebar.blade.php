<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <div class="d-flex justify-content-between">
        <div class="logo">
          <a href="{{ route('dashboard') }}">
            <div class="app-logo d-flex align-items-center">
              <img src="{{ url('frontend/images/logo.png') }}" alt="Logo" srcset="">
              <div class="logo-text">
                <p class="top-text">SATAP</p>
                <p class="bot-text">Inventory</p>
              </div>
            </div>
          </a>
        </div>
        <div class="toggler">
          <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}" class='sidebar-link'>
            <i class="fad fa-th-large"></i>
            <span>Beranda</span>
          </a>
        </li>

        @if (auth()->user()->approved)
        
          <li class="sidebar-item {{ Request::is('bangunan') ? 'active' : '' }}">
            <a href="{{ route('bangunan.index') }}" class='sidebar-link'>
              <i class="fad fa-school"></i>
              <span>Bangunan</span>
            </a>
          </li>

          <li class="sidebar-item {{ Request::is('meubelair') ? 'active' : '' }}">
            <a href="{{ route('meubel.index') }}" class='sidebar-link'>
              <i class="fad fa-chair-office"></i>
              <span>Meubel</span>
            </a>
          </li>

          <li class="sidebar-item {{ Request::is('alat-elektronik') ? 'active' : '' }}">
            <a href="{{ route('elektronik.index') }}" class='sidebar-link'>
              <i class="fad fa-desktop-alt"></i>
              <span>Alat Elektronik</span>
            </a>
          </li>

          {{-- <li class="sidebar-item {{ Request::is('/buku') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
              <i class="fad fa-books"></i>
              <span>Buku</span>
            </a>
          </li> --}}

          <li class="sidebar-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
              <i class="fad fa-cabinet-filing"></i>
              <span>Alat Penunjang KBM</span>
            </a>
            <ul class="submenu ">
              <li class="submenu-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Buku</a>
              </li>
              <li class="submenu-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Alat laboratorium</a>
              </li>
              <li class="submenu-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Alat Matematika</a>
              </li>
              <li class="submenu-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Alat Olahraga</a>
              </li>
              <li class="submenu-item {{ Request::is('alat-penunjang-kbm') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Alat Kesenian</a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item {{ Request::is('/scan-barcode') ? 'active' : '' }}">
            <a href="{{ route('scan-barcode') }}" class='sidebar-link'>
              <i class="fad fa-barcode-scan"></i>
              <span>Scan Barcode</span>
            </a>
          </li>
          </li>

          @if (auth()->user()->role == 'Kepala Sekolah')
            <li class="sidebar-item {{ Request::is('pengguna') ? 'active' : '' }}">
              <a href="{{ route('pengguna.index') }}" class='sidebar-link'>
                <i class="fad fa-users-cog"></i>
                <span>Kelola Pengguna</span>
                @livewire('counter')
              </a>
            </li>
          @endif
          
        @endif

      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>