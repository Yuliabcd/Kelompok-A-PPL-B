<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $judul
 * @property string $lokasi_lahan
 * @property string $ukuran_lahan
 * @property string $ukuran_lahan_garap
 * @property string $periode_tanam
 * @property string $jenis_bibit
 * @property string $obat
 * @property string $pupuk
 * @property string $hasil_tanam
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Aktivita[] $aktivitas
 */
class M_LahanData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lahan';
//    protected $dates=['created_at','updated_at','mulai','selesai'];
    use SoftDeletes;

    use HasFactory;

    /**
     * @var array
     */
//    protected $fillable = ['judul', 'lokasi_lahan', 'ukuran_lahan', 'ukuran_lahan_garap', 'periode_tanam', 'jenis_bibit', 'obat', 'pupuk', 'hasil_tanam', 'created_at', 'updated_at', 'deleted_at'];f
protected $guarded=[];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aktivitas()
    {
        return $this->hasMany('App\Models\M_Aktivitas','lahan_id');
    }
    public function permintaan()
    {
        return $this->hasMany('App\Models\M_Permintaan','id_lahan');
    }

//    public function keuangan()
//    {
//        return $this->hasMany('App\Models\M_Permintaan','id_lahan');
//    }
}
