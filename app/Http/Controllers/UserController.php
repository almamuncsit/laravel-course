<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	
	public function index()
	{
		$users = User::all();

		return $users;
	}


	public function show( $id )
	{	
		$user = User::find($id);

		return $user;
	}


    public function create()
    {
    	// Create a user
    	$data = [
    		'name' => 'Jone Doe',
    		'email' => 'jone@gmail.com',
    		'password' => '123456'
    	];

    	User::create($data);

    	return 'Created Successfully';
    }


    public function edit($id)
    {
    	$user = User::findOrFail($id);
    	$user->name = 'New name';
    	$user->email = 'new_email@gmail.com';
    	$user->save();

    	return 'Edited';
    }


    public function delete($id)
    {
    	$user = User::findOrFail($id);
    	$user->delete();

    	return 'Deleted';
    }

}
