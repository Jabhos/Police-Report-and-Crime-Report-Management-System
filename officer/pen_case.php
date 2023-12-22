<?php 

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "UPDATE prev_complain SET status='1' WHERE id='$id'";
        require_once("mysql.php");
        if (mysqli_query($dbc, $sql)) {
            echo "<script> alert('Case ID will notify to the user soon.') </script>";
            echo "<script>window.open('pen_caseview.php','_self')</script>";
        }
    }

    if(isset($_GET['rid'])) {
        $id = $_GET['rid'];
        $sql = "UPDATE prev_complain SET status='-1' WHERE id='$id'";
        require_once("mysql.php");
        if (mysqli_query($dbc, $sql)) {
            echo "<script> alert('Case Ignored') </script>";
            echo "<script>window.open('pen_caseview.php','_self')</script>";
        }
    }
                

?> 