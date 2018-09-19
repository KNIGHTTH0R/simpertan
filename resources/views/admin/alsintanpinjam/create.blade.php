@extends('layouts.admin.master_admin')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Alsintan <small>(peminjaman)</small></h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Alsintan</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama" class="form-control" placeholder="misal : Traktor TR2 8,5 PK">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Merk Barang</label>
                    <div class="col-sm-9">
                      <input type="text" name="merk" class="form-control" placeholder="misal : Yanmar YST Pro XL">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" placeholder="misal : 35">
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
                      <input type="text" name="tahun" class="form-control" placeholder="misal : 2018">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sumber/Kegiatan</label>
                    <div class="col-sm-9">
                      <input type="text" name="sumber" class="form-control" placeholder="misal : APBN">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Tambah Alsintan</button>
                  <a href="{{ route('admin_alsintanpinjam.index') }}" class="btn btn-secondary mr-2">Batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection