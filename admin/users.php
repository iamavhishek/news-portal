<?php
$page_title = "Users";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container my-3">
    <a href="add_user.php" class="btn btn-primary">
        <i class="fa fa-plus"></i> Add User
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Position</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row['firstname'] ?></td>
                        <td><?= $row['middlename'] ?></td>
                        <td><?= $row['lastname'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['positionn'] ?></td>
                        <td>
                            <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i
                                        class="fa fa-pen"></i></a>
                            <a href="delete.php?from=user&id=<?= $row['id'] ?>" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
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
include 'include/footer.php';
?>
