<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisis extends Model
{
    use HasFactory;
    protected $table ='tb_divisi';
    protected $fileable =[
        'nama_divisi',
    ];
    
}
