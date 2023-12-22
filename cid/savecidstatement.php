

<?php
require_once('database/Database.php');
$db = new Database(); 
include('header.php');
include('menubar.php');

include('dbconnect.php');
if(session_status() == PHP_SESSION_NONE)
{
  include('session.php');
}



//array created to handle the error msgs
$errors = array();

  //Variables to hold the form data
 $statement='';  $status=''; 
 echo $complete_date=date('y/m/d');


              if(empty($_POST['statement'])){
               array_push($errors, "The Statefield field cannot be empty, ensure is entered");
              }
              else{ 
              $statement = $_POST['statement'];
            }

        if(empty($_POST['status'])){
               array_push($errors, "You need to select the status field");
              }
              else{ 
              $status= $_POST['status'];
            }
             if(empty($_POST['caseid'])){
               array_push($errors, "Enter the case id");
              }
              else{ 
              $caseid= $_POST['caseid'];
            }

 

 

                if($errors){

                     // $output = array('error' => true, $errors);
                       foreach($errors as $value){

                    echo '<span>'. $value.' </span> </br>'; 


                    }

                    }

                 else{  
                  require_once('mysql.php');
                    $qq = mysqli_query($dbc,"INSERT INTO `archrive`(`case_id`, `cid`, `report`) VALUES ('$caseid','$staffid','$statement')");
                    $sql = "UPDATE case_table SET statement=?,status=?,complete_date=? WHERE case_id=?";
                    $q = $conn->prepare($sql);
                    $success= $q -> execute(array($statement,$status,$complete_date, $caseid));
                    if($success && $qq)
                    {
                        
                        echo "<script>alert('The Statement saved successfully')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                    }
                    else{
                        echo "<script>alert('Try Again..!!!')</script>";
                        header( 'Location: cidcaseview.php?' );
                    }
               }



      

        $db->Disconnect();
        ?>
