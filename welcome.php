<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<?php 
   
   include_once('header-1.php');
   require_once('dbconfig.php');

   $id = $_SESSION['id'];
   $fname = $lname = $email = $gender = '';
   $sql = "SELECT * FROM users WHERE id='$id'";
   $result = mysqli_query($db, $sql);
   if (mysqli_num_rows($result) > 0) {
   	while($row = mysqli_fetch_assoc($result))
   	{
   		$fname = $row["Firstname"];
   		$lname = $row["Lastname"];
   		$email = $row["Email"];
   		$gender = $row["Gender"];

   	}
   }

?>

	<h2 style="background: #000000; color: #ffffff; padding: 50px 0px;text-align: center; font-size: 30px; text-transform: uppercase;letter-spacing: 8.8px;">
		<span style="color: #fe1010;">Welcome</span> <?php echo $fname. " " .$lname;?>
	</h2>

</body>
</html>