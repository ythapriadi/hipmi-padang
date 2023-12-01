@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Pengurus Inti
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Pengurus Inti</h4>
                    <form action="{{ route('input.pengurusinti') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                            <label for="">Nama Pengurus Inti</label>
                            <input type="text" class="form-control" name="nama_pengurusinti" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control " name="gambar_pengurusinti" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
