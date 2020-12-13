<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\M_LahanData;
use Illuminate\Http\Request;

class C_Aktivitas extends Controller
{
    public function getDataLahan()
    {
        return M_LahanData::get();
    }

    public function setPageDataAktivitas()
    {
        $lahan = $this->getDataLahan();
        return view('pages.V_Aktivitas', compact('lahan'));
    }

    public function getPageListAktivitasLahan($id)
    {
        return redirect(route('setPageListAktivitasLahan', $id));
    }

}
