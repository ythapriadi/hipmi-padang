<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $r){

        $data['tb_berita'] = DB::table('tb_berita')
        ->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->get();

        $data['tb_kategori'] = Beritas::get();
        // cek isi variabel
        // dd($data['kategori']);

        return view('berita.index', $data);
    }

    public function input(Request $r) : RedirectResponse {

        $filename = null;

        if($r ->gambar_berita){
            $filename = $r->gambar_berita->getClientOriginalName();
            $r ->file('gambar_berita')->move('assets/images',
            $r ->gambar_berita->getClientOriginalName());

        }
        $berita = DB::table('tb_berita')->insert([
            'id_kategori'=> $r->id_kategori,
            'judul_berita'=> $r->judul_berita,
            'lead_berita'=> $r->lead_berita,
            'slug'=> Str::slug($r->judul_berita),
            'tanggal_berita'=>  $r->tanggal_berita,
            'isi_berita'=> $r->isi_berita,
            'gambar_berita'=> $filename,
        ]);

        return redirect()->route('data.berita');
    }

    public function tambah(){
        $data['tb_kategori'] = DB::table('tb_kategori')->get();
        return view('berita.tambah', $data);
    }


    public function ubah($id){
        $data['tb_berita'] = DB::table('tb_berita')
        ->where('id_berita', $id)
        ->first();
        $data['tb_kategori'] = DB::table('tb_kategori')->get();
        return view ('berita.ubah', $data);
    }


    public function edit(Request $r, $id){
        $filename = null;

        if($r->file('gambar_berita') ==""){
            DB::table('tb_berita')->where('id_berita', $id)->update([
                'id_kategori'=> $r->id_kategori,
                'judul_berita'=> $r->judul_berita,
                'lead_berita'=> $r->lead_berita,
                'slug'=> Str::slug($r->judul_berita),
                'tanggal_berita'=> $r->tanggal_berita,
                'isi_berita'=> $r->isi_berita,
            ]);
            return redirect()->route('data.berita');

            }else{
                $filename = null;
                    $fotolama = DB::table('tb_berita')->where('id_berita', $id)->first();
                    if($fotolama->gambar_berita != ''){
                        unlink('assets/images/'. $fotolama->gambar_berita);
                    };
                    $file = $r->file('gambar_berita');
                    $filename = $file->getClientOriginalName();
                    $file->move('assets/images/', $filename);

                $berita = DB::table('tb_berita')->where('id_berita', $id)->update([
                    'id_kategori'=> $r->id_kategori,
                    'judul_berita'=> $r->judul_berita,
                    'lead_berita'=> $r->lead_berita,
                    'slug'=> Str::slug($r->judul_berita),
                    'tanggal_berita'=> $r->tanggal_berita,
                    'isi_berita'=> $r->isi_berita,
                    'gambar_berita'=> $filename
                ]);

                if($berita){
                    return redirect()->route('data.berita')->with('success', 'Data Berhasil Diubah');
                }else{
                    return redirect()->route('data.berita')->with('error', 'Data Tidak Berhasil Diubah');
                }
            }
    }

    public function hapus($id){
        DB::table('tb_berita')->where('id_berita', $id)->delete();

        return redirect()->route('data.berita');
    }



    // public function print(Request $r){
    //     if(isset($r->mulai)){
    //         $data['tb_berita'] = DB::table('tb_berita')
    //         ->join('kategori','berita.id_kategori','=','kategori.id_kategori')
    //         ->whereBetween('tanggal_berita', [$_GET['mulai'], $_GET['sampai']])
    //         ->orderBy('id_berita', 'desc')
    //         ->get();
    //     }else{
    //         return redirect()->route('data.berita')->with('error', "Harap Pilih Tanggal Terlebih dahulu");
    //     }
    //     return view('berita.print', $data);
    // }
}
