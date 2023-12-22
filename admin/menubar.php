
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading" style="padding-bottom: 40px;">
				<center><h3>Admin Dashboard</h3></center>
                  	<?php 
						
						include('session.php');
						include('dbconnect.php');
						
						$query= mysqli_query($dbcon,"select * from userlogin where staffid = '$session_id'")or die(mysqli_error($dbcon));
						$row = mysqli_fetch_array($query);
						
						?>
						

                            <span class="pull-left">
                            <a href="index.php"><i class="icon-signout icon-large"></i>&nbsp;Dashboard</a>
                                  </span>
                            <span class="pull-right">
                               <?php echo $row['surname']." ". $row['othernames']." (" .$row['staffid'].")";  ?> 
                                 
                                  <a href="profile.php"><i class="icon-signout icon-large p-2"></i>&nbsp;Edit</a>
                                   <a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
                                  </span>
                             
                    </div>




			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="view_sos.php">
									<span class="glyphicon glyphicon-home" aria-hidden="true"></span> SOS Notifications</a>
							</div>
							
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="addstaff.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Add Staff</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="user.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								View Staff</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="caseview.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								View Cases</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					

					
					
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="support.php">
									<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Support</a>
							</div>
							
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="court_case.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Court</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="hearing_info1.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Hearing Info</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"> <a href="profile.php">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  
								Settings</a>
								
								</h3>
							</div>
							
						</div>
					</div>
					

					
					
				</div>
			</div>
		</div>
	</div>