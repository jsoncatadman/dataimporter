<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../login/session.php');
	include_once('../dbconnection/dbconnectionconfig.php');
	if(isset($_POST["Import-PUM"])){
		$dbcon = getdb();
		$filename=$_FILES["file"]["tmp_name"];		
		if($_FILES["file"]["size"] > 0) {
			$file = fopen($filename, "r");
			//get the data from the excel sheet (cvs format) then save it to the database
			while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sql = "INSERT into tblpums (ID, Home_Quarantined, ADMITTED, DATE_OF_BIRTH, AGE, SEX, PLACE, ARRIVAL_IN_ZC, FLIGHT, ADDRESS_PLACE_OF_STAY_IN_ZC, ADDRESS_BY_BARANGAY, HEALTH_DISTRICT, CATEGORY, End, No, Remaining_Days, DIAGNOSIS, DATE_ENCODED) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."')";
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

	function get_all_pum_records(){
		$con = getdb();
		$sql = "SELECT * FROM tblpums";
		$result = mysqli_query($con, $sql);  
		if (mysqli_num_rows($result) > 0) {
			echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
			<thead><tr><th>ID</th>
			<th>Home_Quarantined</th>
			<th>ADMITTED</th>
			<th>DATE_OF_BIRTH</th>
			<th>AGE</th>
			<th>SEX</th>
			<th>PLACE</th>
			<th>ARRIVAL_IN_ZC</th>
			<th>FLIGHT</th>
			<th>ADDRESS_PLACE_OF_STAY_IN_ZC</th>
			<th>ADDRESS_BY_BARANGAY</th>
			<th>HEALTH_DISTRICT</th>
			<th>CATEGORY</th>
			<th>End</th>
			<th>No</th>
			<th>Remaining_Days</th>
			<th>DIAGNOSIS</th>
			<th>DATE_ENCODED</th>
			</tr></thead><tbody>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['ID']."</td>
				<td>" . $row['Home_Quarantined']."</td>
				<td>" . $row['ADMITTED']."</td>
				<td>" . $row['DATE_OF_BIRTH']."</td>
				<td>" . $row['AGE']."</td>
				<td>" . $row['SEX']."</td>
				<td>" . $row['PLACE']."</td>
				<td>" . $row['ARRIVAL_IN_ZC']."</td>
				<td>" . $row['FLIGHT']."</td>
				<td>" . $row['ADDRESS_PLACE_OF_STAY_IN_ZC']."</td>
				<td>" . $row['ADDRESS_BY_BARANGAY']."</td>
				<td>" . $row['HEALTH_DISTRICT']."</td>
				<td>" . $row['CATEGORY']."</td>
				<td>" . $row['End']."</td>
				<td>" . $row['No']."</td>
				<td>" . $row['Remaining_Days']."</td>
				<td>" . $row['DIAGNOSIS']."</td>
				<td>" . $row['DATE_ENCODED']."</td></tr>";
			}
			echo "</tbody></table></div>";
		} else {
			echo "you have no records";
		}
	}

 ?>