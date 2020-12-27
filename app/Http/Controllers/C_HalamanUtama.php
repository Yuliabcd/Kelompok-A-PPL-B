<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_HalamanUtama extends Controller
{

    public function getPageKelolaLahan(){
        return redirect(route('setPageKelolaLahan'));
    }

    public function getPageDataAktivitas(){
        return redirect(route('setPageDataAktivitas'));
    }

    public function getPagePermintaan(){
        return redirect(route('setPagePermintaan'));
    }

    public function getPageKeuangan(){
        return redirect(route('setPageKeuangan'));
    }



}
