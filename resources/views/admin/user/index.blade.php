@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <!-- kadis & bidang -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Daftar User Kadis & Bidang</h4>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary btn-rounded btn-fw pull-right" data-toggle="modal" data-target="#modalTambahKadisBidang"><i class="fa fa-plus"></i>Tambah Kadis/Bidang</button>
            </div>

            <!-- Start Modal Tambah Kadis & Bidang -->
            <div class="modal fade" id="modalTambahKadisBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kadis / Bidang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p align="center">Yakin ingin menghapus user?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal Tambah Kadis & Bidang -->

          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Username
                  </th>
                  <th>
                    role
                  </th>
                  <th>
                    Date Created
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">
                    kadisganteng
                  </td>
                  <td>
                    kadis
                  </td>
                  <td>
                    19 Agustus 2018
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusKadisBidang"><i class="fa fa-trash fa-lg"></i></button>
                  </td>
                </tr>
                
                <!-- Start Modal Hapus Kadis & Bidang -->
                <div class="modal fade" id="modalHapusKadisBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kadis / Bidang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p align="center">Yakin ingin menghapus user?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal Hapus Kadis & Bidang -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- poktan -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Daftar User Poktan</h4>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary btn-rounded btn-fw pull-right" data-togle="modal" data-target="#modalPoktan"><i class="fa fa-plus"></i>Tambah Poktan</button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Username
                  </th>
                  <th>
                    Nama Poktan
                  </th>
                  <th>
                    Ketua Poktan
                  </th>
                  <th>
                    Alamat
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">
                    Poktanganteng
                  </td>
                  <td>
                    Agriaswara
                  </td>
                  <td>
                    LebahGanteng
                  </td>
                  <td>
                    Web, Ganool
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit fa-lg"></i></a>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusPoktan"><i class="fa fa-trash fa-lg"></i></button>
                  </td>
                </tr>

                <!-- Start Modal Poktan -->
                <div class="modal fade" id="modalHapusPoktan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Poktan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p align="center">Yakin ingin menghapus Poktan?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal Hapus Kadis & Bidang -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
