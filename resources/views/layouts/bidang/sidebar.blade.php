<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('bidang_pengajuan.index') }}">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Pengajuan Alsintan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('bidang_peminjaman.index') }}">
              <i class="menu-icon mdi mdi-briefcase"></i>
              <span class="menu-title">Peminjaman Alsintan</span>
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
