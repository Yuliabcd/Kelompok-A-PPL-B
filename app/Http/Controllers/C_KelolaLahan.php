<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use Illuminate\Http\Request;

class C_KelolaLahan extends Controller
{

    public function getPageKelolaLahan(){

    }



    public function CekDataNull(){

    }

    public function setPageKelolaLahan(){
        $lahan=Lahan::get();
        return view('pages.V_KelolaLahan',compact('lahan'));
    }


    public function setListDataLahan(){

    }

    public function getPageDetailDataLahan(){

    }
    public function getFormDataLahan(){
        return redirect(route('setPageTambahDataLahan'));
    }
    public function getFormEditDataLahan($id){
        return redirect(route('setPageEditDataLahan',$id));
    }

    public function getDataLahan($id){
        return redirect(route('setPageDetailDataLahan',$id));
    }
}
