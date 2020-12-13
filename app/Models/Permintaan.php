<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permintaan extends Model
{
    protected $table = 'permintaan';  //buat ngakses ke tabel lahan

    protected $primaryKey = 'id_permintaan'; //primary key

    use SoftDeletes;

    use HasFactory;

    //sebuah file yang hanya bisa diisi ke database melalui controller create
    protected $fillable = [
        'kebutuhan',
        'jumlah',
        'keterangan',
        'id_lahan',
    ];
}
