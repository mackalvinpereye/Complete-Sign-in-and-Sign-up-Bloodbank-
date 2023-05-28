<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="signup-check.php" method="post">
		<h2>SIGN UP</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
			<p class="success"><?php echo $_GET['success']; ?></p>
		<?php } ?>

		<?php if (isset($_GET['name'])) { ?>
			<input type="text" 
				   name="name" 
				   placeholder="Name" 
				   value="<?php echo $_GET['name']; ?>">
		<?php }else { ?>
			<input type="text" 
				   name="name" 
				   placeholder="Name">
		<?php } ?>

		<?php if (isset($_GET['uname'])) { ?>
			<input type="text" 
				   name="uname" 
				   placeholder="Username" 
				   value="<?php echo $_GET['uname']; ?>">
		<?php }else { ?>
			<input type="text" 
				   name="uname" 
				   placeholder="Username">
		<?php } ?>


		<input type="password" 
			   name="password" 
			   placeholder="Password">

		<input type="password" 
			   name="re_password" 
			   placeholder="Re Password">

		<button type="submit">Signup</button>
		<a href="index.php" class="su">Already have an account? Login here</a>
	</form>
</body>
</html>