<?php

namespace App\Controllers;

use App\Models\LahanModel;

class Login extends BaseController
{
    public function index()
    {
        // $lahan = $this->lahanModel->findAll();

        return view('login/index');
    }
}
