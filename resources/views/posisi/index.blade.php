@extends('layout')
@section('title')
BPC HIPMI PADANG | Daftar Posisi Organisasi
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Posisi Organisasi</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.posisi') }}" class="btn btn-primary">Tambah Posisi</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Divisi</th>
                                <th>Posisi / Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_posisi as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_divisi }}</td>
                                <td>{{ $data->nama_posisi }}</td>
                                <td>
                                    <a href="{{ route('ubah.posisi',$data->id_posisi) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.posisi', $data->id_posisi) }}" class="btn btn-danger">Hapus</a>
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

@endsection


