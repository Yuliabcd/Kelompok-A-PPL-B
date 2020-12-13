<?php

namespace App\Http\Controllers;

use App\Models\M_Aktivitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class C_TambahAktivitas extends Controller
{
    public function setFormDataAktivitas($id){
        return view('pages.V_TambahAktivitas',compact('id'));

    }
    public function simpan(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'informasi' => 'required',
            'file' => 'required',
        ]);
        $data=$request->all();
        $data['gambar']=date('dmyHis').'.'.$request->file('file')->extension();
        Storage::putFileAs('public/aktivitas',$request->file('file'),$data['gambar']);
        unset($data['file']);
        $data['lahan_id']=$id;
        $data=M_Aktivitas::create($data);
//        dd($data);
        return redirect(route('getPageListAktivitasLahan',$id));
    }
}
