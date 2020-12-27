<?php

namespace App\Http\Controllers;

use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_RekapKeuangan extends Controller
{

    public function getDataKeuangan($id){
        return M_LahanData::find($id);
    }

    public function setPageRekapKeuangan($id){
        $lahan = $this->getDataKeuangan($id);
        return view('pages.V_RekapKeuangan',compact('lahan'));
    }

    public function getFormDataKeuangan($id, $permintaan){
        return redirect(route('setFormDataKeuangan',[$id, $permintaan]));
    }

}
