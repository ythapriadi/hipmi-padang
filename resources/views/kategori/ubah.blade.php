@extends('layout')
@section('title')
BPC HIPMI PADANG | Ubah Data Kategori
@endsection


@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Kategori</h4>
                <form action="{{ route('edit.kategori', $tb_kategori->id_kategori) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="{{ $tb_kategori->nama_kategori }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light" >Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



