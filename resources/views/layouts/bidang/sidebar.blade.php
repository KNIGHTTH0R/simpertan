<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengajuan.index') }}">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Pengajuan Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('peminjaman.index') }}">
              <i class="menu-icon mdi mdi-briefcase"></i>
              <span class="menu-title">Pengajuan Peminjaman</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('cetak') }}">
              <i class="menu-icon mdi mdi-printer"></i>
              <span class="menu-title">Cetak Daftar Pengajuan</span>
            </a>
          </li> --}}
        </ul>
      </nav>
