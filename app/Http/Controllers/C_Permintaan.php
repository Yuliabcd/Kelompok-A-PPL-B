<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use App\Models\M_Permintaan;
use Illuminate\Http\Request;

class C_Permintaan extends Controller
{

    public function getLahan(){
        return M_LahanData::get();
    }

    public function getPageRekapPermintaan($id){
        return redirect(route('setPageRekapPermintan',$id));
    }

    public function setPagePermintaan(){
        $lahan=$this->getLahan();
        return view('pages.V_Permintaan',compact('lahan'));
    }
}
