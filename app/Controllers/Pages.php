<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Silooman'
		];
		// return view('login/index', $data); //masuk ke halaman login
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | Silooman'
		];
		return view('pages/about', $data);
	}

	//--------------------------------------------------------------------

}
