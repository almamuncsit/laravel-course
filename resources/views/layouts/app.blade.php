<!DOCTYPE html>
<html>
<head>
	<title> @yield('title', 'This is default title') </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

	<div class="header">
		<h1>This is new header</h1>
	</div>

	@section('sidebar')
		<h2> This is sidebar </h2>
	@show

	@yield('content')

	<div class="footer" style="margin-top: 30px;">
		This is footer
	</div>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
