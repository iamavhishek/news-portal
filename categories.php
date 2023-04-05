<?php
$page_title = "Categories";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
$sql = "select * from categories";
$result = $conn->query($sql);
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container my-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>

        <div class="col">
            <div class="card h-100">
                <a href="categories_view.php?cat_name=<?= $row['name'] ?>">
                    <img src="/assets/img/<?= $row['image'] ?>" class="card-img-top" alt="<?= $row['name'] ?> Image" />
                </a>
                <div class=" card-body">
                    <h5 class="card-title"><a class="text-black fw-bold"
                            href="categories_view.php?cat_name=<?= $row['name'] ?>"><?= $row['name'] ?></a>
                    </h5>
                    <p class="card-text">
                        <?= $row['description'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php
include './include/footer.php';
?>