<?php

require_once('dbconnect.php');
include('header.php');
include('mysql.php');

    if(isset($_POST['search'])){
        $case_id = $_POST['c_id'];
        $sql = "SELECT `id` FROM `court` WHERE case_id = '$case_id'";
        if($row = mysqli_query($dbc,$sql)){
            $sql1 = "SELECT * FROM `complainant` WHERE case_id = '$case_id'";
            $sql2 = "SELECT * FROM `case_table` WHERE case_id = '$case_id'";
            $sql3 = "SELECT * FROM `investigation` WHERE case_id = '$case_id'";

            $row1 = mysqli_query($dbc,$sql1);
            $row2 = mysqli_query($dbc,$sql2);
            $row3 = mysqli_query($dbc,$sql3);

        }
    }

?>






<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		
	
</div>

<div class="container-fluid">
	<?php include('menubar.php') ?>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<a href="#" onClick="window_print()" class="btn btn-info" style="margin-bottom:20px"><i class="icon-print icon-large"></i> Print</a>
		<div class="panel panel-success" id="outprint">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">Case Details</h3>
			 	</div>
			<div class="panel-body">
			 <br />
			
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		
			 		<h3 class="panel-title"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Complainant Details ( Case ID : <?php echo $case_id ?> )</h3>
			 	</div>
			 	<div class="panel-body">
			 		<?php
			 		$query=mysqli_query($dbcon,"select * from complainant where case_id='$case_id'");
		while($row = mysqli_fetch_array($query)){
			?>
			 			 <table class="table">
			 			 	<tr>
			 			 		<td>Case Number:</td><td><?php echo $case_id?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>Name:</td><td><?php echo $row['comp_name']?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>Gender:</td><td><?php echo $row['gender']?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>Age:</td><td><?php echo $row['age']?></td>
			 			 	</tr>
			 			 	
			 			 	<tr>
			 			 		<td>Occupation:</td><td><?php echo $row['occupation']?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>Tel:</td><td><?php echo $row['tel']?></td>
			 			 	</tr>
			 			 	
			 			 	<tr>
			 			 		<td>Region:</td><td><?php echo $row['region']?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>District:</td><td><?php echo $row['district']?></td>
			 			 	</tr>
			 			 	<tr>
			 			 		<td>Location:</td><td><?php echo $row['loc']?></td>
			 			 	</tr>
			 			 	
			 			 	
			 			 <?php
			 			 }
			 			 ?>
			 			 	
			 			 </table>
			 			
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			
			 		Case Details</h3>
			 	</div>
			 	<div class="panel-body">
			 		<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							    	<th>
							        	<center>
							       			Crime Type
							        	</center> 
							        </th>
							        <th>
							        	<center>
							       			Diary of Action
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Time Reported
							        	</center>
						        	</th>
							       
						        	 <th>
							        	<center>
							        		NCO
							        	</center>
						        	</th>
						        	<th>
							        	<center>
							        		CID
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Status
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    	<?php
						    	$sn=0;
			 		$query=mysqli_query($dbcon,"select * from case_table where case_id='$case_id'");
		while($row = mysqli_fetch_array($query)){
			$sn++;
			?>
						    	<tr><td><?php echo $row['case_type']?></td>
						    		<td><?php echo $row['diaryofaction']?></td>
						    		<td><?php echo $row['date_added']?></td>
						    		<td><?php echo $row['staffid']?></td>
						    		<td><?php echo $row['cid']?></td>
						    		<td><?php echo $row['status']?></td>
						    		
						    	</tr>
<?php }
?>
</tbody>
						</table>

</div>
			 </div>

             <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			
			 		Investigation Details</h3>
			 	</div>
			 	<div class="panel-body">
			 		<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
                                    <th>
							        	<center>
							       			Date of Report
							        	</center> 
							        </th>
						        	 <th>
							        	<center>
							        		Investigation Report
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    	<?php
						    	$sn=0;
			 		$query=mysqli_query($dbcon,"select * from `archrive` where case_id='$case_id'");
		while($row = mysqli_fetch_array($query)){
			$sn++;
			?>
						    	<tr>
						    		<td><?php echo date('M j Y g:i A', strtotime($row['date']))?></td>
						    		<td><?php echo $row['report']?></td>
						    	</tr>
<?php }
?>
</tbody>
						</table>

						<form action="post_hearing.php" method="post">
							<label for="c_statement">Court Statement:</label><br>
							<textarea name="c_statement" cols="100" rows="5"></textarea><br>
							<input type="text" name="staffid" value="<?php echo $staffid ?>" hidden>
							<input type="text" name="c_id" value="<?php echo $case_id ?>" hidden>
							<input type="submit" value="Submit" name="submit"><br>
						</form>

</div>
			 </div>
				
			 	
			 	</div>
			 </div>
			</div>	
						    
						   <center>
							   <a href="caseview.php" class="btn btn-success">Return Home
								   <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
							   </a>
						   </center>
				
			
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php') ?>


<script type="text/javascript">

    function window_print(){
		var _head = $('head').clone();
		var _p = $('#outprint').clone();
		var _html = $('<div>')
		_html.append("<head>"+_head.html()+"</head>")
		_html.append("<h3 class='text-center'>CRIME RECORDS MANAGEMENT SYSTEM</h3>")
		_html.append(_p)
		console.log(_html.html())
		var nw = window.open("","_blank","width:900;height:800")
			nw.document.write(_html.html())
			nw.document.close()
			nw.print()
			setTimeout(() => {
				nw.close()
			}, 500);
	}
	</script>
</body>
</html>