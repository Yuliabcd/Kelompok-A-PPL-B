<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $lahan_id
 * @property string $judul
 * @property string $informasi
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Lahan $lahan
 * @property Komentar[] $komentars
 */
class M_Aktivitas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'aktivitas';
    protected $primaryKey='id';

    /**
     * @var array
     */
    protected $fillable = ['lahan_id', 'judul', 'informasi', 'gambar', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lahan()
    {
        return $this->belongsTo('App\Models\M_LahanData','lahan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function komentar()
    {
        return $this->hasMany('App\Models\M_Komentar', 'id_aktivitas');
    }
}
