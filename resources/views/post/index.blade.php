@extends('layouts.app')

@section('title', 'This is posts page')

@section('sidebar')
	@parent
	hello sidebar	
@endsection

@section('content')
	<h1> All Posts </h1>

	
	@foreach($posts as $post)
		<div class="post">
			<h2>{{ $post->title }} </h2>
			<p> {{ $post->description }} </p>
		</div>
	@endforeach
	

	<h2> For Ealse </h2>
	@forelse ($posts as $post)
		<div class="post">
			<h2>{{ $post->title }} </h2>
			<p> {{ $post->description }} </p>
		</div>
	@empty
		<h2> No post fund </h2>
	@endforelse


@endsection