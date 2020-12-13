<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_DataLahan extends Controller
{
    public function getDataLahan($id){
        return M_LahanData::findOrFail($id);
    }
    public function setPageDetailDataLahan($id){
        $lahan=$this->getDataLahan($id);
        return view('pages.V_DataLahan',compact('lahan'));
    }
}
