@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Struktur Organisasi
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Struktur Organisasi</h4>
                    <form action="{{ route('input.struktur') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Divisi</label>
                                <select class="form-control" name="id_divisi" id="id_divisi" required>
                                <option value="">Pilih posisi</option>
                                @foreach ($tb_divisi as $data)
                                <option value="{{ $data->id_divisi }}">
                                {{ $data->nama_divisi }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="">Posisi / Jabatan</label>
                                <select class="form-control" name="id_posisi" id="id_posisi" required>
                                <option value="">Pilih posisi</option>
                                @foreach ($tb_posisi as $data)
                                <option value="{{ $data->id_posisi }}">
                                {{ $data->nama_posisi }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sektor</label>
                                <select class="form-control" name="id_sektor" id="id_sektor" required>
                                <option value="">Pilih Sektor</option>
                                @foreach ($tb_sektor as $data)
                                <option value="{{ $data->id_sektor }}">
                                {{ $data->nama_sektor }}
                                </option>
                                @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anggota</label>
                            <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control " name="gambar_anggota" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
