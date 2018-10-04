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

      <form class="col-md-12" action="{{ route('admin_poktanuser.store') }}" method="POST">
        {{ method_field('POST')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah User Poktan</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-9">
                      <input type="text" name="userName" class="form-control" placeholder="misal : kadis" value="{{ Request::old('userName') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Poktan</label>
                    <div class="col-sm-9">
                      <input type="text" name="poktanName" class="form-control" placeholder="misal : AgriTani" value="{{ Request::old('poktanName') }}">
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
                      <input type="text" name="email" class="form-control" placeholder="misal : alamat@email.com" value="{{ Request::old('email') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telpon</label>
                    <div class="col-sm-9">
                      <input type="number" name="telp" class="form-control" placeholder="080012345678" value="{{ Request::old('telp') }}">
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
                            <option value="{{ $kec->id }}">{{ $kec->nama }}</option>
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
                            <option value="{{ $des->id }}">{{ $des->nama }}</option>
                          @endforeach
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
                      <input type="password" name="password" class="form-control" placeholder="*******" value="{{ Request::old('password') }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
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
                  <button type="submit" class="btn btn-success mr-2">Buat Poktan</button>
                  <a href="{{ route('admin_poktanuser.index') }}" class="btn btn-secondary mr-2">batal</a>
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