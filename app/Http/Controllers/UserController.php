<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
	
	public function create()
    {
        return view('user.register');
    }

    public function store( UserRequest $request )
    {
        // $request->validate([
        //     'name' => 'required|string|min:3',
        //     'email' => 'required|email',
        //     'password' => 'required|numeric',
        // ]);

        // return $data;
        // return $request->input('email');
        return $request->all();
    }

}
