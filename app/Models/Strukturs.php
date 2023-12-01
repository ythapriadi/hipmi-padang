<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strukturs extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tb_struktur';
    protected $fileable =[
        'id_posisi',
        'id_divisi',
        'id_sektor',
        'nama_anggota',
        'gambar_anggota',
    ];

    public function tb_posisi(){
        return $this->belongsTo(Posisis::class, 'id_posisi', 'id_posisi');
    }
    public function tb_sektor(){
        return $this->belongsTo(Sektors::class, 'id_sektor', 'id_sektor');
    }
    public function tb_divisi(){
        return $this->belongsTo(Divisis::class, 'id_divisi', 'id_divisi');
    }
}
