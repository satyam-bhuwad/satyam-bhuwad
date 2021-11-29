<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php 
       include_once('header.php');
	?>

	<div>
		<form action="login_code.php" method="POST">
			<label>Email</label></br>
			<input type="email" name="email" id="email" />
			<br></br>
			<label>Password</label></br>
			<input type="password" name="password" id="pwd" />
			<br></br>
			 <button type="submit" name="login">Login</button>
		</form>
	</div>

</body>
</html>