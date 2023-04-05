<?php
$page_title = "Search";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
$query = $_GET['s'];
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
    <p>Search result for: <?= $query ?></p>
</div>
<?php
$sql = "SELECT * FROM posts where title like '%$query%'";
$result = $conn->query($sql);
?>
<div class="container my-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col">
            <div class="card h-100">
                <a href="post.php?title=<?= $row['title'] ?>"><img src="assets/img/<?= $row['image'] ?>"
                        class="card-img-top" alt="Hollywood Sign on The Hill" /></a>
                <div class="card-body">
                    <a class="text-dark" href="post.php?title=<?= $row['title'] ?>">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                    </a>
                    <p class="card-text">
                        <?= certain_word($row['content'], 30) ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<div class='alert alert-info' role='alert'>
  Sorry, No Results were Found
</div>";
        }
        ?>
    </div>
</div>

<?php
include './include/footer.php';
?>