@extends('layout')
@section('title')
BPC HIPMI PADANG | Ubah Berita
@endsection


@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Berita</h4>
                    <form action="{{ route('edit.berita', $tb_berita->id_berita) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <select class="form-control" name="id_kategori" id="id_kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($tb_kategori as $data)
                                    <option value="{{ $data->id_kategori }}" {{ $data->id_kategori == $tb_berita->id_kategori ? 'selected' : '' }}>
                                    {{ $data->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Judul Berita</label>
                            <input type="text" class="form-control " name="judul_berita" value="{{ $tb_berita->judul_berita }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Lead Berita</label>
                            <input type="text" class="form-control " name="lead_berita" value="{{ $tb_berita->lead_berita }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">isi Berita </label>
                            <textarea name="isi_berita" id="editor" cols="30" rows="10">{{ $tb_berita->isi_berita }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Berita</label>
                            <input type="date" class="form-control " name="tanggal_berita" value="{{ $tb_berita->tanggal_berita }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Gambar</label>
                            <img src="{{ asset('assets/images/'.$tb_berita->gambar_berita) }}" width="500" alt="">
                            <input type="hidden" name="foto_lama" value="{{ $tb_berita->gambar_berita }}">
                            <input type="file" name="gambar_berita" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
