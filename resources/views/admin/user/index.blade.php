@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <!-- kadis & bidang -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class='btn-toolbar pull-right'>
            <div class='btn-group'>
                <button type="button" class="btn btn-primary btn-rounded btn-fw" data-togle="modal" data-target="#modalKadisBidang"><i class="fa fa-plus"></i>Tambah User Kadis/Bidang</button>
            </div>
          </div>
          <h4 class="card-title">Daftar User Kadis & Bidang</h4>
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
                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                  </td>
                </tr>
                {{-- <tr>
                  <td class="py-1">
                    <img src="../../images/faces-clipart/pic-2.png" alt="image" />
                  </td>
                  <td>
                    Messsy Adam
                  </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td>
                    $245.30
                  </td>
                  <td>
                    July 1, 2015
                  </td>
                </tr> --}}
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
          <div class='btn-toolbar pull-right'>
            <div class='btn-group'>
                <button type="button" class="btn btn-primary btn-rounded btn-fw" data-togle="modal" data-target="#modalPoktan"><i class="fa fa-plus"></i>Tambah User Poktan</button>
            </div>
          </div>
          <h4 class="card-title">Daftar User Poktan</h4>
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
                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash fa-lg"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal kadis & bidang -->
    <div class="modal fade" id="modalPoktan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
