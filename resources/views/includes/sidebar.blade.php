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

        <li class="sidebar-item active ">
          <a href="{{ route('dashboard') }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Beranda</span>
          </a>
        </li>

        <li class="sidebar-item  ">
          <a href="{{ route('scan-barcode') }}" class='sidebar-link'>
            <i class="bi bi-upc-scan"></i>
            <span>Scan Barcode</span>
          </a>
        </li>

      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>