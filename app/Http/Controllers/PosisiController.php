<?php

namespace App\Http\Controllers;

use App\Models\Posisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosisiController extends Controller
{
    public function index(){

        $data['tb_posisi'] = DB::table('tb_posisi')
        ->join('tb_divisi','tb_posisi.id_divisi','=','tb_divisi.id_divisi')
        ->orderBy('id_posisi', 'asc')
        ->get();

        $data['tb_divisi'] = Posisis::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('posisi.index', $data);
    }

    public function input(Request $r){

        // $validator = Validator::make($r->all(),[
        //     'nama_posisi' =>'required'
        // ],[
        //     'nama_posisi.required'=>"Isi Nama posisi!!!",
        // ]);

        // if($validator->fails()){
        //     return redirect()->route('tambah.posisi')
        //     ->withErrors($validator)
        //     ->withInput();
        // }

        $posisi = DB::table('tb_posisi')->insert([
            'id_divisi'=> $r->id_divisi,
            'nama_posisi'=> $r->nama_posisi
        ]);

        if($posisi){
            return redirect()-> route('data.posisi');
        }else{
            return redirect()-> route('tambah.posisi');
        }
    }

    public function tambah(){
        $data['tb_divisi'] = DB::table('tb_divisi')->get();
        return view('posisi.tambah', $data);
    }

    public function ubah($id){
        $data['tb_posisi'] = DB::table('tb_posisi')
        ->where('id_posisi', $id)
        ->first();
        $data['tb_divisi'] = DB::table('tb_divisi')->get();

        return view ('posisi.ubah', $data);
    }


    public function edit(Request $r, $id){

        if($r != ''){
            $posisi = DB::table('tb_posisi')->where('id_posisi',$id)->update([
                'id_divisi' => $r->id_divisi,
                'nama_posisi' => $r->nama_posisi
            ]);
            return redirect()->route('data.posisi');
        }
    }

    public function hapus($id){
        DB::table('tb_posisi')->where('id_posisi', $id)->delete();

        return redirect()->route('data.posisi');
    }
}
