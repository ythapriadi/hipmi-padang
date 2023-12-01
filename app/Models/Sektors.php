<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sektors extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table ='tb_sektor';
    protected $fileable =[
        'nama_sektor',
        'gambar_sektor',
    ];
}
