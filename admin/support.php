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
	        
	         <th>Name</th>
             <th><center>Date & Time</center></th>
	        <th><center>NID/Passport</center></th>
            <th><center>Mobile</center></th>
            <th><center>Email</center></th>
            <th><center>Message</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from support");
		while($row = mysqli_fetch_array($query)){
		$id = $row['id'];
		$sn++;
		?>
		<tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td> 
		<td><?php echo date('M j Y g:i A', strtotime($row['date'])); ?></td>
        <td><?php echo $row['nid'];?></td>
        <td><?php echo $row['tel'];?></td> 
        <td><?php echo $row['email'];?></td> 
        <td><?php echo $row['issue'];?></td> 
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