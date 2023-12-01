@extends('layout')
@section('title')
BPC HIPMI PADANG | Data Berita
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Berita</h4>
                <p class="card-description">
                    <a href="{{ route('tambah.berita') }}" class="btn btn-primary">Tambah Berita</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Tanggal Berita</th>
                                <th>Judul Berita</th>
                                <th>Lead Berita</th>
                                <th>Isi Berita</th>
                                <th>Gambar Berita</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_berita as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->tanggal_berita }}</td>
                                <td>{{ $data->judul_berita }}</td>
                                <td>{{ $data->lead_berita }}</td>
                                <td>{!! $data->isi_berita !!}  </td>
                                <td>
                                    <img src="{{ asset('assets/images/'. $data->gambar_berita) }}" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('ubah.berita',$data->id_berita) }}" class="btn btn-success">Ubah</a>
                                    <a href=" {{ route('hapus.berita', $data->id_berita) }}" class="btn btn-danger">Hapus</a>
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


