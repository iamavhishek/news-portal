<?php
$page_title = "Register";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 my-5">
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 g-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" name="fname" id="fname" class="form-control" />
                            <label class="form-label" for="fname">First name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="mname" name="mname" class="form-control" />
                            <label class="form-label" for="mname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" name="lname" id="lname" class="form-control" />
                            <label class="form-label" for="lname">Last name</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="email" id="umail" name="umail" class="form-control" />
                            <label class="form-label" for="umail">Email address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="number" id="uphone" name="uphone" class="form-control" />
                            <label class="form-label" for="uphone">Phone No.</label>
                        </div>
                    </div>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php
include './include/footer.php';
?>