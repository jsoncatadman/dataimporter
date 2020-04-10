<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../login/session.php');
	include_once('../dbconnection/dbconnectionconfig.php');
	$dbcon = getdb();
	//get_pum_gender_data
	$pumtotalmale = sprintf("SELECT count(*) as total FROM tblpums WHERE (SEX='M')");
	$pumtotalfemale = sprintf("SELECT count(*) as total FROM tblpums WHERE (SEX='F')");
	$pummaleresult = $dbcon->query($pumtotalmale);
	$pumfemaleresult = $dbcon->query($pumtotalfemale);
	$pummaledata = array();
	foreach ($pummaleresult as $row) {
		$pummaledata[] = $row;
	}
	$pumfemaledata = array();
	foreach ($pumfemaleresult as $row) {
		$pumfemaledata[] = $row;
	}
	$pummaleresult->close();
	$pumfemaleresult->close();

	//get_pui_gender_data
	$puitotalmale = sprintf("SELECT count(*) as total FROM tblpuis WHERE (SEX='M')");
	$puitotalfemale = sprintf("SELECT count(*) as total FROM tblpuis WHERE (SEX='F')");
	$puimaleresult = $dbcon->query($puitotalmale);
	$puifemaleresult = $dbcon->query($puitotalfemale);
	$puimaledata = array();
	foreach ($puimaleresult as $row) {
		$puimaledata[] = $row;
	}
	$puifemaledata = array();
	foreach ($puifemaleresult as $row) {
		$puifemaledata[] = $row;
	}
	$puimaleresult->close();
	$puifemaleresult->close();
	$dbcon->close();
	//print json_encode($data);
 ?>