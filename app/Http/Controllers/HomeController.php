<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Divisis;
use App\Models\Kategoris;
use App\Models\PengurusIntis;
use App\Models\Posisis;
use App\Models\Post;
use App\Models\Sektors;
use App\Models\Strukturs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $tb_berita = Beritas::count();
        // $tb_anggota = Beritas::count();
        $tb_sektor = Sektors::count();
        $tb_struktur = Strukturs::count();
        $tb_divisi = Divisis::count();
        return view('home', compact('tb_berita', 'tb_sektor', 'tb_struktur', 'tb_divisi'));
    }

    public function index()
    {
        // $data['tb_posisi'] = DB::table('tb_posisi')->get();
        // $data['tb_sektor'] = DB::table('tb_sektor')->get();

        // $data['tb_pengurusinti'] = DB::table('tb_pengurusinti')
        // ->join('tb_posisi','tb_pengurusinti.id_posisi','=','tb_posisi.id_posisi')
        // ->orderBy('id_pengurusinti', 'asc')
        // ->get();
        // // dd($data['tb_pengurusinti']);

        // return view('frontend.dashboard', $data);

        return view('frontend.dashboard', [
            'tb_struktur' => Strukturs::all(),
            'tb_posisi' => Posisis::all(),
            'tb_sektor' => Sektors::all(),
            'tb_divisi' => Divisis::all(),
            'tb_pengurusinti' => PengurusIntis::all(),
        ]);
    }

    public function blog(){

        $data['tb_kategori'] = DB::table('tb_kategori')->get();
        $data['tb_berita'] = DB::table('tb_berita')
        ->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')
        ->orderBy('id_berita', 'desc')
        ->get();
        // dd($data['berita']);
        $data['tb_berita'] = DB::table('tb_berita')->latest()->take(5)->get();

        return view('frontend.blog', $data);
    }

    public function lihat($slug){
        return view('frontend.blog-berita',[
            'tb_kategori'=>DB::table('tb_berita')->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')->get(),

            'tb_berita'=>DB::table('tb_berita')->where('slug', $slug)->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')->first(),
        ]);
    }

    public function dataByKategori($nama_kategori){
        return view('frontend.blog-category',[
            'tb_kategori'=>DB::table('tb_berita')->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')->get(),

            'tb_berita'=>DB::table('tb_berita')
            ->where('nama_kategori', $nama_kategori)->join('tb_kategori','tb_berita.id_kategori','=','tb_kategori.id_kategori')
        ->get(),
        ]);
    }

    public function newsByCategory()
    {
        $kategori = Kategoris::withCount('news')->get();

        return view('frontend.blog', compact('kategori'));
    }

}
