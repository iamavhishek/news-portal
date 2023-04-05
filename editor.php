<?php
include './include/config.php';
$username = $_GET['editorid'];
$sql = "SELECT * from users where username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $page_title = "Editor: " . $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'];

    include './include/functions.php';
    include './include/head.php';
    include './include/navbar.php';
?>

<section style="background-color: #eee;">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="assets/img/<?= $row['image']; ?>" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 150px;">
                        <h5 class="my-3"><?= $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname']; ?>
                        </h5>
                        <p class="text-muted mb-1"><?= ucfirst($row['positionn']) ?></p>
                        <p><?= $row['description'] ?></p>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-tiktok fa-lg" style="color: #333333;"></i>
                                <p class="mb-0"><?= $row['tiktokURL'] ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0"><?= $row['twitterURL'] ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0"><?= $row['instagramURL'] ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0"><?= $row['facebookURL'] ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa-brands fa-linkedin fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0"><?= $row['linkedinURL'] ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa-brands fa-youtube fa-lg" style="color: #FF0000;"></i>
                                <p class="mb-0"><?= $row['youtubeURL'] ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $row['firstname'] . " " . $row['middlename'] . " " .
                                                                    $row['lastname']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Post</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= ucfirst($row['positionn']) ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $row['email'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $row['phone'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $row['address'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?PHP
                    $sql2 = "SELECT * FROM posts where postby='$username' ORDER BY published_on DESC limit 10";
                    $result2 = $conn->query($sql2);
                    ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <h4 class="mb-4">Some of my Published News</span></h4>
                                <ul>
                                    <?php
                                        if ($result2->num_rows > 0) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                $id = $row2['id'];
                                                $title = $conn->real_escape_string($row2['title']);
                                                echo "<li><a href='post.php?id=$id&title=$title'>" . $row2['title'] . "</a></li>";
                                                if ($count > 5) {
                                                    break;
                                                }
                                            }
                                        ?>
                                    <?php
                                        }
                                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<?php
    include './include/footer.php';
} else {
    header("location:index.php");
}
?>