@extends('layout')
@section('title')
BPC HIPMI PADANG | Ubah Data Posisi
@endsection


@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Posisi</h4>
                <form action="{{ route('edit.posisi', $tb_posisi->id_posisi) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Divisi</label>
                        <select class="form-control" name="id_divisi" id="id_divisi" required>
                            <option value="">Pilih Divisi</option>
                            @foreach ($tb_divisi as $data)
                                <option value="{{ $data->id_divisi }}" {{ $data->id_divisi == $tb_posisi->id_divisi ? 'selected' : '' }}>
                                {{ $data->nama_divisi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Posisi / Jabatan</label>
                        <input type="text" class="form-control" name="nama_posisi" placeholder="Nama kategori" value="{{ $tb_posisi->nama_posisi }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light" >Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



