<?php include "./dist/inc/head.php" ?>

<?php include "./dist/inc/header.php" ?>

<?php include "./dist/inc/menu.php" ?>

<?php include "./dist/inc/hero.php" ?>

    <!-- About Section -->
    <section class="about" id="about-us">
      <div class="container">
      <div class="aboutCategories container">
        <div class="aboutCategory">
          <i class="fa-solid fa-bread-slice"></i>
          <h3>Bread Baked Daily</h3>
        </div>

        <div class="aboutCategory">
          <i class="fa-solid fa-cookie-bite"></i>
          <h3>Handmade Sweets and Pastries</h3>
        </div>

        <div class="aboutCategory">
          <i class="fa-solid fa-cake-candles"></i>
          <h3>Specially Made for Your Event</h3>
        </div>
      </div>
    </div>

      <!-- Full-width about image for mobile -->
      <div class="aboutImageFull"></div>

      <!-- About image for desktop with about text -->
      <div class="container">
        <div class="aboutInnerWrapper">
          <div class="aboutText">
            <h3 class="aboutText">Established in 2011, our bread is hand-crafted using the finest local ingredients.</h3>
          </div>
          <div class="aboutImageCircle"></div>
          <div class="aboutBlueCircle"></div>
          <div class="aboutYellowCircle"></div>
          <div class="aboutDescription">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut lobre et dole magna
              aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
              sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
              aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no
              sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
          </div>
        </div>

      </section>

    <!-- Product Carousel -->
    <section class="productsCarouselWrapper">
      <div class="container">
        <h2>Our Products</h2>

          <div class="productsCarousel carousel">
            <div class="slide">
              <div class="product-carousel-img savoury-breads"></div>
              <p>Savoury Breads</p>
            </div>

            <div class="slide">
              <div class="product-carousel-img pastries"></div>
              <p>Pastries</p>
            </div>

            <div class="slide">
              <div class="product-carousel-img cakes"></div>
              <p>Cakes</p>
            </div>

            <div class="slide">
              <div class="product-carousel-img birthday-cakes"></div>
              <p>Birthday Cakes</p>
            </div>

            <div class="slide">
              <div class="product-carousel-img wedding-cakes"></div>
              <p>Wedding Cakes</p>
            </div>

            <div class="slide">
              <div class="product-carousel-img sandwiches"></div>
              <p>Sandwiches</p>
            </div>
          </div>
        </div>
        <div class="btnWrapper">
          <a class="btn2" href="/products.php">Find Out More</a>
        </div>
    </section>
    <!-- Testimonial Carousel -->
    <section class="container">
      <div class="testimonialsCarouselWrapper">
        <h2>What Our Customers Are Saying</h2>

        <div class="testimonialsCarousel carousel">
          <div class="slide">
            <span class="quoteLeft">“</span><span class="quoteRight">”</span></br>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class="testimonialName">&#8212; Anna Davis</p>
          </div>

            <div class="slide">
              <span class="quoteLeft">“</span><span class="quoteRight">”</span></br>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="testimonialName">&#8212; Frank Miller</p>
            </div>

            <div class="slide">
              <span class="quoteLeft">“</span><span class="quoteRight">”</span></br>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
              <p class="testimonialName">&#8212; Warren Ellis</p>
            </div>

            <div class="slide">
              <span class="quoteLeft">“</span><span class="quoteRight">”</span></br>
              <p>
                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                quo voluptas nulla pariatur?
              </p>
              <p class="testimonialName">&#8212; Neil Gaiman</p>
            </div>
          </div>

          <p class="testimonialText">Proudly baking for your event, and your breakfast</p>

          <a class="btn">Order Now</a>
        </div>
      </section>

<?php include "./dist/inc/footer.php" ?>