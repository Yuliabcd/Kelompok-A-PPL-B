<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Aktivitas extends Model
{
    protected $table = 'aktivitas';  //buat ngakses ke tabel lahan

    protected $primaryKey = 'id_aktivitas'; //primary key

    use SoftDeletes;

    use HasFactory;

    //sebuah file yang hanya bisa diisi ke database melalui controller create
    protected $fillable = [
        'judul',
        'informasi',
        'gambar',
        'id_lahan',
    ];
}
