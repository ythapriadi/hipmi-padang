@extends('layout')
@section('title')
BPC HIPMI PADANG | Data Pengurus Inti Organisasi
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengurus Inti Organisasi</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.pengurusinti') }}" class="btn btn-primary">Tambah Data</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Posisi / Jabatan</th>
                                <th>Nama Lengkap</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_pengurusinti as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_posisi }}</td>
                                <td>{{ $data->nama_pengurusinti }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/'. $data->gambar_pengurusinti) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('ubah.pengurusinti',$data->id_pengurusinti) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.pengurusinti', $data->id_pengurusinti) }}" class="btn btn-danger">Hapus</a>
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


