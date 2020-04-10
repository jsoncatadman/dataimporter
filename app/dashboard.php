<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../login/session.php');
	include_once('../functions/graphdata.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Importer</title>
		<link rel="icon" type="image/png" href="../images/logo.png" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	</head>
	<body>
		<div id="header">
			<h2>Dashboard</h2>
			<div id="header-menu">
				<div class="menuitem"><a href="../app">Back to Data Importer</a></div>
				<div class="menuitem"><a href="../login/logout.php" onClick="return confirm('Are you sure you want to logout?')" class="menu-item">Logout</a></div>
			</div>
		</div>
		<div id="content">
			<div class="table">
				<div class="center-table">
					<div class="left-column ">
						<canvas id="pumChart"></canvas>
					</div>
					<div class="right-column">
						<canvas id="puiChart"></canvas>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			//get data from the query result
			var pummdata = <?php echo json_encode($pummaledata) ?>;
			var pumfdata = <?php echo json_encode($pumfemaledata) ?>;
			var pumctx = document.getElementById('pumChart').getContext('2d');
			var pumchart = new Chart(pumctx, {
				// The type of chart
				type: 'pie',
				// The data from the database for dataset
				data: {
					labels: ['Male', 'Female'],
					datasets: [{
						backgroundColor: ['#0000ff', '#ffc0cb'],
						data: [pummdata[0].total, pumfdata[0].total],
					}],
				},
				options: {
					responsive: true,
					title:{
						display: true,
						text: "Person Under Monitoring"
					}
				}
			});
			var puimdata = <?php echo json_encode($puimaledata) ?>;
			var puifdata = <?php echo json_encode($puifemaledata) ?>;
			var puictx = document.getElementById('puiChart').getContext('2d');
			var puichart = new Chart(puictx, {
				type: 'pie',
				data: {
					labels: ['Male', 'Female'],
					datasets: [{
						backgroundColor: ['#0000ff', '#ffc0cb'],
						data: [puimdata[0].total, puifdata[0].total],
					}],
				},
				options: {
					responsive: true,
					title:{
						display: true,
						text: "Person Under Investigation"
					}
				}
			});
		</script>
<?php
	echo file_get_contents("../html/footer_layout.html");
?>