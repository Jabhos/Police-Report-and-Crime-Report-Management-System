<?php 

include('header.php');
include('dbconnect.php');
$staffid = $_POST['username'];
$fname =$_POST['fname'];
$oname =$_POST['oname'];
$status =$_POST['status'];
$confirmation=$_POST['confirmation'];

	
if($status == ''){
mysqli_query($dbcon,"update userlogin set surname='$fname', othernames='$oname', confirmation= '$confirmation' where staffid='$staffid'")or die(mysqli_error($dbcon));
}
if(!empty($status)){
mysqli_query($dbcon,"update userlogin set surname='$fname',status='$status', othernames='$oname', confirmation= '$confirmation' where staffid='$staffid'")or die(mysqli_error($dbcon));
}

	
	 echo "<script type='text/javascript'>alert('Staff Editted');
	   document.location='user.php'</script>";
	  

 ?>

