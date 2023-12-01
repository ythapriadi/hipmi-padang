@extends('layout')
@section('title')
BPC HIPMI PADANG | Data Kategori
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kategori</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.kategori') }}" class="btn btn-primary">Tambah Kategori</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_kategori as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>
                                    <a href="{{ route('ubah.kategori',$data->id_kategori) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.kategori', $data->id_kategori) }}" class="btn btn-danger">Hapus</a>
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


