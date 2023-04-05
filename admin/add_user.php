<?php
$page_title = "Add User";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>
<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>
<div class="container my-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="" method="post">
                <div class="row mb-4 g-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" name="fname" id="fname" class="form-control" />
                            <label class="form-label" for="fname">First name <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="mname" name="mname" class="form-control" />
                            <label class="form-label" for="mname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" name="lname" id="lname" class="form-control" />
                            <label class="form-label" for="lname">Last name <span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="email" id="umail" name="umail" class="form-control" />
                            <label class="form-label" for="umail">Email address <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="number" id="uphone" name="uphone" class="form-control" />
                            <label class="form-label" for="uphone">Phone No.</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="userpwd" name="userpwd" class="form-control" />
                    <label class="form-label" for="userpwd">Password</label>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="gender">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="siteposition">Position</label>
                    <select class="form-select" name="siteposition" id="siteposition">
                        <option value="admin">Admin</option>
                        <option value="editor" selected>Reporter</option>
                    </select>
                </div>

                <button type="submit" name="add_user" class="btn btn-primary btn-block mb-4">Add User</button>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php

if (isset($_POST['add_user'])) {
    $fname = $conn->real_escape_string($_POST['fname']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['umail']);
    $phoneno = $conn->real_escape_string($_POST['uphone']);
    $passwords = md5($conn->real_escape_string($_POST['userpwd']));
    $gender = $conn->real_escape_string($_POST['gender']);
    $position = $conn->real_escape_string($_POST['siteposition']);

    $sql = "INSERT INTO users (firstname, middlename,lastname, email,passwordd,phone,gender,username,positionn)
VALUES ('$fname', '$mname','$lname','$email','$passwords', '$phoneno','$gender','$username','$position')";
    if ($conn->query($sql) === TRUE) {
        header('location:users.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include './include/footer.php';
?>