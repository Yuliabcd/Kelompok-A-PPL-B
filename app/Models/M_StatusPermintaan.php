<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $status_permintaan
 * @property Permintaan[] $permintaans
 */
class M_StatusPermintaan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'status_permintaan';

    /**
     * @var array
     */
    protected $fillable = ['status_permintaan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permintaans()
    {
        return $this->hasMany('App\Models\Permintaan', 'id_statuspermintaan');
    }
}
