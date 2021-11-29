
<?php 

   session_start();
   $email = $_SESSION['email'];
?>

<nav>
		<div>
			<a href="#">Registration Login</a>
		</div>
		
		<div>
  <button  type="button" data-toggle="dropdown"><?php echo $email; ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	</div>
</nav>