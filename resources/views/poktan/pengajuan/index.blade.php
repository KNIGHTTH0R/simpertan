@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Formulir Pengajuan Alsintan</h4>

              <form class="" action="index.html" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jenis Alsintan</label>
                      <div class="col-sm-9">
                        <select class="form-control" id="jenis_alsintan" name="jenis_alsintan">
                          <option disabled selected>-- Silahkan Pilih --</option>
                          @foreach($jenis as $alsintan)
                          <option value="{{ $alsintan->nama }}">
                              {{ $alsintan->nama }}
                          </option>
                          @endforeach
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
                          <option disabled selected>-- Silahkan Pilih --</option>
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
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success mr-2">Ajukan</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  @push('footer.javascript')
  <script type="text/javascript">
    var $jenis = $('#jenis_alsintan')

    $jenis.on('change', function(){
      var val = $(this).val();

    })
  </script>
  @endpush
@endsection
