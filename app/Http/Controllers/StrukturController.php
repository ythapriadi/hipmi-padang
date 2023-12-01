<?php

namespace App\Http\Controllers;

use App\Models\Divisis;
use App\Models\Posisis;
use App\Models\Sektors;
use App\Models\Strukturs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MemberImport;


class StrukturController extends Controller
{
    public function index(Request $r){
        // $tb_struktur = Strukturs::all();
        // $tb_posisi = Posisis::all();
        // $tb_sektor = Sektors::all();
        // $tb_divisi = Divisis::all();

        // return view('struktur.index', compact('tb_struktur', 'tb_posisi', 'tb_sektor', 'tb_divisi'));
        return view('struktur.index', [
            'tb_struktur' => Strukturs::all(),
            'tb_posisi' => Posisis::all(),
            'tb_sektor' => Sektors::all(),
            'tb_divisi' => Divisis::all(),
        ]);
    }

    public function input(Request $r) : RedirectResponse {

        $filename = null;

        if($r ->gambar_anggota){
            $filename = $r->gambar_anggota->getClientOriginalName();
            $r ->file('gambar_anggota')->move('assets/images',
            $r ->gambar_anggota->getClientOriginalName());

        }
        $tb_struktur = DB::table('tb_struktur')->insert([
            'id_divisi'=> $r->id_divisi,
            'id_posisi'=> $r->id_posisi,
            'id_sektor'=> $r->id_sektor,
            'nama_anggota'=> $r->nama_anggota,
            // 'slug'=> Str::slug($r->judul_berita),
            'gambar_anggota'=> $filename,
        ]);

        return redirect()->route('data.struktur');
    }

    public function tambah(){
        $data['tb_divisi'] = DB::table('tb_divisi')->get();
        $data['tb_posisi'] = DB::table('tb_posisi')->get();
        $data['tb_sektor'] = DB::table('tb_sektor')->get();
        return view('struktur.tambah', $data);
    }

//     public function import(Request $request)
// {
//     $request->validate([
//         'file' => 'required|mimes:xlsx,xls',
//     ]);

//     $file = $request->file('file');

//     Excel::import(new Strukturs(), $file);

//     return redirect()->route('struktur.index')->with('success', 'Members imported successfully!');
// }

    public function ubah($id){
        $data['tb_struktur'] = DB::table('tb_struktur')
        ->where('id_anggota', $id)
        ->first();
        $data['tb_divisi'] = DB::table('tb_divisi')->get();
        $data['tb_posisi'] = DB::table('tb_posisi')->get();
        $data['tb_sektor'] = DB::table('tb_sektor')->get();

        return view ('struktur.ubah', $data);
    }


    public function edit(Request $r, $id){
        $filename = null;

        if($r->file('gambar_anggota') ==""){
            DB::table('tb_struktur')->where('id_anggota', $id)->update([
                'id_divisi'=> $r->id_divisi,
                'id_posisi'=> $r->id_posisi,
                'id_sektor'=> $r->id_sektor,
                'nama_anggota'=> $r->nama_anggota,
            ]);
            return redirect()->route('data.struktur');

            }else{
                $filename = null;
                    $fotolama = DB::table('tb_struktur')->where('id_anggota', $id)->first();
                    if($fotolama->gambar_anggota != ''){
                        unlink('assets/images/'. $fotolama->gambar_anggota);
                    };
                    $file = $r->file('gambar_anggota');
                    $filename = $file->getClientOriginalName();
                    $file->move('assets/images/', $filename);

                $tb_struktur = DB::table('tb_struktur')->where('id_anggota', $id)->update([
                'id_divisi'=> $r->id_divisi,
                'id_posisi'=> $r->id_posisi,
                'id_sektor'=> $r->id_sektor,
                    'nama_anggota'=> $r->nama_anggota,
                    // 'slug'=> Str::slug($r->judul_berita),
                    'gambar_anggota'=> $filename
                ]);

                if($tb_struktur){
                    return redirect()->route('data.struktur')->with('success', 'Data Berhasil Diubah');
                }else{
                    return redirect()->route('data.struktur')->with('error', 'Data Tidak Berhasil Diubah');
                }
            }
    }

    public function hapus($id){
        DB::table('tb_struktur')->where('id_anggota', $id)->delete();

        return redirect()->route('data.struktur');
    }
}
