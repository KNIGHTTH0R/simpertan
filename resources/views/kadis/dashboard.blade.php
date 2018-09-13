@extends('layouts.kadis.master_kadis')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      
        <!-- card #1 -->
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-primary mb-5">Pengajuan Kegiatan</h2>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">Total Jumlah Pengajuan</p>
                  <p class="display-3 mb-4 font-weight-light">12</p>
                </div>
                <div class="side-right">
                  <small class="text-muted"></small>
                </div>
              </div>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">Total Pengajuan Di-Acc</p>
                  <p class="display-3 mb-5 font-weight-light">10</p>
                </div>
                <div class="side-right">
                  <small class="text-muted"></small>
                </div>
              </div>
              <div class="wrapper">
                <h4 class="label">Info Pengajuan Terakhir</h4>
                <br>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Pengadaan Traktor</p>
                  <p class="mb-2 text-success">Diterima</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Pengadaan Lahan</p>
                  <p class="mb-2 text-danger">Tidak Diterima</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Pengadaan Semprotan</p>
                  <p class="mb-2 text-primary">Sedang Diproses</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end card #1 -->
        <!-- card #2 -->
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-primary mb-5">Pengajuan Peminjaman</h2>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">Total Jumlah Peminjaman</p>
                  <p class="display-3 mb-4 font-weight-light">8</p>
                </div>
                <div class="side-right">
                  <small class="text-muted"></small>
                </div>
              </div>
              <div class="wrapper d-flex justify-content-between">
                <div class="side-left">
                  <p class="mb-2">Total Peminjaman Di-Acc</p>
                  <p class="display-3 mb-5 font-weight-light">5</p>
                </div>
                <div class="side-right">
                  <small class="text-muted"></small>
                </div>
              </div>
              <div class="wrapper">
                <h4 class="label">Tanggal selesai peminjaman</h4>
                <br>
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Traktor</p>
                  <p class="mb-2 text-primary">18 September 2018</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="wrapper mt-4">
                <div class="d-flex justify-content-between">
                  <p class="mb-2">Semprotan Padi</p>
                  <p class="mb-2 text-success">10 Oktober 2018</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end card #2 -->
      
    </div>
  </div>
@endsection