<?php
$page_title = "Contact";
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
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Submitted On</th>
                <th scope="col">Message</th>
                <th scope="col">Include</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM usercontact";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['fname'] ?></td>
                        <td><?= $row['mname'] ?></td>
                        <td><?= $row['lname'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone_no'] ?></td>
                        <td><?= $row['submitted_on'] ?></td>
                        <td><?= certain_word($row['message'], 20) ?></td>
                        <td>
                            <a class="btn btn-warning" href="view_message.php?id=<?= $row['id'] ?>"><i
                                        class="fa-solid fa-eye"></i></a>
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
