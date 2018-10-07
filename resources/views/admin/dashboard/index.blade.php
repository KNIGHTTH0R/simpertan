@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">

  <!-- usulan -->  
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Alsintan Usulan</h4>
          <div class="table-responsive">
            <table class="table table-striped">
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
                    Tahun
                  </th>
                  <th>
                    Sumber
                  </th>
                  <th>
                    Jumlah
                  </th>
                  <th>
                    Jumlah Terdistribusi
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stok_alsintan_usulan as $stok)
                  <tr>
                    <td class="py-1">
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $stok->nama }}
                    </td>
                    <td>
                      {{ $stok->merk }}
                    </td>
                    <td>
                      {{ $stok->tahun }}
                    </td>
                    <td>
                      {{ $stok->sumber }}
                    </td>
                    <td>
                      {{ $stok->jumlah }}
                    </td>
                    <td>
                      {{ $stok->jumlah_terdistribusi }}
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

  <!-- peminjaman -->
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Alsintan Peminjaman</h4>
          <div class="table-responsive">
            <table class="table table-striped">
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
                    Tahun
                  </th>
                  <th>
                    Sumber
                  </th>
                  <th>
                    Jumlah
                  </th>
                  <th>
                    Jumlah Terdistribusi
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stok_alsintan_pinjam as $stok)
                  <tr>
                    <td class="py-1">
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $stok->nama }}
                    </td>
                    <td>
                      {{ $stok->merk }}
                    </td>
                    <td>
                      {{ $stok->tahun }}
                    </td>
                    <td>
                      {{ $stok->sumber }}
                    </td>
                    <td>
                      {{ $stok->jumlah }}
                    </td>
                    <td>
                      {{ $stok->jumlah_terdistribusi }}
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
