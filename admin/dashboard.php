<?php
$page_title = "Dashboard";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="text text-center text-white bg-primary fw-bolder p-5"
                     style="font-size: 60px"><?= countdb('posts', $conn) ?></div>
                <div class="card-body">
                    <h5 class="card-title">Total Posts</h5>
                </div>
                <div class="card-footer">
                    <p>Full Detail -></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="text text-center text-white bg-secondary fw-bolder p-5"
                     style="font-size: 60px"><?= countdb('categories', $conn) ?></div>
                <div class="card-body">
                    <h5 class="card-title">Total Categories</h5>
                </div>
                <div class="card-footer">
                    <p>Full Detail -></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="text text-center text-white bg-info fw-bolder p-5"
                     style="font-size: 60px"><?= countdb('users', $conn) ?></div>
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                </div>
                <div class="card-footer">
                    <p>Full Detail -></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="text text-center text-white bg-warning fw-bolder p-5"
                     style="font-size: 60px"><?= countdb('pages', $conn) ?></div>
                <div class="card-body">
                    <h5 class="card-title">Total Pages</h5>
                </div>
                <div class="card-footer">
                    <p>Full Detail -></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="text text-center text-white bg-danger fw-bolder p-5"
                     style="font-size: 60px"><?= countdb('usercontact', $conn) ?></div>
                <div class="card-body">
                    <h5 class="card-title">Total Contact Form Response</h5>
                </div>
                <div class="card-footer">
                    <p>Full Detail -></p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include 'include/footer.php';
?>
