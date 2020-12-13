<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    //
    public function home()
    {
        # code...
        return view('index');
    }
}
