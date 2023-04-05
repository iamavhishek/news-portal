<?php
$page_title = "Add Post";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>
<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>
<div class="container my-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="form-outline mb-4">
                    <input type="text" name="posttitle" id="posttitle" class="form-control"/>
                    <label class="form-label" for="posttitle">Post Title</label>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="postcontent">Content</label>
                    <textarea class="form-control" name="postcontent" id="postcontent"
                              style="height: 100px;"></textarea>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Publish</h3>
                <div class="mb-4">
                    <label class="form-label" for="pubststis">Publish?</label>
                    <select name="pubststis" id="pubststis" class="form-select">
                        <option selected value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="postcategory">Category</label>
                    <select name="postcategory" id="postcategory" class="form-select">
                        <?php
                        $sql = "SELECT * FROM categories";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                                <?php
                            }
                        } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="featureimage">Feature Image</label>
                    <input type="file" name="featureimage" class="form-control" id="featureimage"/>
                </div>
                <input type="submit" class="btn btn-primary" name="publish_post" value="Publish Post">
            </div>
            <div class="col-md-1"></div>
        </div>
    </form>
</div>

<?php

if (isset($_POST['publish_post'])) {
    $posttitle = $conn->real_escape_string($_POST['posttitle']);
    $postcontent = $conn->real_escape_string($_POST['postcontent']);
    $postpubstatus = $conn->real_escape_string($_POST['pubststis']);
    $postcategory = $conn->real_escape_string($_POST['postcategory']);

    //IMAGE
    $file = $_FILES['featureimage']['name'];
    $file_temp = $_FILES['featureimage']['tmp_name'];
    $file_type = $_FILES['featureimage']['type'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $filenewname = rand(10000, 99999) . time() . "." . $ext;
    $path = "../assets/img/";

    $sql = "INSERT INTO posts (title, content, category,postby,published,image)
VALUES ('$posttitle', '$postcontent', '$postcategory','$usrname','$postpubstatus','$filenewname')";
    if ($conn->query($sql)) {
        move_uploaded_file($file_temp, "$path" . $filenewname);
        header('location:../admin/posts.php');
    }
}

include './include/footer.php';
?>

