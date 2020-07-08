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

// Route::get('one', function() {
//     return 'This is first page';
// })->middleware('test');

// Route::get('two', function() {
//     return 'This is second page';
// })->middleware('test');;

// Route::get('three', function() {
//     return 'This is third page';
// })->middleware('test');;


// Route::middleware('test')->group(function() {
// 	Route::get('one', function() {
// 	    return 'This is first page';
// 	});
// 	Route::get('two', function() {
// 	    return 'This is second page';
// 	});
// 	Route::get('three', function() {
// 	    return 'This is third page';
// 	});
// });


Route::get('users/create', 'UserController@create');

Route::post('users', 'UserController@store');












