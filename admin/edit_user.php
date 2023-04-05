<?php
$page_title = "Edit User";
$id = $_GET['id'];
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$sql = "SELECT * FROM users where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
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
                            <input type="text" name="fname" id="fname" value="<?= $row['firstname'] ?>"
                                class="form-control" />
                            <label class="form-label" for="fname">First name <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="mname" name="mname" value="<?= $row['middlename'] ?>"
                                class="form-control" />
                            <label class="form-label" for="mname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" name="lname" id="lname" value="<?= $row['lastname'] ?>"
                                class="form-control" />
                            <label class="form-label" for="lname">Last name <span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="email" id="umail" name="umail" value="<?= $row['email'] ?>"
                                class="form-control" />
                            <label class="form-label" for="umail">Email address <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="number" id="uphone" value="<?= $row['phone'] ?>" name="uphone"
                                class="form-control" />
                            <label class="form-label" for="uphone">Phone No.</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" disabled value="<?= $row['username'] ?>"
                        class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="userpwd" name="userpwd" class="form-control" />
                    <label class="form-label" for="userpwd">Password</label>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="gender">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option <?php if ($row['gender'] == 'Male') {
                                    echo "selected";
                                } ?> value="Male">Male</option>
                        <option <?php if ($row['gender'] == 'Female') {
                                    echo "selected";
                                } ?> value="Female">Female
                        </option>
                        <option <?php if ($row['gender'] == 'Other') {
                                    echo "selected";
                                } ?> value="Other">Other
                        </option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="siteposition">Position</label>
                    <select class="form-select" name="siteposition" id="siteposition">
                        <option <?php if ($row['positionn'] == 'admin') {
                                    echo "selected";
                                } ?> value="admin">Admin</option>
                        <option <?php if ($row['positionn'] == 'reporter') {
                                    echo "selected";
                                } ?> value="reporter">Reporter</option>
                    </select>
                </div>

                <button type="submit" name="update_user" class="btn btn-primary btn-block mb-4">Edit User</button>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php

if (isset($_POST['update_user'])) {
    $fname = $conn->real_escape_string($_POST['fname']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['umail']);
    $phoneno = $conn->real_escape_string($_POST['uphone']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $passwords = md5($conn->real_escape_string($_POST['userpwd']));
    if ($passwords === null) {
        $passwords = $row['passwordd'];
    }
    $gender = $conn->real_escape_string($_POST['gender']);
    $position = $conn->real_escape_string($_POST['siteposition']);

    $sql = "update users set firstname='$fname',middlename='$mname',lastname='$lname',passwordd='$passwords',email='$email',phone='$phoneno',positionn='$position',gender='$gender' where id='$id'";
    if ($conn->query($sql) === TRUE) {
        header('location:users.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

include './include/footer.php';
?>