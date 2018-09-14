@extends('layouts.petugas.master_petugas')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <!-- kadis & bidang -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="btn-toolbar pull-right">
            <div class="btn-group">
              <a href="{{route('petugas_tanam.create')}}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>Tambah Laporan</a>
            </div>
          </div>
          <h4 class="card-title">Daftar Laporan Tanam</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Kecamatan
                  </th>
                  <th>
                    Desa
                  </th>
                  <th>
                    Komoditas
                  </th>
                  <th>
                    Luas Lahan
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">
                    Palabuhanratu
                  </td>
                  <td>
                    Cibodas
                  </td>
                  <td>
                    Padi
                  </td>
                  <td>
                    10 Ha
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
