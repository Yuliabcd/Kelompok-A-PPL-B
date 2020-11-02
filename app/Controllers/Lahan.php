<?php

namespace App\Controllers;

use App\Models\LahanModel;

class Lahan extends BaseController
{
    protected $lahanModel;
    public function __construct()
    {
        $this->lahanModel = new LahanModel();
    }

    public function index()
    {
        // $lahan = $this->lahanModel->findAll();

        $data = [
            'title' => 'Lahan | Silooman',
            'lahan' => $this->lahanModel->getLahan()
            // $lahan
        ];

        return view('lahan/index', $data);
    }

    public function detail($id)
    {
        // echo $id;
        // $lahan = 
        // where(['id' => $id])->first();
        // dd($lahan);
        $data = [
            'title' => 'Detail | Lahan',
            'lahan' => $this->lahanModel->getLahan($id)
        ];

        //jika lahan tidak ada di tabel
        if (empty($data['lahan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul lahan' . $id . 'tidak ditemukan');
        }

        return view('lahan/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form | Tambah Data Lahan'
        ];
        return view('lahan/create', $data);
    }

    public function save()
    {
        //validasi input

        // dd($this->request->getVar());
        //nambahkan data 
        $this->lahanModel->save([
            'judul' => $this->request->getVar('judul'),
            'lokasi_lahan' => $this->request->getVar('lokasi_lahan'),
            'ukuran_lahan' => $this->request->getVar('ukuran_lahan'),
            'ukuran_lahan_garap' => $this->request->getVar('ukuran_lahan_garap'),
            'periode_tanam' => $this->request->getVar('periode_tanam'),
            'jenis_bibit' => $this->request->getVar('jenis_bibit'),
            'obat' => $this->request->getVar('obat'),
            'pupuk' => $this->request->getVar('pupuk'),
            'hasil_tanam' => $this->request->getVar('hasil_tanam')
        ]);

        return redirect()->to('/lahan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form | Ubah Data Lahan',
            'lahan' => $this->lahanModel->getLahan($id)
        ];
        return view('lahan/edit', $data);
    }

    public function update($id)
    {
        $this->lahanModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'lokasi_lahan' => $this->request->getVar('lokasi_lahan'),
            'ukuran_lahan' => $this->request->getVar('ukuran_lahan'),
            'ukuran_lahan_garap' => $this->request->getVar('ukuran_lahan_garap'),
            'periode_tanam' => $this->request->getVar('periode_tanam'),
            'jenis_bibit' => $this->request->getVar('jenis_bibit'),
            'obat' => $this->request->getVar('obat'),
            'pupuk' => $this->request->getVar('pupuk'),
            'hasil_tanam' => $this->request->getVar('hasil_tanam')
        ]);

        // session()->setFlashdata('pesan', 'Data berhasil diubah');

        return redirect()->to('/lahan');
    }
}
