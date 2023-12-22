<?php session_start();?>
<!DOCTYPE html>
<html lang="">
<style>
	body {
		background: url('images/bg-pic.jpg');
		background-repeat: no-repeat;
		background-size: cover;

	}
</style>

<?php
// session_start();
include('header.php');
include('dbconnect.php');
if (isset($_SESSION['staffid'])) {

	if ($_SESSION['role'] == 'Admin') {

		header("Location: admin/");
	} elseif ($_SESSION['role'] == 'CID') {

		header("Location: cid/");
	} elseif ($_SESSION['role'] == 'NCO') {

		header("Location: officer/");
	} elseif ($_SESSION['role'] == 'Court') {

		header("Location: court/");
	}
	// elseif($_SESSION['role']=='unapprove')
	// {
	// 	echo "<script>alert('Admin didn't approve your request.Talk your authority.')</script>";
	// 	header("Location: login.php");

	// }


}



?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light text-danger my-4">Login Staff</h3>
				</div>
				<div class="card-body">
					<form action="logincheck.php" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<!-- <label class="mb-1" for="status">User Status</label> -->
							<select name="status" id="" class="form-control">
								<option value="">Log in as</option>
								<option value="Admin">Admin</option>
								<option value="CID">CID</option>
								<option value="NCO">NCO</option>
								<option value="Court">Court</option>

							</select>
						</div>


						<div class="form-group">
							<!-- <label class="control-label col-sm-2" for="un">Email:</label> -->

							<input type="text" class="form-control py-4" name="username" id="un" placeholder="Enter Staff Email" autofocus="" required="">
						</div>

						<div class="form-group">
							<!-- <label class="control-label col-sm-2" for="pwd">Password:</label> -->

							<input type="password" class="form-control py-5" name="pwd" id="pwd" placeholder="Enter password" required="">

						</div>

						<div class="form-group">
							<!-- <div class="col-sm-offset-2 col-sm-10"> -->
								<button type="submit" name="login" class="btn btn-default">Login
									<span class="glyphicon glyphicon-check"></span>
									
								</button>
								
								<a href="index.php"> <button type="button" class="btn btn-info">Home Page</button>
									</a>

								
							
							<!-- </div> -->
						</div>

						


						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<?php
								if (isset($_SESSION['error'])) {
									echo "
			
  				<span class='alert alert-danger text-center mt-10'>
			  		" . $_SESSION['error'] . " 
			  	</span>
				
  			";
									unset($_SESSION['error']);
								}
								?>
							</div>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
</div>


