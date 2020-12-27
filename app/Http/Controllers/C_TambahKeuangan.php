<?php

namespace App\Http\Controllers;

use App\Models\M_Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class C_TambahKeuangan extends Controller
{

    public function setFormDataKeuangan($id, $permintaan)
    {
        return view('pages.V_TambahKeuangan', compact('id', 'permintaan'));
    }

    public function simpan(Request $request, $id, $permintaan)
    {
        $request->validate([
            'harga'=>'numeric|required',
            'tanggal_beli'=>'date|required',
            'file'=>'mimes:jpeg,jpg,png,gif|required'
        ]);
        $data = $request->all();
        $data['bukti']=date('dmyHis').'.'.$request->file('file')->extension();
        Storage::putFileAs('public/keuangan',$request->file('file'),$data['bukti']);
        unset($data['file']);

        $data['id_permintaan'] = $permintaan;
//        dd($data);
        M_Keuangan::create($data);
        return redirect(route('setPageRekapKeuangan', [$id]));
    }

}
