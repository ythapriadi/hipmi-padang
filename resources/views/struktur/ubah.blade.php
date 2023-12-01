@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Struktur Organisasi
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Angota</h4>
                    <form action="{{ route('edit.struktur', $tb_struktur->id_anggota) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Posisi / Jabatan</label>
                            <select class="form-control" name="id_posisi" id="id_posisi" required>
                                <option value="">Pilih Posisi</option>
                                @foreach ($tb_posisi as $data)
                                    <option value="{{ $data->id_posisi }}" {{ $data->id_posisi == $tb_struktur->id_posisi ? 'selected' : '' }}>
                                    {{ $data->nama_posisi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Anggota</label>
                            <input type="text" class="form-control" name="nama_anggota" value="{{ $tb_struktur->nama_anggota }}" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <img src="{{ asset('assets/images/'.$tb_struktur->gambar_anggota) }}" width="500" alt="">
                            <input type="hidden" name="foto_lama" value="{{ $tb_struktur->gambar_anggota }}">
                            <input type="file" name="gambar_anggota" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
