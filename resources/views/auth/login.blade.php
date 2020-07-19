<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form accept="/login" method="post">
		@csrf
		Eamil: <input type="email" name="email"> <br/><br/>
		Password: <input type="password" name="password"> <br/><br/>
		<input type="submit" value="Login">
	</form>
</body>
</html>