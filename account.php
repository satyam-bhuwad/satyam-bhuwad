

<?php 

  include_once('header-1.php');
  require_once('dbconfig.php');

  $id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM users WHERE ID='$id'";
$result = mysqli_query($db, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$gender = $row["Gender"];
		$email = $row["Email"];
	}
}

?>

<div>
	<div>
         <img alt="" src="img/user.svg">
     </div>
     <br></br>
     <h2>
     	<?php echo $fname. " ".$lname ?>
     </h2>
</div>

<table border="1" align="left">
          	<tr>
          		<th width="100px">First Name </th>
          		<td><?php echo $fname; ?></td>
          	</tr>
          	<tr>
          		<th width="100px">Last Name </th>
          		<td><?php echo $lname; ?></td>
          	</tr>
          	<tr>
          		<th width="100px">Gender </th>
          		<td><?php echo $gender; ?></td>
          	</tr>
          	<tr>
          		<th width="100px">Email </th>
          		<td><?php echo $email; ?></td>
          	</tr>
          </table>