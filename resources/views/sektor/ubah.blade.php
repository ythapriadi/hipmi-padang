@extends('layout')
@section('title')
BPC HIPMI PADANG | Ubah Data Sektor Usaha
@endsection


@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Sektor</h4>
                <form action="{{ route('edit.sektor', $tb_sektor->id_sektor) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Sektor</label>
                        <input type="text" class="form-control" name="nama_sektor" placeholder="Nama sektor" value="{{ $tb_sektor->nama_sektor }}">
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <img src="{{ asset('assets/images/'.$tb_sektor->gambar_sektor) }}" width="500" alt="">
                        <input type="hidden" name="foto_lama" value="{{ $tb_sektor->gambar_sektor }}">
                        <input type="file" name="gambar_sektor" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light" >Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



