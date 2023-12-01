@extends('layout')
@section('title')
BPC HIPMI PADANG | Daftar Divisi
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Divisi</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.divisi') }}" class="btn btn-primary">Tambah Divisi</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Divisi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_divisi as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_divisi }}</td>
                                <td>
                                    <a href="{{ route('ubah.divisi',$data->id_divisi) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.divisi', $data->id_divisi) }}" class="btn btn-danger">Hapus</a>
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


