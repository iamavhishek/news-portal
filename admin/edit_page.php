<?php
$page_title = "Edit Page";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>
<div class="container my-4">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="form-outline mb-4">
                    <input type="text" name="pagetitle" value="<?= $row['title'] ?>" id="pagetitle"
                           class="form-control"/>
                    <label class="form-label" for="pagetitle">Post Title</label>
                </div>
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="pagecontent" id="pagecontent"
                              rows="15"><?= $row['content'] ?>
                    </textarea>
                    <label class="form-label" for="pagecontent">Content</label>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Publish</h3>
                <div class="mb-4">
                    <label class="form-label" for="pubststis">Publish?</label>
                    <select name="pubststis" id="pubststis" class="form-select">
                        <option <?php if ($row['published'] === 'Yes') {
                            echo 'selected';
                        } ?> value="Yes">Yes
                        </option>
                        <option <?php if ($row['published'] === 'No') {
                            echo 'selected';
                        } ?> value="No">No
                        </option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="featureimage">Feature Image</label>
                    <input type="file" name="featureimage" class="form-control" id="featureimage"/>
                </div>
                <input type="submit" class="btn btn-primary" name="update_post" value="Update Post">
            </div>
            <div class="col-md-1"></div>
        </div>
    </form>
</div>

<?php

if (isset($_POST['update_post'])) {
    $pagetitle = $conn->real_escape_string($_POST['pagetitle']);
    $pagecontent = $conn->real_escape_string($_POST['pagecontent']);
    $pagepubstatus = $conn->real_escape_string($_POST['pubststis']);
    $pagefeatureimg = $conn->real_escape_string($_POST['featureimage']);

    $sql = "update pages set title='$pagetitle', content='$pagecontent',published='$pagepubstatus' where id=$id";
    if ($conn->query($sql)) {
        header('location: pages.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

include './include/footer.php';
?>

