@extends('layouts.poktan.master_poktan')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Daftar Pengajuan Alsintan</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Merk
                      </th>
                      <th>
                        Jumlah
                      </th>
                      <th>
                        Satuan
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Tanggal Pengajuan
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        1
                      </td>
                      <td>
                        Alsintan
                      </td>
                      <td>
                        Traktor
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Unit
                      </td>
                      <td>
                        Accepted
                      </td>
                      <td>
                        12 September 2018
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        2
                      </td>
                      <td>
                        Irigasi
                      </td>
                      <td>
                        Lahan
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Ha
                      </td>
                      <td>
                        Accepted
                      </td>
                      <td>
                        12 September 2018
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success mr-2">Cetak</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection