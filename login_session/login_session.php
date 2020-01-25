<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
	$_SESSION['auth'] = true;
}
header("location:index.php");
?>