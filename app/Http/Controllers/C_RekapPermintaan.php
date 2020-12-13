<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use App\Models\M_Permintaan;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class C_RekapPermintaan extends Controller
{
    public function getPermintaan($id){
        return M_LahanData::find($id);
    }
    public function setPageRekapPermintan($id){
        $lahan=$this->getPermintaan($id);
        return view('pages.V_RekapPermintaan',compact('lahan'));
    }
    public function getFormDataPermintaan($id){
        return redirect(route('setFormDataPermintaan',$id));
    }

    public function simpanStatusPermintaan($id,$permintaan,$status){
        M_Permintaan::find($permintaan)->update(['id_statuspermintaan'=>$status]);
        return redirect(route('setPageRekapPermintan',$id));
    }

    public function getFormUbahDataPermintaan($id,$permintaan){
        return redirect(route('setFormUbahDataPermintaan',compact('id','permintaan')));
    }
}
