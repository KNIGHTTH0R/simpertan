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
              <a href="{{ route('admin_staffuser.create') }}" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Kadis/Bidang</a>
            </div>

          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    No.
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Role
                  </th>
                  <th>
                    Email
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
                @foreach ($users as $user)
                  <tr>
                    <td class="py-1">
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $user->userName }}
                    </td>
                    <td>
                      {{ $user->roleName }}
                    </td>
                    <td>
                      {{ $user->email }}
                    </td>
                    <td>
                      {{ $user->created_at }}
                    </td>
                    <td>
                      <a href="{{ route('admin_staffuser.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapusKadisBidang" title="Hapus"><i class="fa fa-trash fa-lg"></i></button>
                    </td>
                  </tr>
                  
                  <!-- Start Modal Hapus Kadis & Bidang -->
                  <div class="modal fade" id="modalHapusKadisBidang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="" method="post" accept-charset="utf-8">
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
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Hapus Kadis & Bidang -->
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
