<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');

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
	        <th ><center>Date & Time</center></th>
			<th><center>Latitude</center></th>
	        <th><center>Longitude</center></th>
	        <th><center>User IP</center></th>
	        <th><center>Status</center></th>
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from sos ORDER BY status");
		while($row = mysqli_fetch_array($query)){
		$id = $row['id'];
		$sn++;
		?>
		<tr>
       
        <td><?php echo $sn;?></td>
       
        <td><?php echo date('M j Y g:i A', strtotime($row['time']));?></td> 
		<td><?php echo $row['latitude'];?></td>
		<td><?php echo $row['longitude']; ?></td>
		<td><?php echo $row['user_ip']; ?></td>  
		<td><?php 
        if($row['status'] == '1' OR $row['status'] == 1){
            echo "Accepted";
        }else if($row['status'] == '0' OR $row['status'] == 0){
            echo "New";
        }
		else{
			echo 'Rejected';
		} ?></td>  
		
		<?php if($row['status'] == '0' or $row['status'] == 0){?>
			<td class="empty" width="">
			<a href="sos_confirm.php?id=<?php echo $id; ?>,1">Accept</a>
			&emsp;
			<a href="sos_confirm.php?id=<?php echo $id; ?>,-1">Reject</a>
		<?php } ?> 
		</td>
		<td>
		<a href="https://www.google.com/maps/@<?php echo $row['latitude']?>,<?php echo $row['longitude']?>">view on map</a>
		
		</td>
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