<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="frm">
		<form action="process.php" method="POST">
			<h3>ADMIN LOGIN </h3>
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="user"  />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="pass"  />
			</p>
			<p>
				<button type="submit" id="btn" name="Login" >LOGIN</button>
			</p>
		</form>
		<center><button class="button "type="button" onclick="window.location.href = 'index.php';">GO HOME</button>
	</div>

</body>
</html>