@extends('layout')
@section('title')
BPC HIPMI PADANG | Data Struktur Organisasi
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Struktur Organisasi</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.struktur') }}" class="btn btn-primary">Tambah Data</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Divisi</th>
                                <th>Posisi / Jabatan</th>
                                <th>Sektor</th>
                                <th>Nama Lengkap</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_struktur as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->tb_divisi->nama_divisi }}</td>
                                <td>{{ $data->tb_posisi->nama_posisi }}</td>
                                <td>{{ $data->nama_sektor }}</td>
                                <td>{{ $data->nama_anggota }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/'. $data->gambar_anggota) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('ubah.struktur',$data->id_anggota) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.struktur', $data->id_anggota) }}" class="btn btn-danger">Hapus</a>
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


