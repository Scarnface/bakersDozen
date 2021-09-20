<?php
if ($uri == "/" || $uri == "/index.php") { ?>

<!-- Hero Section -->
<section class="hero heroHome">
    <div class="heroText heroHomeText container">
        <h1>Everyday Fresh</h1>
        <h2>The Finest Breads and Pastries in the Heart of Norwich</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroHomeCircle"></div>
</section>

<?php } elseif ($uri == "/about.php") { ?>

<!-- Hero Section -->
<section class="hero heroAbout">
    <div class="heroText heroAboutText container">
        <h1>Meet the Team</h1>
        <h2>Our master bakers</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroAboutCircle"></div>
</section>

<?php } elseif ($uri == "/products.php") { ?>

<!-- Hero Section -->
<section class="hero heroProducts">
    <div class="heroText heroProductsText container">
        <h1>Our Products</h1>
        <h2>The best recipes, the healthiest ingredients</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroProductsCircle"></div>
</section>

<?php } elseif ($uri == "/testimonials.php") { ?>

<!-- Hero Section -->
<section class="hero heroTest">
    <div class="heroText heroTestText container">
        <h1>See What Our Customers Are Saying</h1>
        <h2>Customer satisfaction is our number one priority.</h2>
        <a href="/order.php" class="btn">Order Now</a>
    </div>
    <div class="heroCircle heroTestCircle"></div>
</section>

<?php } ?>
