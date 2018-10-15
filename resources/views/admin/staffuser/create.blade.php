@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">

      @if (session('status'))
        <div class="col-md-12">
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        </div>
      @endif

      <form class="col-md-12" method="POST" action="{{ route('admin_staffuser.store') }}">
        {{ method_field('POST') }}
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah User Kadis / Bidang</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" placeholder="misal : kadis">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" name="email" class="form-control" placeholder="misal : kadis">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-9">
                      <select name="role" class="form-control">
                          <!-- value berdasarkan id dari database roles -->
                          <option value="4">Kadis</option>
                          <option value="2">Staf Bidang</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="password" class="form-control" placeholder="*******">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="confirm_password" class="form-control" placeholder="*******">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Buat User</button>
                  <a href="{{ route('admin_staffuser.index') }}" class="btn btn-secondary mr-2">batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
