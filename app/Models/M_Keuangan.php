<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $id_permintaan
 * @property int $harga
 * @property string $tanggal_beli
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Permintaan $permintaan
 */
class M_Keuangan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'keuangan';

    /**
     * @var array
     */
    protected $fillable = ['id_permintaan', 'bukti', 'harga', 'tanggal_beli', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return BelongsTo
     */
    public function permintaan()
    {
        return $this->belongsTo('App\Models\Permintaan', 'id_permintaan');
    }

}
