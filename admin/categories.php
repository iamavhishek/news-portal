<?php
$page_title = "Categories";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold mb-3"><?= $page_title ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <h3>Add Category</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                    <input type="text" id="category_name" name="category_name" class="form-control" required/>
                    <label class="form-label" for="category_name">Name <span class="text-danger">*</span></label>
                </div>
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="about_category" id="about_category" rows="4"
                              required></textarea>
                    <label class="form-label" for="about_category">Description <span
                                class="text-danger">*</span></label>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="category_image">Image</label>
                    <input type="file" name="category_image" class="form-control" id="category_image"/>
                </div>
                <input type="submit" class="btn btn-primary" value="Add" name="add_category">
            </form>
        </div>
        <div class="col-md-8">
            <h3 class="mt-4">All Categories</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM categories";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td><img src="../assets/img/<?= $row['image'] ?>" width="100%"
                                         alt="<?= $row['name'] ?>"></td>
                                <td>
                                    <a href="edit_category.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i
                                                class="fa-solid fa-pen"></i></a>
                                    <a href="delete.php?from=category&id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['add_category'])) {

    $cat_name = $conn->real_escape_string($_POST['category_name']);
    $cat_description = $conn->real_escape_string($_POST['about_category']);

    //IMAGE
    $file = $_FILES['category_image']['name'];
    $file_temp = $_FILES['category_image']['tmp_name'];
    $file_type = $_FILES['category_image']['type'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $filenewname = rand(10000, 99999) . time() . "." . $ext;
    $path = "../assets/img/";

    $sql = "insert into categories values(0,'$cat_name','$cat_description','$filenewname');";
    if ($conn->query($sql)) {
        move_uploaded_file($file_temp, "$path" . $filenewname);
        header('location: ../admin/categories.php');
    }
}
include './include/footer.php';
?>
