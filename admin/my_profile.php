<?php

$page_title = "My Profile";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$usrname = $_SESSION['username'];
$sql = "select * from users where username='$usrname'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_oldimg = $row['image'];
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold mb-3"><?= $page_title ?></h1>
</div>

<div class="container my-4">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="user-img text-center mb-4">
                <img src="../assets/img/<?= $row['image'] ?>" class="rounded-circle" width="250px" height="250px"
                    alt="User Profile Image" />
            </div>

            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="form-label" for="user_img">Upload your image</label>
                    <input type="file" class="form-control" name="user_img" id="user_img" />
                </div>
                <div class="row mb-4 g-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="fname" value="<?= $row['firstname'] ?>" name="fname"
                                class="form-control" />
                            <label class="form-label" for="fname">First name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="mname" value="<?= $row['middlename'] ?>" name="mname"
                                class="form-control" />
                            <label class="form-label" for="mname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="lname" value="<?= $row['lastname'] ?>" name="lname"
                                class="form-control" />
                            <label class="form-label" for="lname">Last name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="email" id="email" value="<?= $row['email'] ?>" name="email"
                                class="form-control" />
                            <label class="form-label" for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="number" id="phone" value="<?= $row['phone'] ?>" name="phone"
                                class="form-control" />
                            <label class="form-label" for="phone">Phone No.</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="username" value="<?= $row['username'] ?>" name="username"
                        class="form-control" disabled />
                    <label class="form-label" for="username">Username</label>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="gender">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="Male" <?php if ($row['gender'] === 'Male') {
                                                    echo 'selected';
                                                } ?>>Male
                        </option>
                        <option value="Female" <?php if ($row['gender'] === 'Female') {
                                                    echo 'selected';
                                                } ?>>Female
                        </option>
                        <option value="Other" <?php if ($row['gender'] === 'Other') {
                                                    echo 'selected';
                                                } ?>>Other
                        </option>
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <textarea class="form-control" id="userdesc" name="userdesc"
                        rows="4"><?= $row['description'] ?></textarea>
                    <label class="form-label" for="userdesc">Something about you</label>
                </div>

                <h3 class="mb-4">Social Media Links</h3>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="facebookurl"><i class="fa-brands fa-facebook"></i></span>
                    <input type="text" class="form-control" name="facebookurl" value="<?= $row['facebookURL'] ?>"
                        placeholder="Facebook Profile">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="twitterurl"><i class="fa-brands fa-twitter"></i></span>
                    <input type="text" class="form-control" name="twitterurl" value="<?= $row['twitterURL'] ?>"
                        placeholder="Twitter Profile">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="instagramurl"><i class="fa-brands fa-instagram"></i></span>
                    <input type="text" class="form-control" name="instagramurl" value="<?= $row['instagramURL'] ?>"
                        placeholder="Instagram Profile">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="linkedinurl"><i class="fa-brands fa-linkedin"></i></span>
                    <input type="text" class="form-control" name="linkedinurl" value="<?= $row['linkedinURL'] ?>"
                        placeholder="Linkedin Profile">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="tiktokurl"><i class="fa-brands fa-tiktok"></i></span>
                    <input type="text" class="form-control" name="tiktokurl" value="<?= $row['tiktokURL'] ?>"
                        placeholder="Tiktok Profile">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="youtubeurl"><i class="fa-brands fa-youtube"></i></span>
                    <input type="text" class="form-control" name="youtubeurl" value="<?= $row['youtubeURL'] ?>"
                        placeholder="Youtube Channel">
                </div>

                <input type="submit" name="update_detail" value="Update Details" class="btn btn-primary">
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php

if (isset($_POST['update_detail'])) {
    $fname = $conn->real_escape_string($_POST['fname']);
    $mname = $conn->real_escape_string($_POST['mname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $userinfo = $conn->real_escape_string($_POST['userdesc']);
    $fburl = $conn->real_escape_string($_POST['facebookurl']);
    $twitterurl = $conn->real_escape_string($_POST['twitterurl']);
    $instaurl = $conn->real_escape_string($_POST['instagramurl']);
    $yturl = $conn->real_escape_string($_POST['youtubeurl']);
    $tiktokurl = $conn->real_escape_string($_POST['tiktokurl']);
    $linkedinurl = $conn->real_escape_string($_POST['linkedinurl']);

    if ($_FILES['user_img']['name'] == '') {
        $sql = "update users set firstname='$fname', middlename='$mname', lastname='$lname', email='$email',
                 phone='$phone',gender='$gender',description='$userinfo',image='$user_oldimg',facebookURL='$fburl',
                 twitterURL='$twitterurl',instagramURL='$instaurl',tiktokURL='$tiktokurl',linkedinURL='$linkedinurl',
                 youtubeURL='$yturl' where username='$usrname'";
        if ($conn->query($sql)) {
            header('location: ../admin/my_profile.php');
        }
    } else {
        $file = $_FILES['user_img']['name'];
        $file_temp = $_FILES['user_img']['tmp_name'];
        $file_type = $_FILES['user_img']['type'];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $filenewname = rand(10000, 99999) . time() . "." . $ext;
        $path = "../assets/img/";
        $sql = "update users set firstname='$fname', middlename='$mname', lastname='$lname', email='$email',
                 phone='$phone',gender='$gender',description='$userinfo',image='$filenewname' where username='$usrname'";
        if ($conn->query($sql)) {
            move_uploaded_file($file_temp, "$path" . $filenewname);
            header('location: ../admin/my_profile.php');
        }
    }
}

include './include/footer.php';
?>