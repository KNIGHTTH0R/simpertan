@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class='btn-toolbar pull-right'>
            <div class='btn-group'>
                <button type="button" class="btn btn-primary btn-rounded btn-fw" data-togle="modal" data-target="#modalKadisBidang"><i class="fa fa-plus"></i>Tambah Satuan</button>
            </div>
          </div>
          <h4 class="card-title">Daftar Satuan Unit</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">
                    1
                  </td>
                  <td>
                    Meter
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="py-1">
                    2
                  </td>
                  <td>
                    Unit
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
