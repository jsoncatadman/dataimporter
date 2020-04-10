<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	session_start();
	if(session_destroy()) {
		header("Location: ../");
	}
?>