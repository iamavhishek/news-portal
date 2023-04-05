<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
    <div class="container">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a target="_blank" href="<?= singleselect($conn, 'facebook_link', 'settings') ?>"
                    class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="<?= singleselect($conn, 'twitter_link', 'settings') ?>"
                    class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="<?= singleselect($conn, 'instagram_link', 'settings') ?>"
                    class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a target="_blank" href="<?= singleselect($conn, 'linkedin_link', 'settings') ?>"
                    class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="<?= singleselect($conn, 'github_link', 'settings') ?>" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i> <?= singleselect($conn, "site_title", "settings") ?>
                        </h6>
                        <p>
                            <?= singleselect($conn, "site_description", "settings") ?>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            USEFUL LINKS
                        </h6>
                        <p>
                            <a href="terms-and-conditions.php" class="text-reset">Terms and Conditions</a>
                        </p>
                        <p>
                            <a href="privacy-policy.php" class="text-reset">Privacy Policy</a>
                        </p>
                        <p>
                            <?php
                            if (isset($_SESSION['loggedin'])) {
                            ?>
                            <a href="admin/dashboard.php" class="text-reset">Admin Panel</a>
                            <?php
                            } else {
                            ?>
                            <a href="login.php" class="text-reset">Login</a>
                        </p>
                        <?php
                            }
                    ?>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Main Menu
                        </h6>
                        <p>
                            <a href="index.php" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="categories.php" class="text-reset">Categories</a>
                        </p>
                        <p>
                            <a href="search.php" class="text-reset">Search</a>
                        </p>
                        <p>
                            <a href="contact.php" class="text-reset">Contact</a>
                        </p>
                        <p>
                            <a href="about.php" class="text-reset">About</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
            </div>
    </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <div class="container">
            © <?= date('Y') ?> Copyright:
            <a class="text-reset fw-bold" href="#"><?= singleselect($conn, 'site_title', 'settings') ?></a>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="./assets/js/app.js"></script>
<script src="./assets/js/mdb.min.js"></script>
<script src="https://kit.fontawesome.com/049c39bc2a.js"></script>
</body>

</html>