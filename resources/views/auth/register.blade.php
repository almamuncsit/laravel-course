<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>
	<form accept="/register" method="post">
		@csrf
		Name: <input type="text" name="name"> <br/><br/>
		Eamil: <input type="email" name="email"> <br/><br/>
		Password: <input type="password" name="password"> <br/><br/>
		<input type="submit" value="Signup">
	</form>
</body>
</html>