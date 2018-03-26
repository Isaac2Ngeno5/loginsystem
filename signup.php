<?php
	include_once "header.php";
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="Signup-form" action="assets/signup.php" method="post">
			<input type="text" name="first" placeholder="firstname"><br>
			<input type="text" name="last" placeholder="lastname"><br>
			<input type="text" name="email" placeholder="email"><br>
			<input type="text" name="uid" placeholder="username"><br>
			<input type="password" name="password" placeholder="password"><br>
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
</section>

<?php
	include_once "footer.php";
?>
