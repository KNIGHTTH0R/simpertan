@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Daftar Barang Alsintan Untuk Peminjaman</h4>
            </div>
            <div class="col-md-6">
              <a href="{{ route('admin_alsintanpinjam.create') }}" type="button" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Alsintan</a>
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
                    Merk
                  </th>
                  <th>
                    Jumlah
                  </th>
                  <th>
                    Tahun
                  </th>
                  <th>
                    Kegiatan/Sumber
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
                    Traktor TR2 8,5 PK
                  </td>
                  <td>
                    Yanmar YST Pro XL
                  </td>
                  <td>
                    20
                  </td>
                  <td>
                    2018
                  </td>
                  <td>
                    APBN
                  </td>
                  <td>
                    <a href="{{ route('admin_alsintanpinjam.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="fa fa-trash fa-lg"></i></button>
                  </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Alsintan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p align="center">Yakin ingin menghapus Alsintan?</p>
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

@push('name')
  {{-- <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })
  </script> --}}
@endpush