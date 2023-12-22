<?php
require_once("mysql.php");
if(isset($_POST['save_case'])){
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $occ = $_POST['occ'];
    $age = $_POST['age'];
    $addrs = $_POST['addrs'];
    $loc = $_POST['loc'];
    $statement = $_POST['statement'];
    $gender = $_POST['gender'];
    $nid = $_POST['nid'];

    $q = "INSERT INTO `prev_complain`(`comp_name`, `tel`, `occupation`, `loc`, `addrs`, `age`, `gender`, `NID`, `statement`) VALUES ('$name','$tel','$occ','$loc','$addrs','$age','$gender','$nid', '$statement')";

    if(mysqli_query($dbc, $q)){
        echo "<script> alert('We will be notified soon') </script>";
        echo "<script>window.open('main1.php','_self')</script>";
    }
    else{
        echo "<script> alert('Error..!!! Try Again..!!!') </script>";
    }
}


?>