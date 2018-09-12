@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-md-12 {{-- col-md-offset-2 --}} grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Formulir Pengajuan Peminjaman</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Traktor</option>
                        <option>Cangkul</option>
                        <option>Semprotan</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    {{-- <label class="col-sm-3 col-form-label">Last Name</label> --}}
                    <div class="col-sm-9">
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option disabled="">-- satuan --</option>
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
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Mulai Pinjam</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Selesai Pinjam</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Submit</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection