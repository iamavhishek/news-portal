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
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="mt-4">All Categories</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
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
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<?php
include './include/footer.php';
?>
