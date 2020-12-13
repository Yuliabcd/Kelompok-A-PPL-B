<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\M_Aktivitas;
use App\Models\M_Komentar;
use App\Models\M_LahanData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_DetailAktivitas extends Controller
{
    public function getDataTanggapan($detail){
        return M_Aktivitas::findOrFail($detail);
    }
    public function setPageDetailAktivitas($id,$detail){
        $aktivitas=$this->getDataTanggapan($detail);
        $lahan=M_LahanData::findOrFail($id);
        return view('pages.V_DetailAktivitas',compact('aktivitas','lahan','id','detail'));
    }
    public function simpan(Request $request,$id,$detail){
        $request->validate([
            'komentar' => 'required',
        ]);

        $data=$request->all();
        $data['id_user']=Auth::id();
        $data['id_aktivitas']=$detail;
        M_Komentar::create($data);

        return redirect(route('setPageDetailAktivitas',[$id,$detail]));
    }
}
