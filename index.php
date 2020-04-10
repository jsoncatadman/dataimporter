<!DOCTYPE html>
<!--
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
 -->
<html>
	<head>
		<title>Data Importer</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<style>
			body, html {
				width: 100%;
				height: 100%;
				margin: 0px auto;
				padding: 0px;
				font-family: 'Microsoft Yi Baiti';
				font-size: 20px;
			}
		</style>
	</head>
	<body>
			<div class="table">
				<div class="center-table">
					<form action="./login/login.php" method="POST" name="form">
						<div class="box">
							<div style="display: inline-block;">
								<img id="logo-image" src="./images/logo.png">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="textinput">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="textinput">
							</div>
							
							<div>
								<input type="submit" name="submit" value="LOGIN" id="adminlogin-btn" class="button">
							</div>
						</div>
					</form>
				</div>
			</div>
    </body>
</html>
