<?php
$page_title = "Edit Categories";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$id = $_GET['id'];
$sql = "select * from categories where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cat_oldimg = $row['image'];
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold mb-3"><?= $page_title ?></h1>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Edit Category</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                    <input type="text" id="category_name" name="category_name" value="<?= $row['name'] ?>" class="
                           form-control" required/>
                    <label class="form-label" for="category_name">Name <span class="text-danger">*</span></label>
                </div>
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="about_category" id="about_category" rows="5"
                              required><?= $row['description'] ?></textarea>
                    <label class="form-label" for="about_category">Description <span
                                class="text-danger">*</span></label>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="category_image">Image</label>
                    <p class="mb-2 text-center"><img width="250px" src="../assets/img/<?= $row['image'] ?>"
                                                     alt="<?= $row['name'] ?>"></p>
                    <input type="file" name="category_image" class="form-control" id="category_image"/>
                </div>
                <input type="submit" class="btn btn-primary" value="Update" name="update_category">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
if (isset($_POST['update_category'])) {

    $cat_name = $conn->real_escape_string($_POST['category_name']);
    $cat_description = $conn->real_escape_string($_POST['about_category']);
    if ($_FILES['category_image']['name'] == '') {
        $sql = "UPDATE categories SET name='$cat_name', description='$cat_description', image = '$cat_oldimg' WHERE id = $id";
        if ($conn->query($sql)) {
            header('location: ../admin/categories.php');
        }
    } else {
        $file = $_FILES['category_image']['name'];
        $file_temp = $_FILES['category_image']['tmp_name'];
        $file_type = $_FILES['category_image']['type'];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $filenewname = rand(10000, 99999) . time() . "." . $ext;
        $path = "../assets/img/";
        $sql = "UPDATE categories SET name='$cat_name', description='$cat_description', image = '$filenewname' WHERE id = $id";
        if ($conn->query($sql)) {
            move_uploaded_file($file_temp, "$path" . $filenewname);
            header('location: ../admin/categories.php');
        }
    }

    if ($conn->query($sql)) {
        move_uploaded_file($file_temp, "$path" . $filenewname);
        header('location: ../admin/categories.php');
    }
}
include './include/footer.php';
?>
