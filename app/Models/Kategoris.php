<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{
    use HasFactory;
    protected $table ='tb_kategori';
    protected $fileable =[
        'nama_kategori',
    ];
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
