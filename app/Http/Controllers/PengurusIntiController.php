<?php

namespace App\Http\Controllers;

use App\Models\PengurusIntis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengurusIntiController extends Controller
{
    public function index(Request $r){

        $data['tb_pengurusinti'] = DB::table('tb_pengurusinti')
        ->join('tb_posisi','tb_pengurusinti.id_posisi','=','tb_posisi.id_posisi')
        ->orderBy('id_pengurusinti', 'asc')
        ->get();

        $data['tb_posisi'] = PengurusIntis::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('pengurusinti.index', $data);
    }

    public function input(Request $r) : RedirectResponse {

        $filename = null;

        if($r ->gambar_pengurusinti){
            $filename = $r->gambar_pengurusinti->getClientOriginalName();
            $r ->file('gambar_pengurusinti')->move('assets/images',
            $r ->gambar_pengurusinti->getClientOriginalName());

        }
        $pengurusinti = DB::table('tb_pengurusinti')->insert([
            'id_posisi'=> $r->id_posisi,
            'nama_pengurusinti'=> $r->nama_pengurusinti,
            // 'slug'=> Str::slug($r->judul_berita),
            'gambar_pengurusinti'=> $filename,
        ]);

        return redirect()->route('data.pengurusinti');
    }

    public function tambah(){
        $data['tb_posisi'] = DB::table('tb_posisi')->get();
        return view('pengurusinti.tambah', $data);
    }


    public function ubah($id){
        $data['tb_pengurusinti'] = DB::table('tb_pengurusinti')
        ->where('id_pengurusinti', $id)
        ->first();
        $data['tb_posisi'] = DB::table('tb_posisi')->get();

        return view ('pengurusinti.ubah', $data);
    }


    public function edit(Request $r, $id){
        $filename = null;

        if($r->file('gambar_pengurusinti') ==""){
            DB::table('tb_pengurusinti')->where('id_pengurusinti', $id)->update([
                'id_posisi'=> $r->id_posisi,
                'nama_pengurusinti'=> $r->nama_pengurusinti,
                // 'slug'=> Str::slug($r->judul_berita),
            ]);
            return redirect()->route('data.pengurusinti');

            }else{
                $filename = null;
                    $fotolama = DB::table('tb_pengurusinti')->where('id_pengurusinti', $id)->first();
                    if($fotolama->gambar_pengurusinti != ''){
                        unlink('assets/images/'. $fotolama->gambar_pengurusinti);
                    };
                    $file = $r->file('gambar_pengurusinti');
                    $filename = $file->getClientOriginalName();
                    $file->move('assets/images/', $filename);

                $pengurusinti = DB::table('tb_pengurusinti')->where('id_pengurusinti', $id)->update([
                    'id_posisi'=> $r->id_posisi,
                    'nama_pengurusinti'=> $r->nama_pengurusinti,
                    // 'slug'=> Str::slug($r->judul_berita),
                    'gambar_pengurusinti'=> $filename
                ]);

                if($pengurusinti){
                    return redirect()->route('data.pengurusinti')->with('success', 'Data Berhasil Diubah');
                }else{
                    return redirect()->route('data.pengurusinti')->with('error', 'Data Tidak Berhasil Diubah');
                }
            }
    }

    public function hapus($id){
        DB::table('tb_pengurusinti')->where('id_pengurusinti', $id)->delete();

        return redirect()->route('data.pengurusinti');
    }

}
