<?php
$page_title = "Contact";
include './include/config.php';
include './include/functions.php';
include './include/head.php';
include './include/navbar.php';
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold"><?= $page_title ?></h1>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-7">
            <?php
            if (isset($_POST['submit_contact'])) {
                $fname = $conn->real_escape_string(htmlspecialchars($_POST['contact_fname']));
                $mname = $conn->real_escape_string(htmlspecialchars($_POST['contact_mname']));
                $email = $conn->real_escape_string(htmlspecialchars($_POST['contact_email']));
                $lname = $conn->real_escape_string(htmlspecialchars($_POST['contact_lname']));
                $phone = $conn->real_escape_string(htmlspecialchars($_POST['contact_phone']));
                $message = $conn->real_escape_string(htmlspecialchars($_POST['contact_message']));
                $sql = "insert into usercontact(fname, mname, lname, email, phone_no, message) 
                    values('$fname','$mname','$lname','$email','$phone','$message')";

                if ($conn->query($sql)) { ?>
            <div class="alert alert-success" role="alert">
                🎉 Message was Successfully sent we will contact you as soon as possible
            </div>
            <?php
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
            <h2 class="mb-3">Send Us a message</h2>
            <form method="post" action="">
                <!-- Name input -->
                <div class="row mb-4 g-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="contact_fname" name="contact_fname" class="form-control" required />
                            <label class="form-label" for="contact_fname">First name <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="contact_mname" name="contact_mname" class="form-control" />
                            <label class="form-label" for="contact_mname">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <input type="text" id="contact_lname" name="contact_lname" class="form-control" required />
                            <label class="form-label" for="contact_lname">Last name <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>

                <!-- Email/Phone input -->
                <div class="row mb-4 g-4">
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" required />
                            <label class="form-label" for="contact_email">Email <span
                                    class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline">
                            <input type="number" name="contact_phone" id="contact_phone" class="form-control"
                                required />
                            <label class="form-label" for="contact_phone">Phone No.</label>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <textarea class="form-control" id="contact_message" name="contact_message" rows="6"
                        required></textarea>
                    <label class="form-label" for="contact_message">Message <span class="text-danger">*</span></label>
                </div>

                <button type="submit" name="submit_contact" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
        <div class="col-md-1"></div>
        <?php
        $sql = "Select * from settings";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <div class="col-md-4">
            <h2 class="mb-3">Contact Details</h2>
            <p>
                <i class="fa-solid fa-envelope"></i> <?php
                                                        $emails = explode(";", $row['mail_address']);
                                                        foreach ($emails as $email) {
                                                            echo "<a href='mailto:$email'>$email</a>, ";
                                                        }
                                                        ?>
            </p>
            <p>
                <i class="fa-solid fa-phone"></i> <?php
                                                    $phones = explode(";", $row['comp_phone']);
                                                    foreach ($phones as $phone) {
                                                        echo "<a href='tel:$phone'>$phone</a>, ";
                                                    }
                                                    ?>
            </p>
            <p>
                <i class="fa-solid fa-location-arrow"></i> <?= $row['comp_address'] ?>

            </p>

        </div>
    </div>
</div>

<?php
include './include/footer.php';
?>