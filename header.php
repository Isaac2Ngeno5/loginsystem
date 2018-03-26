<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<form action="assets/login.php" method="post">
					<input type="text" name="uid" placeholder="username/e-mail">
					<input type="password" name="password" placeholder="password">
					<button type="submit" name="submit">Login</button>
				</form>
				<a href="signup.php" >Sign Up</a>
			</div>
		</div>
	</nav>
</header>