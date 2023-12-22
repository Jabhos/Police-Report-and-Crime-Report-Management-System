<?php

require_once('mysql.php');

if(isset($_POST['submit'])){
    $statement = $_POST['c_statement'];
    $staffid = $_POST['staffid'];
    $caseid = $_POST['c_id'];
    
    $sql = "INSERT INTO `hearings`(`case_id`, `court_statement`, `staff_id`) VALUES ('$caseid', '$statement', '$staffid')";
    if(mysqli_query($dbc,$sql)){
        echo "<script>alert('".$caseid." Case Updated')</script>";
        echo "<script>window.open('caseview.php')</script>";
    }

}

?>