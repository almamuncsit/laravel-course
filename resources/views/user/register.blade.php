<!DOCTYPE html>
<html>
<head>
	<title> Add a user </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">

{{-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif --}}

<form method="POST" action="/users">
    @csrf
    Name: <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
	@error('name')
	    <sapn class="text-danger">{{ $message }}</span>
	@enderror
    
    
    Eamil: <input type="text" name="email" class="form-control" value="{{ old('email') }}">
    @error('email')
	    <sapn class="text-danger">{{ $message }}</span>
	@enderror
    
    Password: <input type="password"  class="form-control"  name="password"> 
	@error('password')
	    <sapn class="text-danger">{{ $message }}</span>
	@enderror
    <br/> <br/>
    <input type="submit" value="Submit">
</form>

</div>
</body>
</html>