<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_lahan
 * @property int $id_statuspermintaan
 * @property string $kebutuhan
 * @property int $jumlah
 * @property string $keterangan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property StatusPermintaan $statusPermintaan
 * @property Lahan $lahan
 * @property Keuangan[] $keuangans
 */
class M_Permintaan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permintaan';

    /**
     * @var array
     */
    protected $fillable = ['id_lahan', 'id_statuspermintaan', 'kebutuhan', 'jumlah', 'keterangan', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusPermintaan()
    {
        return $this->belongsTo('App\Models\M_StatusPermintaan', 'id_statuspermintaan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lahan()
    {
        return $this->belongsTo('App\Models\Lahan', 'id_lahan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function keuangan()
    {
        return $this->hasOne('App\Models\M_Keuangan', 'id_permintaan');
    }
}
