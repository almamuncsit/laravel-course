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


Route::get('create_customer', function(){
	$data = [
		'name' => 'Shakib', 
		'email'=>'shakib@gmail.com', 
		'votes'=> '250',
		'created_at' => now(),
		'updated_at' => now(),
	];

	DB::table('customers')->insert($data);
});


Route::get('customers', 'CustomerController@index');





