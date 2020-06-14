<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
	
	public function index()
	{
		$this->data['name'] = 'Mamun Sarkar';
		$this->data['roll'] = 234;
		$this->data['subject'] = ['Math', 'Eng', 'Bangla'];

		return view( 'home.index', $this->data ); 
	}	

}