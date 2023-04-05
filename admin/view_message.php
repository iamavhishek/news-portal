<?php
$page_title = "View Messages";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$id = $_GET['id'];
$sql = "select * from usercontact where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold mb-3"><?= $page_title ?></h1>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>
                Full Name: <?= $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] ?><br>
                Email: <?= $row['email'] ?><br>
                Phone No.: <?= $row['phone_no'] ?><br>
                Message: <?= $row['message'] ?>
            </h3>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
include './include/footer.php';
?>
