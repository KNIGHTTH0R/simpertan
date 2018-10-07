@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Alsintan Usulan</h4>
          <div class="table-responsive">
            <table class="table table-striped table-paginate">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Nama Barang
                  </th>
                  <th>
                    Merk
                  </th>
                  <th>
                    Jumlah Barang
                  </th>
                  <th>
                    Kecamatan
                  </th>
                  <th>
                    Desa
                  </th>
                  <th>
                    Poktan
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($usulan as $pengajuan)
                  <tr>
                    <td>
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $pengajuan->alsintan_usulan->nama }}
                    </td>
                    <td>
                      {{ $pengajuan->alsintan_usulan->merk }}
                    </td>
                    <td>
                      {{ $pengajuan->jumlah }}
                    </td>
                    <td>
                      {{ $pengajuan->poktan->kecamatan->nama }}
                    </td>
                    <td>
                      {{ $pengajuan->poktan->desa->nama }}
                    </td>
                    <td>
                      {{ $pengajuan->poktan->nama }}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
