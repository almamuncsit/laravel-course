<!DOCTYPE html>
<html>
<head>
	<title> Create an User </title>
</head>
<body>

<form method="post" action="/test-any">
	@csrf
	@method('PUT')
	<input type="text" name="name"> <br/><br/>
	<input type="submit" value="Submit">
</form>

</body>
</html>