<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestSessionController extends Controller
{
	
	public function index(Request $request)
	{
		var_dump($request->session()->all());	
		var_dump(Session::all());	
	}

    public function set( Request $request )
    {
    	$request->session()->put('name', 'Jone Doe');
    	$request->session()->put('email', 'jone@example.ocm');

    	Session::put('phone', '4298437928347598');

    	session(['address' => '2432/3, Dhaka']);
    }

    public function getData(Request $request)
    {
    	echo $request->session()->get('name', 'Default Name');
    	echo '<br/>';
    	echo $request->session()->get('email');
    	echo '<br/>';
    	echo Session::get('phone');
    	echo '<br/>';
    	echo session('address');
    }


    public function destroy(Request $request)
    {
    	$request->session()->flush();
    }

    public function forget(Request $request)
    {
    	$request->session()->forget('email');
    }


    public function check(Request $request)
    {
    	if ($request->session()->has('name')) {
    		echo 'Name is ' . Session::get('name');
    	}
    	if (Session::exists('name')) {
    		echo 'Name is ' . Session::get('name');
    	}
    }


    public function flash(Request $request)
    {
    	$request->session()->flash('message', 'Post created successfully');
    }

    public function showMessage(Request $request)
    {
    	echo $request->session()->get('message');
    }
}



