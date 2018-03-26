<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome <?php echo "$_SESSION['first']"?></h1>
</body>
</html>