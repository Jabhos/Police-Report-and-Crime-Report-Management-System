<?php 
 $get_id = $_GET['id']; 
 require_once('dbconnect.php');
 include('header.php');

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

		</script>
		<div class="panel panel-success" id="outprint">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">Case Details</h3>
			 	</div>
			<div class="panel-body">
			 <br />
			
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		
			 		<h3 class="panel-title"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Complainant Details</h3>
			 	</div>
			 	<div class="panel-body">
			 		<?php
			 		$query=mysqli_query($dbcon,"select * from prev_complain where id='$get_id'");
		while($row = mysqli_fetch_array($query)){
			?>
			 			 <table class="table">
			 			 	<tr>
			 			 		<td>Case Number:</td><td><?php echo $get_id?></td>
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
			 			 		<td>Location:</td><td><?php echo $row['loc']?></td>
			 			 	</tr>
                              <tr>
			 			 		<td>Statement:</td><td><?php echo $row['statement']?></td>
			 			 	</tr>
			 			 	
			 			 	
			 			 <?php
			 			 }
			 			 ?>
			 			 	
			 			 </table>
			 			
			 	</div>
			 </div>
			 	</div>
			 </div>
			</div>	
						    
						   <center>
							   <a href="rej_case.php" class="btn btn-success">Return Home
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

