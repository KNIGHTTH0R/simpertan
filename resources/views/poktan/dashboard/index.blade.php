@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <!-- pengajuan -->
    <div class="row"> 
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h4 class="card-title">Daftar Pengajuan Alsintan</h4>
              </div>
              <div class="col-md-6">
                <a href="{{ route('poktan_pengajuan.index') }}" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Pengajuan Alsintan</a>
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
                      <a href="{{ route('poktan_pengajuan.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusPengajuan"><i class="fa fa-trash fa-lg"></i></button>
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
                      <a href="{{ route('poktan_pengajuan.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                      <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                    </td>
                  </tr>

                  <!-- Modal hapus pengajuan -->
                  <div class="modal fade" id="modalHapusPengajuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Hapus Pengajuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p align="center">Yakin ingin menghapus pengajuan?</p>
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

    <!-- peminjaman -->
    <div class="row"> 
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title">Daftar Pengajuan Alsintan</h4>
                </div>
                <div class="col-md-6">
                  <a href="{{ route('poktan_peminjaman.index') }}" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Peminjaman Alsintan</a>
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
                        <a href="{{ route('poktan_peminjaman.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusPeminjaman"><i class="fa fa-trash fa-lg"></i></button>
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

                    <!-- Modal hapus peminjaman -->
                    <div class="modal fade" id="modalHapusPeminjaman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Peminjaman</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p align="center">Yakin ingin menghapus peminjaman?</p>
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