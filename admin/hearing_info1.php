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
			 			Case List
			 		</h3>
			 	</div>
<div id="trans-table">
<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>S/N</th>
	        
	         <th>Case Number</th>
	        <th><center>Date & Time</center></th>
			<th><center>View Progress</center></th>
			<th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from hearings");
		while($row = mysqli_fetch_array($query)){
		$id = $row['case_id'];
		$sn++;
		?>
		<tr>
       
        <td><?php echo $sn;?></td>
       
        <td><?php echo $row['case_id'];?></td> 
		<td><?php echo date('M j Y g:i A', strtotime($row['updated_at'])); ?></td>
		<td><?php echo $row['court_statement']; ?></td>
		
		<td><a href="hearing_case_details.php?case_id=<?php echo $row['case_id'] ?>"><button type= "button" class="btn btn-success">View</button></a></td>

		</tr>
	<?php } ?>    
    </tbody>
</table>
</div>
</div>

	</div>
	<div class="col-md-1"></div>
</div>


<?php include('scripts.php'); ?>


	

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>
</body>
</html>