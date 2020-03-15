<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
	
	public function index()
	{
		$this->data['name'] = "Mamun Sarkar";
		$this->data['roll'] = 56454;
		$this->data['subjects'] = ['Bangla', 'English', 'Math'];


		return view( 'home.index', $this->data );
	}	

}