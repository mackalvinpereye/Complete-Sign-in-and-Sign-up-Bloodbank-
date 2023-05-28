<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="login.php" method="post">
		<h2>LOG IN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<input type="text" name="uname" placeholder="Username">

		<input type="password" name="password" placeholder="Password">

		<button type="submit">Login</button>
		<a href="signup.php" class="li">Dont have an account yet? Create one here</a>
	</form>
</body>
</html>