<?php


namespace App\Http\Controllers;


use App\Models\M_Komentar;
use App\Models\M_Permintaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

class C_Notification extends Facade
{
    public static function setPermintaan(){
        return self::getPermintaan();
    }

    public static function setTanggapan(){
        return self::getTanggapan();
    }

    public static function getPermintaan()
    {
        if (Auth::user()->role == "pekerja") {
            return M_Permintaan::whereIdStatuspermintaan(1)->orWhere('id_statuspermintaan','=',2)->orderBy('updated_at','desc')->take(5)->get();
        }
        else {

            return M_Permintaan::whereIdStatuspermintaan(0)->orderBy('updated_at','desc')->take(5)->get();
        }
    }
    public static function getTanggapan(){
        return M_Komentar::where('id_user','!=',Auth::id())->take(3)->get();
    }
}
