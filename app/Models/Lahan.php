<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lahan extends Model
{
    protected $table = 'lahan';  //buat ngakses ke tabel lahan

    protected $primaryKey = 'id'; //primary key

    use SoftDeletes;

    use HasFactory;

    //sebuah file yang hanya bisa diisi ke database melalui controller create
    protected $guarded=[];
//    protected $fillable = [
//        'judul',
//        'lokasi_lahan',
//        'ukuran_lahan',
//        'ukuran_lahan_garap',
//        'periode_tanam',
//        'jenis_bibit',
//        'obat',
//        'pupuk',
//        'hasil_tanam'
//    ];
    public function aktivitas(){
//        return $this->belongsTo('App\Models\Aktivitas','id');
    }

//    public function keuangan(){
//        return $this->belongsTo('App\Models\Keuangan','id_aktivitas');
//    }

}
