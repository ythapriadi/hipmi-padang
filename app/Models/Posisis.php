<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisis extends Model
{
    use HasFactory;
    protected $table ='tb_posisi';
    protected $fileable =[
        'id_divisi',
        'nama_posisi',
    ];

    public function tb_divisi(){
        return $this->belongsTo(Divisis::class, 'id_divisi');
    }
}
