<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\HipmiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusIntiController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\SektorController;
use App\Http\Controllers\StrukturController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route Hipmi Pages
route::get('/dashboard', [HomeController::class, 'index'])->name('index');
route::get('/struktur-organisasi', [HomeController::class, 'team']);
route::get('/blog', [HomeController::class, 'blog'])->name('blog');
route::get('/lihat-berita/{slug}', [HomeController::class, 'lihat'])->name('lihat');
route::get('/lihat-kategori/{nama_kategori}', [HomeController::class, 'dataByKategori'])->name('kategori');

// route::get('/blog-kategori/{tb_kategori}', [HomeController::class, 'artikel_kategori'])->name('blog.kategori');
// Ends route Hipmi Pages

// Route Login Admin
route::middleware(['belum_login'])->group(function (){
    route::get('login', [LoginController::class,'index'])->name('login');
    route::post('aksilogin', [LoginController::class,'aksi_login'])->name('aksi_login');
});

route::middleware(['sudah_login'])->group(function (){
route::get('/', [HomeController::class, 'home'])->name('home');
route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Data Kategori
route::get('data-kategori', [KategoriController::class, 'index'])->name('data.kategori');
route::get('tambah-kategori', [KategoriController::class, 'tambah'])->name('tambah.kategori');
route::post('input-kategori', [KategoriController::class, 'input'])->name('input.kategori');
route::get('ubah-kategori/{id}', [KategoriController::class, 'ubah'])->name('ubah.kategori');
route::post('edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit.kategori');
route::get('hapus-kategori/{id}', [KategoriController::class, 'hapus'])->name('hapus.kategori');

// Data Berita
route::get('data-berita', [BeritaController::class, 'index'])->name('data.berita');
route::get('tambah-berita', [BeritaController::class, 'tambah'])->name('tambah.berita');
route::post('input-berita', [BeritaController::class, 'input'])->name('input.berita');
route::get('ubah-berita/{id}', [BeritaController::class, 'ubah'])->name('ubah.berita');
route::post('edit-berita/{id}', [BeritaController::class, 'edit'])->name('edit.berita');
route::get('hapus-berita/{id}', [BeritaController::class, 'hapus'])->name('hapus.berita');

// Data Divisi
route::get('data-divisi', [DivisiController::class, 'index'])->name('data.divisi');
route::get('tambah-divisi', [DivisiController::class, 'tambah'])->name('tambah.divisi');
route::post('input-divisi', [DivisiController::class, 'input'])->name('input.divisi');
route::get('ubah-divisi/{id}', [DivisiController::class, 'ubah'])->name('ubah.divisi');
route::post('edit-divisi/{id}', [DivisiController::class, 'edit'])->name('edit.divisi');
route::get('hapus-divisi/{id}', [DivisiController::class, 'hapus'])->name('hapus.divisi');

// Data Posisi
route::get('data-posisi', [PosisiController::class, 'index'])->name('data.posisi');
route::get('tambah-posisi', [PosisiController::class, 'tambah'])->name('tambah.posisi');
route::post('input-posisi', [PosisiController::class, 'input'])->name('input.posisi');
route::get('ubah-posisi/{id}', [PosisiController::class, 'ubah'])->name('ubah.posisi');
route::post('edit-posisi/{id}', [PosisiController::class, 'edit'])->name('edit.posisi');
route::get('hapus-posisi/{id}', [PosisiController::class, 'hapus'])->name('hapus.posisi');

// Data Pengurus Inti
route::get('data-pengurusinti', [PengurusIntiController::class, 'index'])->name('data.pengurusinti');
route::get('tambah-pengurusinti', [PengurusIntiController::class, 'tambah'])->name('tambah.pengurusinti');
route::post('input-pengurusinti', [PengurusIntiController::class, 'input'])->name('input.pengurusinti');
route::get('ubah-pengurusinti/{id}', [PengurusIntiController::class, 'ubah'])->name('ubah.pengurusinti');
route::post('edit-pengurusinti/{id}', [PengurusIntiController::class, 'edit'])->name('edit.pengurusinti');
route::get('hapus-pengurusinti/{id}', [PengurusIntiController::class, 'hapus'])->name('hapus.pengurusinti');

// Data Struktur Organisasi
route::get('data-struktur', [StrukturController::class, 'index'])->name('data.struktur');
route::get('tambah-struktur', [StrukturController::class, 'tambah'])->name('tambah.struktur');
route::post('input-struktur', [StrukturController::class, 'input'])->name('input.struktur');
route::get('ubah-struktur/{id}', [StrukturController::class, 'ubah'])->name('ubah.struktur');
route::post('edit-struktur/{id}', [StrukturController::class, 'edit'])->name('edit.struktur');
route::get('hapus-struktur/{id}', [StrukturController::class, 'hapus'])->name('hapus.struktur');

// Data Sektor Usaha
route::get('data-sektor', [SektorController::class, 'index'])->name('data.sektor');
route::get('tambah-sektor', [SektorController::class, 'tambah'])->name('tambah.sektor');
route::post('input-sektor', [SektorController::class, 'input'])->name('input.sektor');
route::get('ubah-sektor/{id}', [SektorController::class, 'ubah'])->name('ubah.sektor');
route::post('edit-sektor/{id}', [SektorController::class, 'edit'])->name('edit.sektor');
route::get('hapus-sektor/{id}', [SektorController::class, 'hapus'])->name('hapus.sektor');


});


