<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(){

        $data['tb_kategori'] = Kategoris::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('kategori.index', $data);
    }

    public function input(Request $r){

        // $validator = Validator::make($r->all(),[
        //     'nama_kategori' =>'required'
        // ],[
        //     'nama_kategori.required'=>"Isi Nama Kategori!!!",
        // ]);

        // if($validator->fails()){
        //     return redirect()->route('tambah.kategori')
        //     ->withErrors($validator)
        //     ->withInput();
        // }

        $kategori = DB::table('tb_kategori')->insert([
            'nama_kategori'=> $r->nama_kategori
        ]);

        if($kategori){
            return redirect()-> route('data.kategori');
        }else{
            return redirect()-> route('tambah.kategori');
        }
    }

    public function tambah(){
        return view('kategori.tambah');
    }

    public function ubah($id){
        $data['tb_kategori'] = DB::table('tb_kategori')
        ->where('id_kategori', $id)
        ->first();

        return view ('kategori.ubah', $data);
    }


    public function edit(Request $r, $id){

        if($r != ''){
            $kategori = DB::table('tb_kategori')
            ->where('id_kategori',$id)
            ->update([
                'nama_kategori' => $r->nama_kategori
            ]);
            return redirect()->route('data.kategori');
        }
    }

    public function hapus($id){
        DB::table('tb_kategori')->where('id_kategori', $id)->delete();

        return redirect()->route('data.kategori');
    }
}
