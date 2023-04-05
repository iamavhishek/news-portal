<?php
$page_title = "Pages";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$sql = "select * from pages";
$result = $conn->query($sql);
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container py-5">
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Published?</th>
                    <th scope="col">Published On</th>
                    <th scope="col">Updated On</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <tr>
                            <td><?= $row['title'] ?></td>
                            <td><?= certain_word(htmlspecialchars(strip_tags($row['content'])), 20) ?></td>
                            <td><?= $row['published'] ?></td>
                            <td><?= $row['created_on'] ?></td>
                            <td><?= $row['published_on'] ?></td>
                            <td>
                                <a href="edit_page.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i
                                            class="fa fa-pen"></i></a>
                            </td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "
                    <div class='alert alert-danger' role='alert'>
  <i class='fa-solid fa-triangle-exclamation'></i> No Pages Found
</div>
                    ";
                }
                ?>
                <tr></tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>
