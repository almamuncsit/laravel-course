<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('register', 'Auth\RegistrationController@index');
Route::post('register', 'Auth\RegistrationController@store');

Route::get('test', function() {
    if (Auth::check()) {
    	return Auth::user();
    } else {
    	return 'Please Login';
    }
});


Route::middleware('auth')->group( function() {
    Route::get('admin', function() {
	    return Auth::user();
	    return 'Welcome to admin';
	});
	Route::get('dashboard', function() {
	    return 'Welcome to dashboard';
	});
	Route::get('update', function() {
	    return 'Welcome to udate';
	});
	Route::get('posts', function() {
	    return 'Welcome to posts';
	});
});



Route::get('file-upload', function() {
    return view('file_upload');
});












