<?php

include('header.php');
include('dbconnect.php');

if (isset($_POST['add_user'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $staffid = $_POST['un'];
    $password = $_POST['pwd'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $nid_no = $_POST['nid_no'];
    $phone_no = $_POST['ph'];



    // $query="INSERT INTO userlogin (staffid,status,password,surname,othernames,phone_number,confirmation)"
    // VALUES();
    $query = "INSERT INTO `userlogin`(`id`, `staffid`, `status`, `password`, `surname`, `othernames`, `confirmation`,`email`,`phone_no`,`nid_no`) VALUES ('0','$staffid','$status',SHA1('$password'),'$name','$surname','unapprove','$email','$phone_no','$nid_no')";
    $insert_query = mysqli_query($dbcon, $query);

    if (!$insert_query) {
        die("Query Failed!!" . mysqli_error($dbcon));
    } else {
        echo "<script>alert('Registration Successful.Wait for admin approval.')</script>";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Register Staff</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="mb-1" for="name">Name</label>
                            <input name="name" class="form-control py-4" id="name" type="text" value="" />
                        </div>

                        <div class="form-group">
                            <label class="mb-1" for="surname">Surname</label>
                            <input name="surname" class="form-control py-4" id="surname" type="text" value="" />
                        </div>


                        <div class="form-group">
                            <label class="mb-1" for="username">Govt. Serial No</label>
                            <input name="un" class="form-control py-4" id="username" type="text" value="" />
                        </div>

                        <div class="form-group">
                            <label class="mb-1" for="password">Password</label>
                            <input name="pwd" class="form-control py-4" id="password" value="" type="password" />
                        </div>

                        <div class="form-group">
                            <label class="mb-1" for="email">Email:</label>

                            <input type="email" class="form-control py-4" name="email" id="email" placeholder="Enter Email">

                        </div>



                        <div class="form-group">
                            <label class="mb-1" for="status">User Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Options</option>
                                <option value="admin">Admin</option>
                                <option value="CID">CID</option>
                                <option value="NCO">NCO</option>
                                <option value="court">Court</option>


                            </select>
                        </div>

                        <div class="form-group">
                            <label class="mb-1" for="ph">Phone No:</label>
                            
                                <input type="text" class="form-control py-4" name="ph" id="ph" placeholder="Enter Phone No">
                            
                        </div>



                        <div class="form-group">
                            <label class="mb-1" for="nid_no">NID No</label>
                            <input name="nid_no" class="form-control py-4" id="nid_no" type="number" value="" />
                        </div>



                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                            <input type="submit" value="Add User " name="add_user" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>