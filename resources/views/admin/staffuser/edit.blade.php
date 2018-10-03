@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="{{ route('admin_staffuser.update', ['id' => $user->id]) }}" method="POST">
        {{ method_field('PUT')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit User Kadis / Bidang</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" name="name" class="form-control" value="{{ $user->userName }}">
                    </div>
                  </div>
                </div>
              </div>

               <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" name="email" class="form-control" value="{{ $user->email }}">
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
                          @if ($user->roleName == "ROLE_KADIS")
                            <option>Kadis</option>
                          @else
                            <option>Staf Bidang</option>
                          @endif
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-check">
                <label for="changePassword" class="form-check-label">
                  <input type="checkbox" class="form-check-input" id="changePassword"> Ganti Password
                <i class="input-helper"></i></label>
              </div>

              <div class="row" id="oldPassword" style="display: none">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-9">
                      <input type="password" name="old_password" class="form-control" placeholder="*******">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="newPassword" style="display: none">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                      <input type="password" name="new_password" class="form-control" placeholder="*******">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="confPassword" style="display: none">
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
                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
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

@push('footer.javascript')
<script>
  $(function () {
        $("#changePassword").click(function () {
            if ($(this).is(":checked")) {
                $("#oldPassword").show();
                $("#newPassword").show();
                $("#confPassword").show();
            } else {
                $("#oldPassword").hide();
                $("#newPassword").hide();
                $("#confPassword").hide();
            }
        });
    });
</script>
@endpush