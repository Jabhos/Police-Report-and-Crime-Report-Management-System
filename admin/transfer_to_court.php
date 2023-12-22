<?php
if(isset($_GET['id']))
{
    $case_id=$_GET['id'];
    require_once('mysql.php');
    $query="INSERT INTO court(case_id,hearing_info) VALUES('$case_id','pending')";
    $result_query=mysqli_query($dbc,$query);

    $sql = "UPDATE case_table SET submit_to_court='1' WHERE case_id='$case_id'";
    $result_up=mysqli_query($dbc,$sql);
    if($result_query && $result_up)
    {
        echo "<script>alert('Case has been transfer to the court.')</script>";
        echo "<script>window.open('court_case.php')</script>";

    }

}



?>