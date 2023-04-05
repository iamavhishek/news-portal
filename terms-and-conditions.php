<?php
$page_title = "Terms and Conditions";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
$sql = "select content,published,date(created_on) as publishedon,date(published_on) as updatedon from pages where id=2";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row['published'] === 'No') {
    header('location: index.php');
}
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
    <div class="details">
        Published On: <?= $row['publishedon'] ?> | Updated
        On: <?= $row['updatedon'] ?>
    </div>
</div>

<div class="container pb-5">

    <p><?= $row['content'] ?></p>

</div>

<?php
include './include/footer.php';
?>