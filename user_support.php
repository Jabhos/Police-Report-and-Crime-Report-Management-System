<?php

include('header.php');
include('dbconnect.php');
include('mysql.php');



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

					<h3 class="panel-title">Message To Us</h3>
				</div>
				<div class="panel-body">


					<div class="container-fluid">
						<form class="form-horizontal" method="post">

							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Name:</label>
										<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" autofocus="" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="">Mobile:</label>
										<input type="text" name="tel" class="form-control" maxlength="11" onkeypress="return isNumberKey(event)" placeholder="Phone Number" required>
									</div>
								</div>
							</div>


							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Email(optional):</label>

										<input type="text" name="email" class="form-control" id="nid" placeholder="Enter Occupation" autofocus="">
									</div>

								</div>

                              <div class="col-md-6">
									<div class="form-group">
										<label for="">NID:</label>
										<input type="text" name="nid" class="form-control" onkeypress="return isNumberKey(event)" placeholder="National ID Card" required>
									</div>
								</div>
                              <div class="col-md-6">
									<div class="form-group">
                                    <label for="">Complain/Suggestion:</label>
                                    <textarea name="statement" class="form-control" required></textarea>
									</div>
								</div>
					    		
					  		</div>

                                
					  	</div>





								</div>
								<div class="form-group">
									<button type="submit" name="send" class="btn btn-success form-control">Send
										<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
									</button>
								</div>
						</form>
                        <?php

                        if(isset($_POST['send'])){
                            $stmt = $_POST['statement'];
                            $nid = $_POST['nid'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $name = $_POST['name'];
                            $sql = "INSERT INTO `support`(`name`, `tel`, `email`, `nid`, `issue`) VALUES ('$name', '$tel', '$email', '$nid', '$stmt')";
                            if(mysqli_query($dbc, $sql)){
                                echo "<script>alert('Thank you for your message')</script>";
                            }
                        }

                        ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>

	<?php include('scripts.php'); ?>
	

	</body>

	</html>