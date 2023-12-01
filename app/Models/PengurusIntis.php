<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusIntis extends Model
{
    use HasFactory;
    protected $table ='tb_pengurusinti';
    protected $fileable =[
        'id_divisi',
        'id_posisi',
        'nama_pengurusinti',
        'gambar_berita',
    ];

    public function tb_divisi(){
        return $this->belongsTo(Divisis::class, 'id_divisi', 'id_divisi');
    }
    public function tb_posisi(){
        return $this->belongsTo(Posisis::class, 'id_posisi', 'id_posisi');
    }
}
