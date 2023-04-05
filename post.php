<?php
include './include/config.php';
$title = $_GET['title'];
$sql = "SELECT id,title,postby,category,content,image,published,DATE(created_on) as createdon,DATE(published_on) as publishedon FROM posts where title='$title'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$page_title = $row['title'];

include './include/functions.php';
include './include/head.php';
include './include/navbar.php';

?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
    <div class="details">
        <?php
        if ($row['createdon'] === $row['publishedon']) {
            echo "Published On: " . $row['createdon'];
        } else {
            echo "Last Updated On: " . $row['publishedon'];
        }
        echo " || Author: " . "<a href='editor.php?editorid=" . $row['postby'] . "'>" . $row['postby'] . "</a>";
        ?>

    </div>
</div>

<div class="container my-5">

    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="feature_img">
                <img width="100%" src="assets/img/<?= $row['image'] ?>" alt="">
            </div>
            <p><?= $row['content'] ?></p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div class="h4">Recently Added</div>
            <?php
            $count = 0;
            $sql = "SELECT * FROM posts order by created_on desc";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($count < 3) {
                        $count++;
            ?>
            <div class="card mb-3">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="assets/img/<?= $row['image'] ?>" class="img-fluid" />
                    <a href="post.php?title=<?= $conn->real_escape_string($row['title']) ?>">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>

                </div>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>

</div>

<?php
include './include/footer.php';
?>