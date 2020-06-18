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

    public function show($id, $email = 'mamun@gmail.com')
    {
        return $id . ' ' . $email;
    }

    public function display($id)
    {
        return 'Display ' . $id;
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        return 'Added a user';
    }

    public function update()
    {
        return 'Updated';
    }

    public function updateName()
    {
        return 'Name has been updated';
    }


    public function delete()
    {
        return 'Deleted';
    }

}
