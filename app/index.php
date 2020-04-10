<?php
/* Copyright (C) 2020 JAC Production - All Rights Reserved
 * Data Importer
 * with Chart Report
 * Developed By: Jason A. Catadman
 */
	include_once('../login/session.php');
	echo file_get_contents("../html/header_layout.html");
?>

		<div id="content">
			<!-- PUM -->
			<div>
				<form class="form-horizontal" action="../functions/pumdata.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<div class="box-header">
							<div class="header-content">
								<div class="left-column ">
									<div class="header-title">Person Under Monitoring</div>
									<p><a href="dashboard.php">View Dashboard</a></p>
									<p>The file format must be in .cvs (CVS Comma Delimited).</p>
								</div>
								<div class="right-column">
									<div id="file-btn-con">
										<input type="file" name="file" id="file" class="input-large">
									</div>
									<div>
										<input type="submit" name="Import-PUM" value="IMPORT DATA (csv to sql database)" class="button" id="import">
									</div>
								</div>
							</div>
						</div>	
					</fieldset>
				</form>
				<?php
					include_once('../functions/pumdata.php');
					get_all_pum_records();
				?>
			</div>
			<!-- PUI -->
			<div>
				<form class="form-horizontal" action="../functions/puidata.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<div class="box-header">
							<div class="header-content">
								<div class="left-column ">
									<div class="header-title">Person Under Investigation</div>
									<p><a href="dashboard.php">View Dashboard</a></p>
									<p>The file format must be in .cvs (CVS Comma Delimited).</p>
								</div>
								<div class="right-column">
									<div id="file-btn-con">
										<input type="file" name="file" id="file" class="input-large">
									</div>
									<div>
										<input type="submit" name="Import-PUI" value="IMPORT DATA (csv to sql database)" class="button" id="import">
									</div>
								</div>
							</div>
						</div>	
					</fieldset>
				</form>
				<?php
					include_once('../functions/puidata.php');
					get_all_pui_records();
				?>
			</div>
			<!-- PUI LANTAKA-->
			<div>
				<form class="form-horizontal" action="../functions/puilantakadata.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<div class="box-header">
							<div class="header-content">
								<div class="left-column ">
									<div class="header-title">PUI Lantaka</div>
									<p><a href="dashboard.php">View Dashboard</a></p>
									<p>The file format must be in .cvs (CVS Comma Delimited).</p>
								</div>
								<div class="right-column">
									<div id="file-btn-con">
										<input type="file" name="file" id="file" class="input-large">
									</div>
									<div>
										<input type="submit" name="Import-PUI-Lantaka" value="IMPORT DATA (csv to sql database)" class="button" id="import">
									</div>
								</div>
							</div>
						</div>	
					</fieldset>
				</form>
				<?php
					include_once('../functions/puilantakadata.php');
					get_all_pui_lantaka_records();
				?>
			</div>
		</div>
		
<?php
	echo file_get_contents("../html/footer_layout.html");
?>