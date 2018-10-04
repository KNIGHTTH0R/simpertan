@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">

      @if (session('status'))
        <div class="col-md-12">
          <div class="alert alert-warning">
              {{ session('status') }}
          </div>
        </div>
      @endif

      <form class="col-md-12" action="{{ route('admin_poktanuser.update', ['id' => $user->id]) }}" method="POST">
        {{ method_field('PUT')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Perbarui User Poktan</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-9">
                      <input type="text" name="userName" class="form-control" placeholder="misal : kadis" value="{{ $user->namaUser }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Poktan</label>
                    <div class="col-sm-9">
                      <input type="text" name="poktanName" class="form-control" placeholder="misal : AgriTani" value="{{ $user->namaPoktan }}">
                    </div>
                  </div>
                </div>
              </div>

              {{-- <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Ketua Poktan</label>
                    <div class="col-sm-9">
                      <input type="text" name="ketuaPoktanName" class="form-control" placeholder="misal : Fulan Alpoktani" value="{{ $user->ketuaPoktanName }}">
                    </div>
                  </div>
                </div>
              </div> --}}

              {{-- <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Komoditas Poktan</label>
                    <div class="col-sm-9">
                      <input type="text" name="komoditasPoktan" class="form-control" placeholder="misal : Cabai" value="{{ $user->komoditasPoktan }}">
                    </div>
                  </div>
                </div>
              </div> --}}

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
                    <label class="col-sm-2 col-form-label">Telpon</label>
                    <div class="col-sm-9">
                      <input type="number" name="telp" class="form-control" value="{{ $user->telp }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                      <select name="kecamatan" id="kecamatan" class="form-control">
                          @foreach ($kecamatan as $kec)
                            <option value="{{ $kec->id }}" @if($kec->nama == $user->kecamatan) selected @endif>{{ $kec->nama }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Desa</label>
                    <div class="col-sm-9">
                      <select name="desa" id="desa" class="form-control">
                          @foreach ($desa as $des)
                            <option value="{{ $des->id }}" @if($des->nama == $user->desa) selected @endif>{{ $des->nama }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-check">
                <label for="changePassword" class="form-check-label">
                  <input name="ganti_password" type="checkbox" class="form-check-input" id="changePassword" @if (Request::old('ganti_password')) checked @endif> Ganti Password
                <i class="input-helper"></i></label>
              </div>

              <div class="row" id="newPassword" @if(Request::old('ganti_password')) style="display: show" @else style="display: none" @endif>
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                      <input type="password" name="new_password" class="form-control" placeholder="*******" value="{{ Request::old('new_password') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="confPassword" @if(Request::old('ganti_password')) style="display: show" @else style="display: none" @endif>
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="confirm_password" class="form-control" placeholder="*******" value="{{ Request::old('confirm_password') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
                  <a href="{{ route('admin_poktanuser.index') }}" class="btn btn-secondary mr-2">Batal</a>
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
  $(document).ready(function() {
    $("#desa").children('option:gt(0)').hide();
    $("#kecamatan").change(function() {
      $("#desa").children('option').hide();
      $("#desa").children("option[value^=" + $(this).val() + "]").show()
    })
  })
</script>
@endpush

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