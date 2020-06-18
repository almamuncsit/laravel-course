<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::prefix('admin')->group(function() {
	Route::get('hello', function() {
		return "Hello";
	});

	Route::get('world', function() {
		return 'World';
	});

});



// Route::get('users', 'UserController@index');
// Route::get('create_user', 'UserController@create');
// Route::post('add-user', 'UserController@store');
// Route::put('update-user', 'UserController@update');
// Route::patch('update-user-name', 'UserController@updateName');
// Route::delete('delete-user', 'UserController@delete');

Route::get('user-list', 		'UserController@index')->name('user_list');
Route::get('users/{id}/profile/{email?}', 		'UserController@show');



Route::get('users/{id}', 	'UserController@display')->where('id', '[0-9]+');
Route::get('users/create',  'UserController@create');

Route::post('users', 		'UserController@store');
Route::put('users', 		'UserController@update');
Route::patch('users', 		'UserController@updateName');
Route::delete('users', 		'UserController@delete');

Route::redirect('/test', '/test-any');

Route::any('test-any', function () {
    return 'I am from Any';
});





