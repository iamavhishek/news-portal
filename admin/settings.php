<?php
$page_title = "Settings";
include '../include/config.php';
include '../include/functions.php';
include 'include/head.php';
include 'include/navbar.php';
$fonts = ['Amita', 'Anek Devanagari', 'Baloo 2', 'Biryani', 'Eczar', 'Kalam', 'Karma', 'Khand', 'Khula', 'Mukta', 'Poppins', 'Rajdhani', 'Rozha One'];
$sql = "SELECT * from settings;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<div class="p-5 text-center bg-light">
    <h1 class="fw-bold mb-3"><?= $page_title ?></h1>
</div>

<div class="container">
    <form method="post" action="">
        <div class="row">
            <div class="col-lg-1"></div>

            <div class="col-lg-4 mt-5">
                <h3 class="mb-3">Site Settings</h3>
                <div class="form-outline mb-4">
                    <input type="text" id="sitename" value="<?= $row['site_title'] ?>" name="sitename"
                        class="form-control" />
                    <label class="form-label" for="sitename">Site Name</label>
                </div>
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="sitedescription" id="" cols="30"
                        rows="5"><?= $row['site_description'] ?></textarea>
                    <label class="form-label" for="sitedescription">Site Description</label>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="sitename">Font</label>
                    <select name="sitefont" class="form-select">
                        <?php
                        for ($i = 0; $i < count($fonts); $i++) {
                        ?>
                        <option <?php if (($row['font']) === $fonts[$i]) {
                                        echo 'selected';
                                    } ?> style="font-family: <?= $fonts[$i] ?>;" value="<?= $fonts[$i] ?>">
                            <?= $fonts[$i] ?>
                            (हेल्लो
                            वोर्ल्ड)
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

            </div>

            <div class="col-lg-4 mt-5">
                <h3 class="mb-4">Social Media Links</h3>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="facebookurl"><i class="fa-brands fa-facebook"></i></span>
                    <input type="text" class="form-control" name="facebookurl" value="<?= $row['facebook_link'] ?>"
                        placeholder="Facebook Profile/Page URL">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="twitterurl"><i class="fa-brands fa-twitter"></i></span>
                    <input type="text" class="form-control" name="twitterurl" value="<?= $row['twitter_link'] ?>"
                        placeholder="Twitter Profile URL">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="instagramurl"><i class="fa-brands fa-instagram"></i></span>
                    <input type="text" class="form-control" name="instagramurl" value="<?= $row['instagram_link'] ?>"
                        placeholder="Instagram Profile URL">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="linkedinurl"><i class="fa-brands fa-linkedin"></i></span>
                    <input type="text" class="form-control" name="linkedinurl" value="<?= $row['linkedin_link'] ?>"
                        placeholder="Linkedin Profile URL">
                </div>
                <div class="mb-4 input-group">
                    <span class="input-group-text" id="githuburl"><i class="fa-brands fa-github"></i></span>
                    <input type="text" class="form-control" name="githuburl" value="<?= $row['github_link'] ?>"
                        placeholder="Github Profile URL">
                </div>

                <h3>Contacts</h3>
                <p class="mb-4 text-muted">Use ; for seperating the multiple inputs</p>
                <div class="form-outline mb-4">
                    <input type="text" id="contact" name="contactno" value="<?= $row['comp_phone'] ?>" name="sitename"
                        class="form-control" />
                    <label class="form-label" for="contactno">Contact No.</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="address" name="address" value="<?= $row['comp_address'] ?>" name="sitename"
                        class="form-control" />
                    <label class="form-label" for="address">Address</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="address" name="sitemail" value="<?= $row['mail_address'] ?>" name="sitename"
                        class="form-control" />
                    <label class="form-label" for="address">Mail</label>
                </div>


            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-block btn-primary mb-4" value="Update" name="site_setting_update">
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>

<?php

if (isset($_POST['site_setting_update'])) {
    $sitename = $conn->real_escape_string($_POST['sitename']);
    $sitedescription = $conn->real_escape_string($_POST['sitedescription']);
    $sitefont = $conn->real_escape_string($_POST['sitefont']);
    $facebookurl = $conn->real_escape_string($_POST['facebookurl']);
    $twitterurl = $conn->real_escape_string($_POST['twitterurl']);
    $instagramurl = $conn->real_escape_string($_POST['instagramurl']);
    $linkedinurl = $conn->real_escape_string($_POST['linkedinurl']);
    $githuburl = $conn->real_escape_string($_POST['githuburl']);
    $contactno = $conn->real_escape_string($_POST['contactno']);
    $address = $conn->real_escape_string($_POST['address']);
    $mailaddress = $conn->real_escape_string($_POST['sitemail']);
    $sql = "update settings set site_title='$sitename',site_description='$sitedescription',font='$sitefont',logo='',favicon='',
                    facebook_link='$facebookurl',twitter_link='$twitterurl',mail_address='$mailaddress',instagram_link='$instagramurl',github_link='$githuburl',comp_address='$address',comp_phone='$contactno'";
    if ($conn->query($sql)) {
        header('location:settings.php');
    }
}

include 'include/footer.php';
?>