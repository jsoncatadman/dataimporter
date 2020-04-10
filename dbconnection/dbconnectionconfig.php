<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */

	function getdb(){
		$host = "";
		$username = "";
		$password = "";
		$db = "automatedataimportdb";
		try {
            $conn = mysqli_connect($host, $username, $password, $db); 
		}
		catch(exception $e) {
		    echo "Connection failed: " . $e->getMessage();
		}
		return $conn;
	}
//For Creating the tables in the database
/*
CREATE DATABASE databasename;

CREATE TABLE tblPUMs (
    ID int,
    Home_Quarantined varchar(255),
    ADMITTED varchar(255),
    DATE_OF_BIRTH varchar(255),
    AGE varchar(255),
    SEX	varchar(255),
    PLACE varchar(255),
    ARRIVAL_IN_ZC varchar(255),
    FLIGHT varchar(255),
    ADDRESS_PLACE_OF_STAY_IN_ZC varchar(255),
    ADDRESS_BY_BARANGAY varchar(255),
    HEALTH_DISTRICT varchar(255),
    CATEGORY varchar(255),
    End varchar(255),
    No varchar(255),
    Remaining_Days varchar(255),
    DIAGNOSIS varchar(255),
    DATE_ENCODED varchar(255)
);

CREATE TABLE tblPUIs (
    CODE int,
    AGE varchar(255),
    SEX varchar(255),
    BARANGAY varchar(255),
    ADMITTED varchar(255),
    STILL_ON_HOME_QUARANTINE varchar(255),
    COMPLETED_HOME_QUARANTINE varchar(255),
    RESULT varchar(255)
);

CREATE TABLE tblPUIsInLantaka (
    CODE int,
    AGE varchar(255),
    SEX varchar(255),
    BARANGAY varchar(255),
    ADDRESS varchar(255),
    HEALTH_FACILITY varchar(255),
    ADMITTED varchar(255),
    STILL_ON_HOME_QUARANTINE varchar(255),
    COMPLETED_HOME_QUARANTINE varchar(255),
    RESULT varchar(255),
    Status varchar(255)
);
======
CREATE TABLE tbluser (
    id int NOT NULL AUTO_INCREMENT,
    fullname varchar(255),
    username varchar(255),
    password varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO tbluser (fullname, username, password) VALUES ('Super Admin', 'xx', 'xx');
*/
?>
