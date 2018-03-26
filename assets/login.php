<?php
	session_start();
	
if (isset($_POST["submit"])) {
	include_once "db_conn.php";

	$uid = mysqli_real_escape_string($conn, $_POST["uid"]);
	$password = mysqli_real_escape_string($conn, $_POST["password"]);

	if (empty($uid) || empty($password)) {
		header("Location: ../index.php?login=error");
		exit();
	}else{
		$sql = "SELECT * FROM `users` WHERE user_uid='$uid'";
		$results = mysqli_query($conn, $sql);
		$result_checker = mysqli_num_rows($results);

		if ($result_checker < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($results)) {
				$hashedpasswordcheck = password_verify($password, $row["user_pwd"]);

				if ($hashedpasswordcheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				}elseif($hashedpasswordcheck == true){
					$_SESSION["u_id"] = $row["user_id"];
					$_SESSION["first"] = $row["user_first"];
					header("Location: ../home.php");
				}
			}
		}
	}
}else{
	header("Location: ../index.php?login=error");
	exit();
}