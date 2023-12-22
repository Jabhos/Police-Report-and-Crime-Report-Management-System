<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');
include('mysql.php');

?>

 
<br />
<div class="container-fluid">
	<?php include('menubar.php');?>
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-success">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
                        <form action="hearing_case_details.php" method="post">
			 			    <label for="case_id">Case ID </label>
                            <!-- <input type="text" name="c_id" placeholder="Enter Case ID" required> -->
							<input type="text" name="c_id" class="form-control" style="width: 200px; height:42px; margin-bottom:10px;" placeholder="Enter Case ID" required>
                            <input type="submit" class="btn btn-info m-2" value="Search" name="search">
                        </form>
						
			 		</h3>
			 	</div>
<div id="trans-table">

</div>
</div>

	</div>
	<div class="col-md-1"></div>
</div>


<?php include('scripts.php'); ?>


	


</body>
</html>