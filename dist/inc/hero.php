<?php
if (strpos($uri, "/index") !== false || $uri == "/") { ?>

<!-- Hero Section -->
<section class="hero heroHome">
    <div class="heroText heroHomeText container">
        <h1>Everyday Fresh</h1>
        <h2>The Finest Breads and Pastries in the Heart of Norwich</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroHomeCircle"></div>
    <div class="ie-colour"></div>
</section>

<?php } elseif (strpos($uri, "/about") !== false) { ?>

<!-- Hero Section -->
<section class="hero heroAbout">
    <div class="heroText heroAboutText container">
        <h1>Meet the Team</h1>
        <h2>Our master bakers</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroAboutCircle"></div>
    <div class="ie-colour"></div>
</section>

<?php } elseif (strpos($uri, "/products") !== false) { ?>

<!-- Hero Section -->
<section class="hero heroProducts">
    <div class="heroText heroProductsText container">
        <h1>Our Products</h1>
        <h2>The best recipes, the healthiest ingredients</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroProductsCircle"></div>
    <div class="ie-colour"></div>
</section>

<?php } elseif (strpos($uri, "/testimonials") !== false) { ?>

<!-- Hero Section -->
<section class="hero heroTest">
    <div class="heroText heroTestText container">
        <h1>See What Our Customers Are Saying</h1>
        <h2>Customer satisfaction is our number one priority.</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroTestCircle"></div>
    <div class="ie-colour"></div>
</section>

<?php } ?>
