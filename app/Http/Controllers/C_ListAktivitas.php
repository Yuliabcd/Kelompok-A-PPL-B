<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_ListAktivitas extends Controller
{
    public function getDataListAktivitasLahan($id){
        return M_LahanData::find($id);
    }
    public function setPageListAktivitasLahan($id){
        $lahan=$this->getDataListAktivitasLahan($id);
        return view('pages.V_ListAktivitas',compact('lahan'));

    }
    public function getPageDetailAktivitas($id,$detail){
        return redirect(route('setPageDetailAktivitas',[$id,$detail]));
    }

    public function getFormDataAktivitas($id){
        return redirect(route('setFormDataAktivitas',$id));
    }

    public function getFormEditAktivitas($id){
        return redirect(route('setPageEditAktivitas',$id));
    }

}
