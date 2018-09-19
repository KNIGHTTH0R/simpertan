@extends('layouts.bidang.master_bidang')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <form class="col-md-12" action="">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Daftar Peminjaman Alsintan</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        No
                      </th>
                      <th>
                        Poktan
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
                        Tanggal Mulai Pinjam
                      </th>
                      <th>
                        Tanggal Selesai Pinjam
                      </th>
                      <th>
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        1
                      </td>
                      <td>
                        AgriFarm
                      </td>
                      <td>
                        Traktor
                      </td>
                      <td>
                        Yanmaru
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Unit
                      </td>
                      <td>
                        <label class="badge badge-success">Accepted</label>
                      </td>
                      <td>
                        12 September 2018
                      </td>
                      <td>
                        15 Desember 2018
                      </td>
                      <td>
                        <a href="{{ route('bidang_peminjaman.edit', ['id' => 'id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane fa-lg"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        2
                      </td>
                      <td>
                        Sukatani
                      </td>
                      <td>
                        Handsprayer
                      </td>
                      <td>
                        Samsul
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        Unit
                      </td>
                      <td>
                        <label class="badge badge-success">Accepted</label>
                      </td>
                      <td>
                        12 September 2018
                      </td>
                      <td>
                        15 Desember 2018
                      </td>
                      <td>
                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane fa-lg"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <br>
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