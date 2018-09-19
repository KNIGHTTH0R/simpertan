@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Daftar Satuan Unit</h4>
            </div>
            <div class="col-md-6">
              <a href="{{ route('admin_satuan.create') }}" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Satuan</a>
            </div>
          </div>
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
                    <a href="{{ route('admin_satuan.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="fa fa-trash fa-lg"></i></button>
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

                <!-- Modal -->
                <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Satuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p align="center">Yakin ingin menghapus satuan?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
