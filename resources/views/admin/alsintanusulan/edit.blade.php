@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="{{ route('admin_alsintanusulan.update', ['id' => $alsintan->id]) }}" method="POST">
        {{ method_field('PUT')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Perbarui Alsintan <small>pengajuan</small></h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Alsintan</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama" class="form-control" placeholder="misal : Traktor TR2 8,5 PK" value="{{ $alsintan->nama }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Merk Barang</label>
                    <div class="col-sm-9">
                      <input type="text" name="merk" class="form-control" placeholder="misal : Yanmar YST Pro XL" value="{{ $alsintan->merk }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                      <input type="number" name="jumlah" class="form-control" placeholder="misal : 35" value="{{ $alsintan->jumlah }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-sm-9">
                      <div class="col-sm-9">
                        <select class="form-control" disabled="">
                          <option>Unit</option>
                          <option>Kilogram</option>
                          <option>Meter Persegi</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-9">
                      <input type="text" name="tahun" class="form-control" placeholder="misal : 2018" value="{{ $alsintan->tahun }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sumber/Kegiatan</label>
                    <div class="col-sm-9">
                      <input type="text" name="sumber" class="form-control" placeholder="misal : APBN" value="{{ $alsintan->sumber }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
                  <a href="{{ route('admin_alsintanusulan.index') }}" class="btn btn-secondary mr-2">Batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection