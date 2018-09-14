<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas_dashboard.index') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas_tanam.index') }}">
              <i class="menu-icon mdi mdi-transcribe"></i>
              <span class="menu-title">Laporan Penanaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas_cetak.index') }}">
              <i class="menu-icon mdi mdi-printer"></i>
              <span class="menu-title">Cetak Laporan</span>
            </a>
          </li>
        </ul>
      </nav>
