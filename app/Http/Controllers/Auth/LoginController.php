<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('auth.login');
    }


    public function login( Request $request )
    {
    	$data = $request->only(['email', 'password']);

    	if (Auth::attempt($data)) {
    		return redirect()->intended('/admin');
    	}
    	
    	return redirect()->to('/login');
    }


    public function logout()
    {
    	Auth::logout();

    	return redirect()->to('/login');
    }

}
