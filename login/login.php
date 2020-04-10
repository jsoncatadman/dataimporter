<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../dbconnection/dbconnectionconfig.php');
	$dbcon = getdb();
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = mysqli_real_escape_string($dbcon, $_POST['username']);
		$password = mysqli_real_escape_string($dbcon, $_POST['password']); 
		$result = mysqli_query($dbcon, "SELECT id FROM tbluser WHERE username='$username' and password='$password'");
		$count = mysqli_num_rows($result);

		if($count == 1) {
			session_regenerate_id(true);
			$_SESSION['session_user'] = $username;
			echo "<script type=\"text/javascript\">
				alert(\"You have successfully logged in.\");
				window.location = \"../app\"
				</script>";
		} 
		else {
			if(empty($username)) {
				echo "<script type=\"text/javascript\">
					alert(\"Username field is empty.\");
					window.location = \"../\"
				</script>";
			}
			else if(empty($password)) {
				echo "<script type=\"text/javascript\">
					alert(\"Password field is empty.\");
					window.location = \"../\"
				</script>";
			}
			else {
				echo "<script type=\"text/javascript\">
					alert(\"Your Login Name or Password is invalid.\");
					window.location = \"../\"
				</script>";
			}
		}
	}
?>