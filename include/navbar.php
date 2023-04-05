<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><?= singleselect($conn, "site_title", "settings") ?></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup">
            <i class="border rounded py-1 px-2 bg-white text-dark fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link <?php if ($page_title === 'Home') {
                                        echo 'active';
                                    } ?>" href="index.php">Home</a>
                <a class="nav-link <?php if ($page_title === 'Categories') {
                                        echo 'active';
                                    } ?>" href="categories.php">Categories</a>
                <a class="nav-link <?php if ($page_title === 'Contact') {
                                        echo 'active';
                                    } ?>" href="contact.php">Contact</a>
                <a class="nav-link <?php if ($page_title === 'About') {
                                        echo 'active';
                                    } ?>" href="about.php">About</a>
            </div>
            <form method="get" action="../search.php" class="d-flex input-group w-auto">
                <input type="search" name="s" class="form-control" />
                <input type="submit" class="btn btn-primary" type="button" data-mdb-ripple-color="dark" name="search">
                </input>
            </form>
        </div>
    </div>
</nav>