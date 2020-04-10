<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../dbconnection/dbconnectionconfig.php');
	session_start();

	if(!isset($_SESSION['session_user'])){
		header("Location: ../");
	}
?>