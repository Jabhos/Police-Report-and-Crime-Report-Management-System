<?php

include('header.php');
include('dbconnect.php');



?>


<div class="container-fluid">


	<?php

	$date = date("Y m, d h:i a");

	$today = date("Y/m/d", strtotime($date));

	$query1 = mysqli_query($dbcon, "SELECT * FROM case_table where DATE_FORMAT(date_added,'$today')='$today'");
	$counter = mysqli_num_rows($query1);

	if ($counter == 0) {
		$counter = 101;
	} else {
		$counter = 100 + $counter + 1;
	}


	$trans_id = date('y') . date('m') . date('d') . $counter;


	?>



	<div class="container-fluid">

		<div class="col-md-2"></div>
		<div class="col-md-8">
			<ul class="list-group" id="myinfo">

				<li class="list-group-item" id="mylist"></li>

			</ul>
			<div class="panel panel-success">
				<div class="panel-heading">

					<h3 class="panel-title">Complainant Details</h3>
				</div>
				<div class="panel-body">


					<div class="container-fluid">
						<form class="form-horizontal" action="cmpl.php" method="post">

							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Name of Complainant:</label>
										<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" autofocus="" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="">Tel Phone:</label>
										<input type="text" name="tel" class="form-control" maxlength="11" onkeypress="return isNumberKey(event)" placeholder="Phone Number" required>
									</div>
								</div>
							</div>


							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Occupation:</label>

										<input type="text" name="occ" class="form-control" id="nid" placeholder="Enter Occupation" autofocus=""  required>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="">Gender:</label>
											<select class="form-control" name="gender" id="idcrime">
												<option selected="selected" value="">Select</option>

												<option value="Male"> Male</option>
												<option value="Female"> Female</option>

											</select>
										</div>
									</div>

								</div>




								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Age:</label>
											<input type="number" name="age" class="form-control" id="addrs" placeholder="Age"  required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="">Address:</label>
											<input type="text" name="addrs" class="form-control py-4" id="digaddrs" placeholder="Address" required>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="">City:</label>
											<input type="text" name="loc" class="form-control" id="loc" placeholder="Enter Location"  required>
										</div>
									</div>
                                    <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Statement:</label>
					    		<textarea name="statement" class="form-control"></textarea>
					    		
					  		</div>
                              <div class="col-md-6">
									<div class="form-group">
										<label for="">NID:</label>
										<input type="text" name="nid" class="form-control" onkeypress="return isNumberKey(event)" placeholder="National ID Card" required>
									</div>
								</div>
					  	</div>





								</div>
								<div class="form-group">
									<button type="submit" name="save_case" class="btn btn-success form-control">Save and Continue
										<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
									</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>

	<?php include('scripts.php'); ?>
	

	</body>

	</html>