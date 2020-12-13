<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_EditDataLahan extends Controller
{
    public function setPageEditDataLahan($id){
        $lahan=M_LahanData::findOrFail($id);
        return view('pages.V_EditDataLahan',compact('lahan'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'lokasi_lahan' => 'required',
            'ukuran_lahan' => 'required',
            'ukuran_lahan_garap' => 'required',
            'periode_tanam' => 'required',
            'jenis_bibit' => 'required',
            'obat' => 'required',
            'pupuk' => 'required',
            'hasil_tanam' => 'required',
        ]);
        M_LahanData::find($id)->update($request->all());
        return redirect('/data-lahan')->with('status', 'Data Lahan Berhasil Diubah!'); //menambahkan pesan data dengan notif sukses
    }
}
