<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

</body>
<?php 
   include_once('header.php');
?>

	<div>
		<h2>Registration Form</h2>
		<form action="registration_code.php" method="POST">
			<label>First Name</label></br>
			<input type="text" name="firstname" id="firstname" />
			<br></br>
			<label>Last Name</label></br>
			<input type="text" name="lastname" id="lastname" />
			<br></br>
			<label>Gender</label></br>
			<label><input type="radio" name="gender" value="Male">Male</label>
	        <label><input type="radio" name="gender" value="Female">Female</label>
	        <br></br>
	        <label>Email</label></br>
			<input type="email" name="email" id="email" />
			<br></br>
			<label>Password</label></br>
			<input type="password" name="password" id="pwd" />
			<br></br>
			<button type="submit" name="create">Submit</button>

		</form>
	</div>

</body>
</html>