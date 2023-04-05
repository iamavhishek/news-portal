<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mt-2 mt-lg-0" href="dashboard.php">
            <img src="/assets/img/logo_h.png" height="30" alt="E-Samachar Logo" loading="lazy" /> Admin
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Dashboard') {
                                            echo 'active';
                                        } ?>" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Posts') {
                                            echo 'active';
                                        } ?>" href="posts.php">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Categories') {
                                            echo 'active';
                                        } ?>" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Pages') {
                                            echo 'active';
                                        } ?>" href="pages.php">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Contact') {
                                            echo 'active';
                                        } ?>" href="contact.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_title === 'Users') {
                                            echo 'active';
                                        } ?>" href="users.php">Users</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <?php
                        $sql = "SELECT username, image FROM users";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        <img src="../../assets/img/<?= $row['image'] ?>"
                            class="rounded-circle border border-dark border-3" height="40"
                            alt="<?= $row['username'] ?> Profile Picture" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="my_profile.php">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="settings.php">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../../logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>