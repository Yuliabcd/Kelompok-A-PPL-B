<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_TambahDataLahan extends Controller
{
    public function setPageTambahDataLahan(){
        return view('pages.V_TambahDataLahan');
    }
    public function simpan(Request $request){
//dd($request->all());
        $request->validate([
            'judul' => 'required',
            'lokasi_lahan' => 'required',
            'ukuran_lahan' => 'required',
            'ukuran_lahan_garap' => 'numeric|required|min:0|max:'.$request->ukuran_lahan,
//            'periode_tanam' => 'required',
            'jenis_bibit' => 'required',
            'obat' => 'required',
            'pupuk' => 'required',
//            'hasil_tanam' => 'required',
        ]);

        M_LahanData::create($request->all());

        return redirect('/data-lahan')->with('status', 'Data Lahan Berhasil Ditambahkan!'); //menambahkan pesan data dengan notif sukses
    }

}
