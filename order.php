<!DOCTYPE html>

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
    <script src="https://kit.fontawesome.com/a36ca304f3.js" crossorigin="anonymous" defer></script>
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
    </div>
    <div class="form-container">
      <form id="contact" class="contact-form" action="dist/inc/connection.php">
        <div class="input-group name">
          <input type="text" name="name" id="name" required>
          <label for="name" class="required">Name</label>
        </div>
        <div class="input-group email">
          <input type="email" name="email" id="email" required>
          <label for="email" class="required">Email</label>
        </div>
        <div class="input-group phone">
          <input type="tel" name="phone" id="phone" required>
          <label for="phone" class="required">Telephone</label>
        </div>
        <div class="input-group subject">
          <input type="text" name="subject" id="subject" required>
          <label for="subject" class="required">Subject</label>
        </div>
        <div class="input-group message">
          <textarea id="message" name="message" rows="5" required></textarea>
          <label for="message" class="required">Message</label>
        </div>
        <label class="checkbox-container">
          <span>I would like to receive updates and special offers from Baker's Dozen.</span>
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox-container">
          <span>
            By submitting this form you agree with the storage and handling of your
            data by this website in accordance with our <a href="#">Privacy Policy</a>.
          </span>
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <div class="g-recaptcha" data-sitekey="6LejV2ccAAAAAIsdL1C7WjAKZa-65abSGI0sbNF6"></div>
        <div class="form-submit">
          <input type="submit" value="Submit" class="btn">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
