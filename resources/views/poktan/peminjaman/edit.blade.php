@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-md-12 {{-- col-md-offset-2 --}} grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Perbarui Peminjaman Alsintan</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Alsintan</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Traktor 8,5</option>
                        <option>Pompa Air 3 ichi</option>
                        <option>Handsprayer Manual</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Merk Barang</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Yanmar YST Pro XL</option>
                        <option>Yanmar YM SX</option>
                        <option>MBI P 80 / Yanmar 6,5 HP</option>
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
                      <input type="number" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    {{-- <label class="col-sm-3 col-form-label">Last Name</label> --}}
                    <div class="col-sm-9">
                      <div class="col-sm-9">
                        <select class="form-control" disabled="">
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
                  <button type="submit" class="btn btn-success mr-2">Simpan</button>
                  <a href="{{ route('poktan_dashboard.index') }}" class="btn btn-secondary mr-2">Batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection