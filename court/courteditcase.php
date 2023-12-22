<?php 

include('header.php');
include('dbconnect.php');

$case_id =$_POST['case_id'];
$next_hearing_date =$_POST['next_hearing_date'];
$hearing_info =$_POST['hearing_info'];


	
mysqli_query($dbcon,"update court set next_hearing_date='$next_hearing_date', hearing_info='$hearing_info' where case_id='$case_id'")or die(mysqli_error($dbcon));
	
	
      echo "<script type='text/javascript'>alert('Case is Edited');
	  document.location='caseview.php'</script>";
