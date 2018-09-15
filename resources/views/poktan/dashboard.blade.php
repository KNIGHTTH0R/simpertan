@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <!-- pengajuan -->
    <div class="row"> 
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Pengajuan Alsintan</h4>
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
                      Satuan
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Tanggal Pengajuan
                    </th>
                    <th>
                      Opsi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      1
                    </td>
                    <td>
                      Alsintan
                    </td>
                    <td>
                      Traktor
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      Unit
                    </td>
                    <td>
                      <label class="badge badge-success">Accepted</label>
                    </td>
                    <td>
                      12 September 2018
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
                      Irigasi
                    </td>
                    <td>
                      Lahan
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      Ha
                    </td>
                    <td>
                      <label class="badge badge-danger">Rejected</label>
                    </td>
                    <td>
                      12 September 2018
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

    <!-- peminjaman -->
    <div class="row"> 
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Daftar Pengajuan Peminjaman</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        No
                      </th>
                      <th>
                        Nama Barang
                      </th>
                      <th>
                        Jumlah
                      </th>
                      <th>
                        Satuan
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Mulai Pinjam
                      </th>
                      <th>
                        Tanggal Selesai Pinjam
                      </th>
                      <th>
                        Opsi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        1
                      </td>
                      <td>
                        Traktor
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Unit
                      </td>
                      <td>
                        <label class="badge badge-danger">Rejected</label>
                      </td>
                      <td>
                        12 September 2018
                      </td>
                      <td>
                        31 Desember 2018
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
                        Penyemprot Tanaman
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Unit
                      </td>
                      <td>
                        <label class="badge badge-success">Accepted</label>
                      </td>
                      <td>
                        9 Oktober 2018
                      </td>
                      <td>
                        21 November 2018
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