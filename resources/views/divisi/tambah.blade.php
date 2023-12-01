@extends('layout')
@section('title')
BPC HIPMI PADANG | Tambah Data Divisi
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Divisi</h4>
                    <form action="{{ route('input.divisi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Divisi</label>
                            <input type="text" class="form-control" name="nama_divisi" placeholder="Nama divisi" required>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                        <button class="btn btn-light" >Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
