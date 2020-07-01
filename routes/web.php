<?php

use Illuminate\Support\Facades\Route;
use App\Post;
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

Route::get('orm', function() {
	$data = [
		'title' => 'Welcome to dhaka',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos assumenda maiores, amet laboriosam reprehenderit dicta autem ex fugiat impedit quaerat aspernatur illo ipsa enim a delectus itaque beatae iste!',
		'user_id' => 1,
		'status' => 1
	];

	Post::create($data);
	
});


Route::get('posts/{id}', function( $id ) {
	$posts = Post::findOrFail($id);	

	dd($posts);
});

Route::get('posts', function() {
	$posts = Post::where('status', 1)->firstOrFail();	

	dd($posts);
});

Route::get('add-post', function() {
		
	$post = new Post();
	$post->title = 'This is title';
	$post->description = 'This is description';
	$post->user_id = 1;
	$post->status = 1;
	
	$post->save();

});

Route::get('update-post', function() {
	$post = Post::find(20);
	$post->title = 'This is new title';
	$post->status = 0;
	$post->save();
});

Route::get('first-or-create', function() {
	// $post = Post::firstOrCreate(['title' => 'Hello post']);
	$post = Post::firstOrNew(['title' => 'My new post']);
	$post->status = 1;
	$post->save();
});


Route::get('delete-post', function() {
	// $post = Post::findOrFail(4);
	// $post->delete();

	// Post::destroy([6, 7, 8]);

	Post::where('status', 0)->delete();
});







