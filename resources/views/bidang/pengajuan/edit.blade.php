@extends('layouts.bidang.master_bidang')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tindak Lanjut Pengajuan Alsintan</h4>

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
                    <label class="col-sm-2 col-form-label">Catatan Peminjaman</label>
                    <div class="col-sm-9">
                      <textarea name="catatan" class="form-control" placeholder="isikan catatan ..."></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success mr-2">Terima Pengajuan</button>
                  <button type="button" class="btn btn-danger mr-2">Tolak Pengajuan</button>
                  <a href="{{ route('bidang_pengajuan.index') }}" class="btn btn-secondary mr-2">Batal</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection