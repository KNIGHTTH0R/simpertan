@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Striped Table</h4>
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
                @foreach ($peminjaman as $pinjam)
                  <tr>
                    <td>
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $pinjam->alsintan_pinjam->nama }}
                    </td>
                    <td>
                      {{ $pinjam->alsintan_pinjam->merk }}
                    </td>
                    <td>
                      {{ $pinjam->jumlah }}
                    </td>
                    <td>
                      {{ $pinjam->poktan->kecamatan->nama }}
                    </td>
                    <td>
                      {{ $pinjam->poktan->desa->nama }}
                    </td>
                    <td>
                      {{ $pinjam->poktan->nama }}
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
