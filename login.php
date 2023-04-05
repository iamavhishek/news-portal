<?php
$page_title = "Login";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] === "admin") {
        header('location: /admin/dashboard.php');
    } elseif ($_SESSION['loggedin'] === "editor") {
        header('location: /editor/dashboard.php');
    }
}
?>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="container text-center mb-3">
                <img height="75px" src="/assets/img/logo_h.png" alt="">
            </div>
            <?php
            if (isset($_POST['login'])) {
                $userid = $conn->real_escape_string($_POST['userid']);
                $userpass = md5($conn->real_escape_string($_POST['userpass']));
                $sql = "SELECT * from users where email='$userid' OR username='$userid' and passwordd='$userpass'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if ($row['positionn'] === 'admin') {
                        $_SESSION['loggedin'] = 'admin';
                        $_SESSION['username'] = $row['username'];
                        header('location: /admin/dashboard.php');
                    } elseif ($row['positionn'] === 'editor') {
                        $_SESSION['loggedin'] = 'editor';
                        $_SESSION['username'] = $row['username'];
                        header('location: /editor/dashboard.php');
                    }
                } else {
            ?>

            <div class="container alert alert-warning border-5 border-warning border-start" role="alert">
                <i class="fa-solid fa-triangle-exclamation"></i> Incorrect Username/Email or Password
            </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mb-3 border border-2 rounded-5 p-5">
            <h2 class="h2 fw-bolder">Login</h2>
            <form method="post" action="">
                <div class="form-outline mb-4">
                    <input type="text" id="userid" name="userid" class="form-control" />
                    <label class="form-label" for="userid">Email / Username</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="userpass" name="userpass" class="form-control" />
                    <label class="form-label" for="userpass">Password</label>
                </div>

                <button type="submit" name="login" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

<?php
include './include/footer.php';
?>