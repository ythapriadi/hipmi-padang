<?php

namespace App\Http\Controllers;

use App\Models\Sektors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SektorController extends Controller
{
    public function index(){
        $data['tb_sektor'] = Sektors::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('sektor.index', $data);
    }

    public function input(Request $r){

        $filename = null;

        if($r ->gambar_sektor){
            $filename = $r->gambar_sektor->getClientOriginalName();
            $r ->file('gambar_sektor')->move('assets/images',
            $r ->gambar_sektor->getClientOriginalName());

        }
        $tb_sektor = DB::table('tb_sektor')->insert([
            'nama_sektor'=> $r->nama_sektor,
            'gambar_sektor'=> $filename,
        ]);

        return redirect()->route('data.sektor');

        if($tb_sektor){
            return redirect()-> route('data.sektor');
        }else{
            return redirect()-> route('tambah.sektor');
        }
    }

    public function tambah(){
        return view('sektor.tambah');
    }

    public function ubah($id){
        $data['tb_sektor'] = DB::table('tb_sektor')
        ->where('id_sektor', $id)
        ->first();

        return view ('sektor.ubah', $data);
    }


    public function edit(Request $r, $id){

        $filename = null;

        if($r->file('gambar_sektor') ==""){
            DB::table('tb_sektor')->where('id_sektor', $id)->update([
                'nama_sektor'=> $r->nama_sektor,
            ]);
            return redirect()->route('data.sektor');
            }else{
                $filename = null;
                    $fotolama = DB::table('tb_sektor')->where('id_sektor', $id)->first();
                    if($fotolama->gambar_sektor != ''){
                        unlink('assets/images/'. $fotolama->gambar_sektor);
                    };
                    $file = $r->file('gambar_sektor');
                    $filename = $file->getClientOriginalName();
                    $file->move('assets/images/', $filename);

                $sektor = DB::table('tb_sektor')->where('id_sektor', $id)->update([
                    'nama_sektor'=> $r->nama_sektor,
                    'gambar_sektor'=> $filename
                ]);

                if($sektor){
                    return redirect()->route('data.sektor')->with('success', 'Data Berhasil Diubah');
                }else{
                    return redirect()->route('data.sektor')->with('error', 'Data Tidak Berhasil Diubah');
                }
            }
    }

    public function hapus($id){
        DB::table('tb_sektor')->where('id_sektor', $id)->delete();

        return redirect()->route('data.sektor');
    }
}
