@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Sektor Usaha
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Sektor</h4>
                    <form action="{{ route('input.sektor') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Sektor</label>
                            <input type="text" class="form-control" name="nama_sektor" placeholder="Nama Sektor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control " name="gambar_sektor" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
