<?php 

    if(isset($_GET['id'])) {
        $idd = explode(",", $_GET["id"]);
        $id = $idd[0];
        if($idd[1] == -1){
            $sql = "UPDATE sos SET status='-1' WHERE id='$id'";
            require_once("mysql.php");
            if (mysqli_query($dbc, $sql)) {
                echo "<script> alert('SOS REJECTED.') </script>";
                echo "<script>window.open('view_sos.php','_self')</script>";
            }
        }
        else if($idd[1] == 1){
            $sql = "UPDATE sos SET status='1' WHERE id='$id'";
            require_once("mysql.php");
            if (mysqli_query($dbc, $sql)) {
                echo "<script> alert('SOS ACCEPTED.') </script>";
                echo "<script>window.open('view_sos.php','_self')</script>";
            }
        }
        else{
            echo "<script> alert('ERROR.!!! Try Again...') </script>";
            echo "<script>window.open('view_sos.php','_self')</script>";
        }
    }
                

?> 