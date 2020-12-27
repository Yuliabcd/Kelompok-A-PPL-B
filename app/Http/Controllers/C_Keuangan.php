<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_Keuangan extends Controller
{
    public function getDataLahan(){
        return M_LahanData::get();
    }
    public function setPageKeuangan(){
        $lahan=$this->getDataLahan();
        return view('pages.V_Keuangan',compact('lahan'));
    }

    public function getPageRekapKeuangan($id){
        return redirect(route('setPageRekapKeuangan',$id));
    }
}
