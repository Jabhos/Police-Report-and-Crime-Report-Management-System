
<?php
session_start();
include('dbconnect.php');
include('header.php');
if (isset($_POST['login'])){

$username = mysqli_real_escape_string($dbcon,($_POST['username']));
$pwd = mysqli_real_escape_string($dbcon,trim($_POST['pwd']));
$status=$_POST['status'];


// $query=mysqli_query($dbcon,"select * from userlogin where staffid='$username' AND password= SHA1('$pwd') AND confirmation='approve'");
$query=mysqli_query($dbcon,"select * from userlogin where email='$username' AND password= SHA1('$pwd') AND confirmation='approve' AND status='$status'");

$count=mysqli_num_rows($query);
if($count ==1){
$row = mysqli_fetch_array($query);
$_SESSION['staffid']=$row['staffid'];
$_SESSION['role']=$row['status'];
//mysqli_query($dbcon,"UPDATE voter SET vote_status='voted' where index_number='$voterid'");

		
}
else{
	$_SESSION['error'] = 'Your Staff ID or password is not valid';
	}
	
}
header('location: login.php');
?>

