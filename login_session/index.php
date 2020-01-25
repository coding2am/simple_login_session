<?php

session_start();
$auth = isset($_SESSION['auth']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Login Session </title>
</head>
<style type="text/css">
	form {
		text-align: center;
	}
	h2 {
		font-family: "Arial", monospace;
		text-align: center;
	}
	input[type=password]{
		margin-top: 10px;
	}
	input[type=submit]{
		margin-top: 10px;
	}
</style>
<body>
	<?php 

	if (!$auth) {
		?>
		<h2>Login</h2>
		<form method="POST" action="login_session.php">
			<label for="username" id="labels">Username</label>
			<input type="text" name="username"><br>
			<label for="username" id="labels">Password</label>
			<input type="password" name="password"><br>
			<input type="submit" name="Login">
		</form>
	<?php }else {
		?>
		<p><h2>Welcome</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<a href="logout_session.php"><button>Logout</button></a>
	<?php }
	?>
	
</body>
</html>