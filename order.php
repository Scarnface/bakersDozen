<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/dist/inc/connection.php";
require __DIR__ . "/dist/inc/functions.php";
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_POST['submit'])) {
  $errorArray = validateForm();
}

?>

<html lang="en-GB">
  <head>
    <!-- ================================= 
      SITE DATA
    ================================== -->
    <title>Bakers Dozen</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SEO Data -->
    <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
    <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
    <meta name="author" content="Adam Pearson & Marc Clare" />

    <!-- ================================= 
      SITE RESOURCES
    ================================== -->
    <!-- NORMALIZE -->
    <link type="text/css" rel="stylesheet" href="dist/css/normalize.css" />
    <!-- FONTAWESOME -->
    <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
    <!-- LEAFLET -->
    <link type="text/css" rel="stylesheet" href="dist/js/plugins/leaflet/leaflet.css">
    <script type="text/javascript" src="dist/js/plugins/leaflet/leaflet.js"></script>
    <!-- CUSTOM CSS -->
    <link type="text/css" rel="stylesheet" href="dist/css/order.css" />
    <!-- FAVICON -->
    <script type="text/javascript" src="dist/js/order.js" defer></script>
    <!-- RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khula:wght@400;700&family=Yellowtail&display=swap" rel="stylesheet">
</head>

<body>
  <div id="map"></div>
  <div class="container">
    <div class="contact-text">
      <h1>Contact Us Today</h1>
      <p>Our opening hours are Monday - Friday 8am - 4pm, and 8am-3pm on Saturdays.</p>
      <p>If you wish to get in touch, you can visit us in the shop, phone us on
        <a href="tel:01603123987">01603 123 987</a>, email us at <a href="mailto:info@bakersdozen.co.uk">info@bakersdozen.co.uk</a>, or use the contact form
        below. We aim to respond to inquiries within 24 hours.
      </p>
      
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
          <input type="text" name="name" id="name"  <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("name", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required>
          <label for="name" class="required">Name</label>
        </div>
        <div class="input-group phone break">
          <input type="tel" name="phone" id="phone"  <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("phone", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required>
          <label for="phone" class="required">Telephone</label>
        </div>
        <div class="input-group email">
          <input type="email" name="email" id="email"  <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("email", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required>
          <label for="email" class="required">Email</label>
        </div>
        <div class="input-group subject">
          <input type="text" name="subject" id="subject"  <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("subject", $errorArray)) {
                  echo "class='error' ";
                }
              }
            ?>required>
          <label for="subject" class="required">Subject</label>
        </div>
        <div class="input-group message">
          <textarea id="message" name="message" rows="5" <?php
              if (isset($_POST['submit']) && isset($errorArray)) { 
                if (in_array("message", $errorArray)) {
                  echo "class='error'";
                }
              }
            ?>required></textarea>
          <label for="message" class="required">Message</label>
        </div>
        <div class="checkboxes-recaptcha">
          <label class="checkbox-container">
            <span>I would like to receive updates and special offers from Baker's Dozen.</span>
            <input type="checkbox" id="newsletter-signup" name="newsletter-signup">
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
            <span class="checkmark"></span>
          </label>
          <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['RECAPTCHA_SITE'] ?>"></div>
          <div class="form-submit">
            <input type="submit" name="submit" value="Submit" class="btn">
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
