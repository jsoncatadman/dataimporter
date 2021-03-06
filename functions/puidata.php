<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../login/session.php');
	include_once('../dbconnection/dbconnectionconfig.php');
	if(isset($_POST["Import-PUI"])){
		$dbcon = getdb();
		$filename=$_FILES["file"]["tmp_name"];
		if($_FILES["file"]["size"] > 0) {
			$file = fopen($filename, "r");
			//get the data from the excel sheet (cvs format) then save it to the database
			while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sql = "INSERT into tblpuis (CODE, AGE, SEX, BARANGAY, ADMITTED, STILL_ON_HOME_QUARANTINE, COMPLETED_HOME_QUARANTINE, RESULT) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."')";
				$result = mysqli_query($dbcon, $sql);
			}
			if(!isset($result)) {
				echo "<script type=\"text/javascript\">
				alert(\"Invalid File:Please Upload CSV File.\");
				</script>";		
			} else {
				echo "<script type=\"text/javascript\">
				alert(\"CSV File has been successfully Imported.\");
				window.location = \"../app\"
				</script>";
			}
			fclose($file);	
		}
	}

	function get_all_pui_records(){
		$con = getdb();
		$sql = "SELECT * FROM tblpuis";
		$result = mysqli_query($con, $sql);  
		if (mysqli_num_rows($result) > 0) {
			echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
			<thead><tr><th>CODE</th>
			<th>AGE</th>
			<th>SEX</th>
			<th>BARANGAY</th>
			<th>ADMITTED</th>
			<th>STILL_ON_HOME_QUARANTINE</th>
			<th>COMPLETED_HOME_QUARANTINE</th>
			<th>RESULT</th>
			</tr></thead><tbody>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['CODE']."</td>
				<td>" . $row['AGE']."</td>
				<td>" . $row['SEX']."</td>
				<td>" . $row['BARANGAY']."</td>
				<td>" . $row['ADMITTED']."</td>
				<td>" . $row['STILL_ON_HOME_QUARANTINE']."</td>
				<td>" . $row['COMPLETED_HOME_QUARANTINE']."</td>
				<td>" . $row['RESULT']."</td></tr>";
			}
			echo "</tbody></table></div>";
		} else {
			echo "you have no records";
		}
	}
 ?>