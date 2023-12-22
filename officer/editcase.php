<?php 

include('header.php');
include('dbconnect.php');
$casetype = $_POST['crime_type'];
$statement =$_POST['statement'];
$caseid =$_POST['caseid'];
	
	
mysqli_query($dbcon,"update case_table set diaryofaction='$statement', case_type='$casetype' where case_id='$caseid'")or die(mysqli_error($dbcon));
	
	 echo "<script type='text/javascript'>alert('Case Editted');
	  document.location='caseview.php'</script>";
	  

 ?>

