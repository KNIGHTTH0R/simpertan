@extends('layouts.bidang.master_bidang')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-primary mb-5">Pengajuan Usulan Alsintan</h2>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Usulan Alsintan</p>
              <p class="display-3 mb-4 font-weight-light">100</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2017</small> --}}
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Usulan Alsintan Yang Di-Acc</p>
              <p class="display-3 mb-5 font-weight-light">30</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2015</small> --}}
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Usulan Alsintan Yang Di-Tolak</p>
              <p class="display-3 mb-5 font-weight-light">20</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2015</small> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-primary mb-5">Pengajuan Peminjaman Alsintan</h2>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Peminjaman Alsintan</p>
              <p class="display-3 mb-4 font-weight-light">58</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2017</small> --}}
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Peminjaman Alsintan Yang Di-Acc</p>
              <p class="display-3 mb-5 font-weight-light">25</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2015</small> --}}
            </div>
          </div>
          <div class="wrapper d-flex justify-content-between">
            <div class="side-left">
              <p class="mb-2">Total Pengajuan Peminjaman Alsintan Yang Di-Tolak</p>
              <p class="display-3 mb-5 font-weight-light">10</p>
            </div>
            <div class="side-right">
              {{-- <small class="text-muted">2015</small> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-cube text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Total Revenue</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
          </p>
        </div>
      </div>
    </div> --}}
  </div>
</div>
@endsection
