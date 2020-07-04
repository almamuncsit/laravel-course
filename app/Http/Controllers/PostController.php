<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::take(2)->get();
    	
		return view('post.index', ['posts'=> $posts]);
    }
}
