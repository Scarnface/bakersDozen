<?php

$uri = $_SERVER['REQUEST_URI']; 

?>

<!DOCTYPE html>

<html lang="en-GB">
  <head>

    <?php if ($uri == "/" || $uri == "/index.php") {?>
        <!-- ================================= 
        SITE DATA
        ================================== -->
        <title>Baker's Dozen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- SEO Data -->
        <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
        <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
        <meta name="author" content="Adam Pearson & Marc Clare" />
        <!-- ================================= 
        SITE RESOURCES
        ================================== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- SLICK -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick-theme.css" />
        <script type="text/javascript" src="dist/js/plugins/slick/slick.js" defer></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/style.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/plugins/carousel.js" defer></script>
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <!-- FAVICON -->

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet">

    <?php } elseif ($uri == "/order.php") {?>
     
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
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- NORMALIZE -->
        <link type="text/css" rel="stylesheet" href="dist/css/normalize.css" />
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- LEAFLET -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/leaflet/leaflet.css">
        <script type="text/javascript" src="dist/js/plugins/leaflet/leaflet.js"></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/order.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <script type="text/javascript" src="dist/js/order.js" defer></script>

        <!-- FAVICON -->

        <!-- RECAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@400;700&family=Yellowtail&display=swap" rel="stylesheet">

    <?php } elseif ($uri == "/about.php") {?>

        <!-- ================================= 
        SITE DATA
        ================================== -->
        <title>Baker's Dozen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- SEO Data -->
        <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
        <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
        <meta name="author" content="Adam Pearson & Marc Clare" />

        <!-- ================================= 
        SITE RESOURCES
        ================================== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet" />
        <!-- SLICK -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick-theme.css" />
        <script type="text/javascript" src="dist/js/plugins/slick/slick.js" defer></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/style.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/plugins/carousel.js" defer></script>
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <!-- FAVICON -->

    <?php } elseif ($uri == "/products.php") {?>

        <!-- ================================= 
        SITE DATA
        ================================== -->
        <title>Baker's Dozen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- SEO Data -->
        <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
        <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
        <meta name="author" content="Adam Pearson & Marc Clare" />
        <!-- ================================= 
        SITE RESOURCES
        ================================== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- SLICK -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick-theme.css" />
        <script type="text/javascript" src="dist/js/plugins/slick/slick.js" defer></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/style.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <!-- FAVICON -->

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet">

    <?php } elseif ($uri == "/testimonials.php") {?>

        <!-- ================================= 
        SITE DATA
        ================================== -->
        <title>Baker's Dozen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- SEO Data -->
        <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
        <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
        <meta name="author" content="Adam Pearson & Marc Clare" />
        <!-- ================================= 
        SITE RESOURCES
        ================================== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- SLICK -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick-theme.css" />
        <script type="text/javascript" src="dist/js/plugins/slick/slick.js" defer></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/testimonials.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <!-- FAVICON -->

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet">

    <?php } elseif ($uri == "/privacy.php") {?>

        <!-- ================================= 
        SITE DATA
        ================================== -->
        <title>Baker's Dozen</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- SEO Data -->
        <meta name="keywords" content="Baker, Handmade, Breads, Pastries, Norwich" />
        <meta name="description" content="The finest breads and pastries in the heart of Norwich." />
        <meta name="author" content="Adam Pearson & Marc Clare" />
        <!-- ================================= 
        SITE RESOURCES
        ================================== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js" defer></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js" defer></script>
        <!-- FONTAWESOME -->
        <link type="text/css" rel="stylesheet" href="dist/assets/fa/css/all.css" />
        <!-- SLICK -->
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick.css" />
        <link type="text/css" rel="stylesheet" href="dist/js/plugins/slick/slick-theme.css" />
        <script type="text/javascript" src="dist/js/plugins/slick/slick.js" defer></script>
        <!-- CUSTOM CSS -->
        <link type="text/css" rel="stylesheet" href="dist/css/style.css" />
        <!-- CUSTOM JS -->
        <script type="text/javascript" src="dist/js/menu.js" defer></script>
        <!-- FAVICON -->

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;700&family=Yellowtail&display=swap" rel="stylesheet">

    <?php } ?>
  </head>
