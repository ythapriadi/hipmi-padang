@extends('layout')
@section('title')
BPC HIPMI PADANG | Data Sektor Usaha
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Sektor Usaha</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.sektor') }}" class="btn btn-primary">Tambah Sektor</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sektor</th>
                                <th>Gambar Sektor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_sektor as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_sektor }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/'. $data->gambar_sektor) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('ubah.sektor',$data->id_sektor) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.sektor', $data->id_sektor) }}" class="btn btn-danger">Hapus</a>
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


