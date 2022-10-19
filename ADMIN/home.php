<?php
include 'db_connect.php';
$sy = $conn->query("SELECT * from applicant_details")->fetch_array();
 ?>
<div class="container-fluid">
	<div class="col-md-12 alert alert-info">
		Dashboard
	</div>
	<div class="container">
		<h4>Academic: <?php echo isset($sy['school_year']) ? $sy['school_year'] : '' ?></h4>
	</div>
	<div class="row">
	<div class="card col-md-3 offset-md-2 alert alert-success">
		<div class="card-body text-center">
			Enrolled Students 
			<hr>
			<h3><?php echo $conn->query("SELECT * from applicant_details ".$sy['applicant_id'])->num_rows ?></h3>
		</div>
	</div>
	<div class="card col-md-3 offset-md-2 alert alert-info">
		<div class="card-body text-center">
			Faculty 
			<hr>
			<h3><?php echo $conn->query("SELECT * from faculty where status = 1 ")->num_rows ?></h3>
		</div>
	</div>
	</div>
</div>