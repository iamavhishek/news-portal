<?php
$page_title = "Posts";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container my-4">
    <a href="add_post.php" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Add Post</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Published?</th>
                <th scope="col">Published On</th>
                <th scope="col">Updated On</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT id,title,postby,category,content,image,published,DATE(created_on) as createdon,DATE(published_on) as publishedon FROM posts";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row['title'] ?></td>
                        <td><?= certain_word($row['content'], 20) ?></td>
                        <td><?= $row['category'] ?></td>
                        <td><?= $row['postby'] ?></td>
                        <td><?= $row['published'] ?></td>
                        <td><?= $row['createdon'] ?></td>
                        <td><?= $row['publishedon'] ?></td>
                        <td>
                            <a target="_blank" href="../post.php?title=<?= $row['title'] ?>" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-warning" href="edit_post.php?id=<?= $row['id'] ?>"><i
                                        class="fa-solid fa-pen"></i></a>
                            <a class="btn btn-danger" href="delete.php?from=post&id=<?= $row['id'] ?>"><i
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

<?php
include './include/footer.php';
?>
