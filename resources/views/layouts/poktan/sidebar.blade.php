<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengajuan_kegiatan') }}">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Form Pengajuan Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengajuan_peminjaman') }}">
              <i class="menu-icon mdi mdi-briefcase"></i>
              <span class="menu-title">Form Pengajuan Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cetak_pengajuan') }}">
              <i class="menu-icon mdi mdi-printer"></i>
              <span class="menu-title">Cetak Form Pengajuan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cetak_peminjaman') }}">
              <i class="menu-icon mdi mdi-fax"></i>
              <span class="menu-title">Cetak Form Peminjaman</span>
            </a>
          </li>
        </ul>
      </nav>
