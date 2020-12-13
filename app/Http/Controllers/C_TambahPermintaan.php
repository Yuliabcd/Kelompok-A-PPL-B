<?php

namespace App\Http\Controllers;

use App\Models\M_Aktivitas;
use App\Models\M_Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class C_TambahPermintaan extends Controller
{
    public function setFormDataPermintaan($id){
        return view('pages.V_TambahPermintaan',compact('id'));
    }

    public function simpan(Request $request, $id){

        $request->validate([
            'kebutuhan' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);
        $data=$request->all();
        $data['id_lahan']=$id;
        $data=M_Permintaan::create($data);
        return redirect(route('getPageRekapPermintaan',$id));
    }

    public function setFormUbahDataPermintaan($id,$permintaanId){
        $permintaan=M_Permintaan::findOrFail($permintaanId);
//        dd($permintaan);
        return view('pages.V_EditPermintaan',compact('id','permintaan'));
    }

    public function update(Request $request, $id,$permintaanId){

        $request->validate([
            'kebutuhan' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required',
        ]);
        $data=M_Permintaan::find($permintaanId)->update($request->all());

        return redirect(route('getPageRekapPermintaan',$id));
    }

}
