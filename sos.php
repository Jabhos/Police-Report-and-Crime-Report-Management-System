<?php
include("mysql.php");
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
if(isset($_POST['sos'])){
    // $ip = getUserIpAddr();
    $lat = $_POST['lat'];
    $lan = $_POST['lan'];
    // $ip = mt_rand(192, 192) . "." . mt_rand(178, 182) . "." . mt_rand(0, 255) . "." . mt_rand(0, 10);
    $ip = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
    if(mysqli_query($dbc, "INSERT INTO `sos`(`latitude`, `longitude`, `user_ip`) VALUES ('$lat','$lan','$ip')")){
        echo "<script>alert('Nearby Police Will Come Soon')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
?>