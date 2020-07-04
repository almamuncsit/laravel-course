@extends('layouts.app')

@section('title', 'This is users page')

@section('content')
 <h2> Users page </h2>

@if($users)
	 {{ $users[0]->email }} 
@else
	<h2> No users found </h2>	 
@endif


@if(count($users) == 1) 
	<h2> Only one user found </h2>
@elseif(count($users) > 1)
	<h2> More than one user found </h2>
@else
	<h2> No users found </h2>	
@endif

@stop