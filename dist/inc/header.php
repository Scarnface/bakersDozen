<body>
    <!-- Non modal content -->
    <div class="main">
      <header class="mainMenu" id="about">
        <div class="container">
          <!-- Main Nav -->
          <div class="navWrapper">
            <div class="headerSmall">
              <span class="logo"><a href="/">Baker's Dozen</a></span>
              <!-- <div id="nav-icon" class="hamburger-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span> -->
              <button id="nav-icon" class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
              </div>
            </div>
            <div class="headerBig">
              <nav class="navBar">
                <ul>
                  <li><span class="logo"><a href="/">Baker's Dozen</a></span></li>
                  <li <?php if ($uri == "/about.php") echo "class='activePage'" ?>><a href="/about.php">About</a></li>
                  <li <?php if ($uri == "/products.php") echo "class='activePage'" ?>><a href="/products.php">Products</a></li>
                  <li <?php if ($uri == "/testimonials.php") echo "class='activePage'" ?>><a href="/testimonials.php">Testimonials</a></li>
                  <li <?php if ($uri == "/order.php") echo "class='activePage'" ?> ><a href="/order.php">Order</a></li>
                  <li id="phoneIcon"><a href="tel:01603123987"><i class="fa-solid fa-phone-flip"></i></a></li>
                </ul>
              </nav>
            </div>
            
          </div>
      </header>