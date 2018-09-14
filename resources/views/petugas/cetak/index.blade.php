@extends('layouts.petugas.master_petugas')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Formulir Cetak Laporan</h4>
          <form class="form-control" action="{{-- {{ route('cetak.store') }} --}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="Kecamatan">Kecamatan :</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Pilih Kecamatan</option>
                <option>Ciracap</option>
                <option>Palabuhanratu</option>
                <option>Cikidang</option>
                <option>Sukabumi</option>
              </select>
            </div>
            <div class="form-group">
              <label for="komoditas">Komoditas :</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Pilih Komoditas</option>
                <option>Padi</option>
                <option>Sayuran</option>
                <option>Buah Buahan</option>
                <option>Test2</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
