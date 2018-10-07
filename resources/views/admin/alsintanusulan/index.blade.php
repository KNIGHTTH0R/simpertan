@extends('layouts.admin.master_admin')

@section('content')
<div class="content-wrapper">
  <div class="row">

    @if (session('status'))
      <div class="col-md-12">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      </div>
    @endif

    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Daftar Barang Alsintan Untuk Pengajuan</h4>
            </div>
            <div class="col-md-6">
              <a href="{{ route('admin_alsintanusulan.create') }}" type="button" class="btn btn-primary btn-rounded btn-fw pull-right"><i class="fa fa-plus"></i>Tambah Alsintan</a>
            </div>
          </div>
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
                    Tahun
                  </th>
                  <th>
                    Kegiatan/Sumber
                  </th>
                  <th>
                    Aksi
                  </th>
                </tr>
              </thead>
              <tbody>

                @foreach ($alsintan_usulan as $alsintan)
                  <tr>
                    <td class="py-1">
                      {{ $count++ }}
                    </td>
                    <td>
                      {{ $alsintan->nama }}
                    </td>
                    <td>
                      {{ $alsintan->merk }}
                    </td>
                    <td>
                      {{ $alsintan->jumlah }}
                    </td>
                    <td>
                      {{ $alsintan->tahun }}
                    </td>
                    <td>
                      {{ $alsintan->sumber }}
                    </td>
                    <td>
                      <a href="{{ route('admin_alsintanusulan.edit', ['id' => $alsintan->id]) }}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus{{ $alsintan->id }}" title="Hapus"><i class="fa fa-trash fa-lg"></i></button>
                    </td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="modalHapus{{ $alsintan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="{{ route('admin_alsintanusulan.destroy', ['id' => $alsintan->id]) }}" method="POST" accept-charset="utf-8">
                          {{ method_field('DELETE') }}
                          <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Alsintan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p align="center">Yakin ingin menghapus Alsintan {{ $alsintan->nama }}?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
