<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;
use App\Address;
use App\Tag;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('users', function() {
	$users = User::take(2)->get();
	return view('user.index', ['users'=> $users]);
});

Route::get('posts', 'PostController@index');



