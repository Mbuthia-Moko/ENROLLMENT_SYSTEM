<div class="container-fluid">
	<div class="card col-md-12">
		<div class="card-body">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary btn-sm btn-block col-sm-2" id="new_student"><i class="fa fa-plus"></i> New Student</button>
			</div>
			<br>
			<div class="col-md-12">
				<table class="table table-bordered" id="student-tbl">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Name</th>
							<th class="text-center">Email</th>
							<th class="text-center">Phone</th>
							<th class="text-center">Level</th>
							<th class="text-center">Course</th>
							<th class="text-center">Document</th>
							<th class="text-center">Admission Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						 <tr>
                                <?php
			  require_once("../USER/PHP/phpMethods.php");
			  $query = "SELECT * FROM applicant_details";
			  $test = getDataRows($query);
			  $rows =array();
			  foreach ($test as $key => $rows) {
			  		?>
                       <tr>
			  			<td><?php echo $rows["applicant_id"]?></td>
			  		    <td><?php echo $rows['firstname']. ' ' .$rows['lastname']?></td>
                        <td><?php echo $rows["email"]?></td>
                        <td><?php echo $rows["phone"]?></td>
                        <td><?php echo $rows["edLevel"]?></td>
                        <td><?php echo $rows["course"]?></td>
			  			<td><?php echo $rows["certificateFileName"]?></td>
			  			<td><?php echo $rows["applicantApprovalStatus"]?></td>
                          <?php
                          echo "<td>";
                          echo "<a class='btn btn-success btn-sm 'href ='edit.php?id =" . $rows["applicant_id"] . "'>Edit</a>";
                          echo "<a class='btn btn-success btn-sm 'href ='delete_applicant.php?id =" . $rows["applicant_id"] . "'>Delete</a>";
                          echo "</td>";
                         

                          ?>
    
			  	<?php }
			  	?>
                        </tr>
						
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
	
	<style>
		img.img-field {
		    max-height: 30vh;
		    max-width: 27vw;
		}
	</style>
</div>