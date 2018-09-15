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
              <button type="button" class="btn btn-primary btn-rounded btn-fw pull-right" data-togle="modal" data-target="#modalKadisBidang"><i class="fa fa-plus"></i>Tambah Alsintan</button>
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
