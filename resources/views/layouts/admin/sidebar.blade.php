<!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_dashboard.index') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_pengajuan.index') }}">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title">Pengajuan Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_peminjaman.index') }}">
              <i class="menu-icon mdi mdi-briefcase"></i>
              <span class="menu-title">Pengajuan Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_laporantanam.index') }}">
              <i class="menu-icon mdi mdi-transcribe"></i>
              <span class="menu-title">Laporan Penanaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_cetak.index') }}">
              <i class="menu-icon mdi mdi-printer"></i>
              <span class="menu-title">Cetak SK</span>
            </a>
          </li>
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_user.index') }}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Management User</span>
            </a>
          </li> --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Management User</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin_staffuser.index') }}"> Kadis / Bidang </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin_poktanuser.index') }}"> Poktan </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin_alsintanusulan.index') }}"> Alsintan Usulan </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin_alsintanpinjam.index') }}"> Alsintan Pinjam </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin_satuan.index') }}"> Satuan </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
