<?php

namespace App\Http\Controllers;

use App\Models\Divisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisiController extends Controller
{
    public function index(){

        $data['tb_divisi'] = Divisis::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('divisi.index', $data);
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

        $divisi = DB::table('tb_divisi')->insert([
            'nama_divisi'=> $r->nama_divisi
        ]);

        if($divisi){
            return redirect()-> route('data.divisi');
        }else{
            return redirect()-> route('tambah.divisi');
        }
    }

    public function tambah(){
        return view('divisi.tambah');
    }

    public function ubah($id){
        $data['tb_divisi'] = DB::table('tb_divisi')
        ->where('id_divisi', $id)
        ->first();

        return view ('divisi.ubah', $data);
    }


    public function edit(Request $r, $id){

        if($r != ''){
            $divisi = DB::table('tb_divisi')
            ->where('id_divisi',$id)
            ->update([
                'nama_divisi' => $r->nama_divisi
            ]);
            return redirect()->route('data.divisi');
        }
    }

    public function hapus($id){
        DB::table('tb_divisi')->where('id_divisi', $id)->delete();

        return redirect()->route('data.divisi');
    }
}
