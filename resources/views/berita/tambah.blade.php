@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Berita
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Berita</h4>
                    <form action="{{ route('input.berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                                <select class="form-control" name="id_kategori" id="id_kategori" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($tb_kategori as $data)
                                <option value="{{ $data->id_kategori }}">
                                {{ $data->nama_kategori }}
                                </option>
                                @endforeach
                                </select>
                                {{--@error('id_kategori')is-invalid @enderror | @error('id_kategori')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror --}}
                        </div>
                        <div class="form-group">
                            <label for="">Judul Berita</label>
                            <input type="text" class="form-control " name="judul_berita" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lead Berita</label>
                            <input type="text" class="form-control " name="lead_berita" required>
                        </div>
                        <div class="form-group">
                            <label for="">isi Berita </label>
                            <textarea name="isi_berita" id="editor" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Berita</label>
                            <input type="date" class="form-control " name="tanggal_berita" required >
                        </div>

                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control " name="gambar_berita" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
