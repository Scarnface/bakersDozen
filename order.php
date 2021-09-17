<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/dist/inc/connection.php";
require __DIR__ . "/dist/inc/functions.php";
require __DIR__ . "/dist/inc/mailer.php";
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// validate the form on the server-side
if (isset($_POST['submit'])) {
  $array = validateForm();
  if ($array["passed"]) {
    $contactArray = $array["contact array"];
    postContact($GLOBALS["db"], $contactArray);
    sendMail($contactArray);
  } else {
    $errorArray = $array["error array"];
    $prefill = $array["pre-filled"];
  }
}

?>

<?php include "./dist/inc/head.php" ?>

<?php include "./dist/inc/header.php" ?>

<?php include "./dist/inc/menu.php" ?>

  <div id="map"></div>
  <div class="contact-cont container">
    <div class="contact-text" id="contact-text">
      <h1>Contact Us Today</h1>
      <p>Our opening hours are Monday - Friday 8am - 4pm, and 8am-3pm on Saturdays.</p>
      <p>If you wish to get in touch, you can visit us in the shop, phone us on
        <a href="tel:01603123987">01603 123 987</a>, email us at <a href="mailto:info@bakersdozen.co.uk">info@bakersdozen.co.uk</a>, or use the contact form
        below. We aim to respond to inquiries within 24 hours.
      </p>
      <div class="contactCircle">
          <div class="contactImageCircle"></div>
          <div class="aboutBlueCircle"></div>
          <div class="aboutYellowCircle"></div>
      </div>
      
      <?php
      if (isset($_POST['submit'])) {
        echo "<div id='form-message' class='form-message";
        if (isset($errorArray)) {
          echo " error'>\n" . "<p><strong>Please complete the following fields:</strong> " . implode(", ", $errorArray) . "</p>\n";
        } else {
          echo " success'>\n" . "<p>Success! Your message was sent successfully.</p>\n";
        }
        echo '<button id="close-message" class="close-message"><i class="fas fa-times"></i></button>';
        echo "</div>";
      }
      ?>
      
    </div>
    <div class="form-container">
      <form method="post" id="contact" class="contact-form" action="/order.php">

        <div class="input-group name break">
          <input type="text" name="name" id="name" maxlength="100" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("name", $errorArray)) {
                  echo "class='error'";
                }
                if (isset($prefill["name"])) {
                  echo "value='" . $prefill["name"] . "'";
                }
              }
            ?>required>
          <label for="name" class="required">Name</label>
        </div>

        <div class="input-group phone break">
          <input type="text" name="phone" id="phone" maxlength="18" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("phone", $errorArray)) {
                  echo "class='error'";
                }
                if (isset($prefill["phone"])) {
                  echo "value='" . $prefill["phone"] . "'";
                }
              }
            ?>required>
          <label for="phone" class="required">Telephone</label>
        </div>

        <div class="input-group email">
          <input type="email" name="email" id="email" maxlength="254" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("email", $errorArray)) {
                  echo "class='error'";
                }
                if (isset($prefill["email"])) {
                  echo "value='" . $prefill["email"] . "'";
                }
              }
            ?>required>
          <label for="email" class="required">Email</label>
        </div>

        <div class="input-group subject">
          <input type="text" name="subject" id="subject" maxlength="200" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("subject", $errorArray)) {
                  echo "class='error' ";
                }
                if (isset($prefill["subject"])) {
                  echo "value='" . $prefill["subject"] . "'";
                }
              }
            ?>required>
          <label for="subject" class="required">Subject</label>
        </div>

        <div class="input-group message">
          <textarea id="message" name="message" rows="5" maxlength="2000" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("message", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required><?php
            if (isset($_POST['submit']) && isset($errorArray)) { 
              if (isset($prefill["message"])) {
                echo $prefill["message"];
              }
            }
            ?></textarea>
          <label for="message" class="required">Message</label>
        </div>

        <div class="checkboxes-recaptcha">
          <label class="checkbox-container">
            <span>I would like to receive updates and special offers from Baker's Dozen.</span>
            <input type="checkbox" id="newsletter-signup" name="newsletter-signup" <?php 
            if (isset($_POST['submit']) && isset($errorArray)) { 
              if (isset($prefill['newsletter']) && $prefill['newsletter']) {
                echo "checked";
              }
            }
              ?>>
            <span class="checkmark"></span>
          </label>

          <label class="checkbox-container">
            <span class="required">
              By submitting this form you agree with the storage and handling of your
              data by this website in accordance with our <a href="#">Privacy Policy</a>.
            </span>
            <input type="checkbox" id="gdpr-checkbox" name="gdpr-checkbox" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("privacy policy checkbox", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required>
            <span class="checkmark" id="gdpr-span"></span>
          </label>

          <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['RECAPTCHA_SITE'] ?>"></div>
          <div class="form-submit">
            <input type="submit" name="submit" value="Submit" id="submit" class="btn">
          </div>
        </div>
      </form>
    </div>
  </div>

<?php include "./dist/inc/footer.php" ?>

