<?php

namespace App\Models;

use CodeIgniter\Model;

class LahanModel extends Model
{
    protected $table = 'lahan';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'lokasi_lahan', 'ukuran_lahan', 'ukuran_lahan_garap', 'periode_tanam', 'jenis_bibit', 'obat', 'pupuk', 'hasil_tanam'];

    public function getLahan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
