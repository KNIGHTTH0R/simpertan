@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Formulir Cetak SK</h4>
          <form class="form-control" action="{{ route('cetak.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlSelect2">Jenis Kegiatan</label>
              <select class="form-control" id="exampleFormControlSelect2">
                <option>Pengajuan</option>
                <option>Peminjaman</option>
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
