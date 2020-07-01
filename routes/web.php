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

Route::get('one-to-one', function() {
	$user = User::find(2);
	echo $user->name . '<br/>';
	echo $user->email . '<br/>';
	echo $user->address->country . '<br/>';
});


Route::get('one-to-one-inverse', function() {
	$address = Address::find(2);
	echo $address->city . '<br/>';
	echo $address->user->name . '<br/>';

	dd($address->user);
});


Route::get('one-to-many', function() {
	$user = User::find(1);
	echo $user->name . '<br/>';
	
	foreach ($user->posts as $post) {
		echo $post->title . '<br/>';
	}
});

Route::get('one-to-many-inverse', function() {
	$post = Post::find(17);
	echo $post->title . '<br/>';
	echo $post->user->name . '<br/>';
	
	// $post->user->name  = 'Mamun Sarkar';
	// $post->user->save();

	dd($post->user);
});


Route::get('many-to-many', function() {
	$post = Post::find(2);
	echo $post->title . '<br/>';

	echo '<h2> Tags </h2>';
	foreach ($post->tags as $tag) {
		echo $tag->title . '<br/>';
	}

	// dd($post->tags);
});


Route::get('many-to-many-inverse', function() {
	$tag = Tag::find(1);
	echo $tag->title . '<br/>';

	echo '<h2> Posts </h2>';
	foreach ($tag->posts as $post) {
		echo $post->title . '<br/>';
	}
	// dd($tag->posts);
});

Route::get('attach', function() {
	$post = Post::find(1);
	$post->tags()->attach([1, 2]);
});

Route::get('sync', function() {
	$post = Post::find(1);
	$post->tags()->sync([1, 2]);
});

Route::get('detach', function() {
	$post = Post::find(1);
	$post->tags()->detach();
});











