<?php
$page_title = "Home";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
$sql = "SELECT id,title,postby,category,content,image,published,DATE(created_on) as createdon,DATE(published_on) as publishedon FROM posts where published='Yes' order by published_on desc";
$result = $conn->query($sql);
?>

<div class="container my-5">
    <h1 class="mb-4 text-black fw-bolder">Recent News</h1>
    <div class="row row-cols-1 row-cols-lg-3 g-4">

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col">
            <div class="card h-100">
                <a href="post.php?id=<?= $row['id'] ?>&title=<?= $conn->real_escape_string($row['title']) ?>">
                    <img src="./assets/img/<?= $row['image'] ?>" class="card-img-top" alt="Skyscrapers" /></a>
                <div class="card-header">
                    Category: <a href="categories_view.php?cat_name=<?= $row['category'] ?>"><?= $row['category'] ?></a>
                    ||
                    Reporter: <a href="editor.php?editorid=<?= $row['postby'] ?>"><?= $row['postby'] ?></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a
                            href="post.php?id=<?= $row['id'] ?>&title=<?= $conn->real_escape_string($row['title']) ?>"
                            class="text-black fw-bold"><?= $row['title'] ?></a></h5>
                    <p class="card-text">
                        <?= certain_word($row['content'], 35) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated: <?= $row['publishedon'] ?></small>
                </div>
            </div>
        </div>
        <?php
            }
        } ?>
    </div>
</div>

<?php
include './include/footer.php';
?>