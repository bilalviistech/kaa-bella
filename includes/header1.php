<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">

  <title>MediaCenter - Responsive eCommerce Template</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/colors/green.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">

  <!-- Demo Purpose Only. Should be removed in production -->
  <link rel="stylesheet" href="assets/css/config.css">

  <link href="assets/css/colors/green.css" rel="alternate stylesheet" title="Green color">
  <link href="assets/css/colors/blue.css" rel="alternate stylesheet" title="Blue color">
  <link href="assets/css/colors/red.css" rel="alternate stylesheet" title="Red color">
  <link href="assets/css/colors/orange.css" rel="alternate stylesheet" title="Orange color">
  <link href="assets/css/colors/navy.css" rel="alternate stylesheet" title="Navy color">
  <link href="assets/css/colors/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
  <!-- Demo Purpose Only. Should be removed in production : END -->

  <!-- Fonts -->
  <link href='../css-2?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
  <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
</head>

<body>

  <!-- ============================================================= TOP NAVIGATION ============================================================= -->
  <nav class="top-bar animate-dropdown">
    <div class="container">
      <div class="col-xs-12 col-sm-6 no-margin">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div><!-- /.col -->

      <div class="col-xs-12 col-sm-6 no-margin">
        <ul class="right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#change-language">English</a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tamil</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">French</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Russian</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#change-currency">Dollar (US)</a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Euro (EU)</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Turkish Lira (TL)</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indian Rupee (INR)</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dollar (US)</a></li>
            </ul>
          </li>
          <li><a href="authentication.php">Register</a></li>
          <li><a href="authentication.php">Login</a></li>
        </ul>
      </div><!-- /.col -->
    </div><!-- /.container -->
  </nav><!-- /.top-bar -->
  <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

  <!-- ============================================================= HEADER ============================================================= -->
  <header>
    <div class="container no-padding">
      <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
        <!-- ============================================================= LOGO ============================================================= -->
        <div class="logo">
          <a href="index.php">
            <!--<img alt="logo" src="assets/images/logo.svg" width="233" height="54"/>-->
            <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
            <svg width="233px" height="54px" viewbox="0 0 233 54" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path fill="#ffffff" d=" M 0.00 0.00 L 233.00 0.00 L 233.00 54.00 L 0.00 54.00 L 0.00 0.00 Z"></path>
              <path class="logo-svg" d=" M 104.82 6.46 C 107.74 5.13 110.66 3.80 113.58 2.46 C 113.59 18.71 113.59 34.95 113.59 51.20 C 110.65 51.20 107.71 51.20 104.78 51.20 C 104.84 50.67 104.96 49.62 105.02 49.09 C 100.02 53.56 91.66 52.69 87.37 47.67 C 84.80 44.83 83.96 40.97 83.20 37.33 C 75.63 37.37 68.05 37.26 60.47 37.40 C 61.41 39.88 62.49 42.75 65.24 43.71 C 69.03 45.31 73.10 43.58 75.89 40.91 C 77.67 42.73 79.47 44.54 81.22 46.40 C 75.60 52.47 65.66 53.95 58.77 49.23 C 53.06 45.18 51.58 37.52 52.30 30.95 C 52.75 25.29 55.84 19.51 61.29 17.27 C 66.83 15.00 73.85 15.40 78.54 19.37 C 81.58 21.92 82.87 25.85 83.50 29.64 C 84.32 24.24 87.32 18.69 92.71 16.75 C 96.83 15.07 101.64 15.89 104.93 18.89 C 104.77 14.75 104.83 10.60 104.82 6.46 Z"></path>
              <path class="logo-svg" d=" M 118.44 3.44 C 121.37 1.09 126.26 3.21 126.52 6.97 C 127.17 10.89 122.39 14.12 119.00 12.03 C 115.74 10.46 115.39 5.41 118.44 3.44 Z"></path>
              <path class="logo-svg" d=" M 10.22 19.63 C 14.71 14.58 23.51 14.56 27.42 20.34 C 33.58 13.24 48.54 14.42 50.33 24.80 C 51.41 33.54 50.55 42.41 50.82 51.20 C 47.88 51.20 44.94 51.20 42.00 51.20 C 41.92 44.09 42.14 36.97 41.93 29.87 C 41.95 27.41 40.48 24.57 37.76 24.43 C 34.66 23.72 30.88 25.51 30.74 29.01 C 30.35 36.39 30.71 43.80 30.59 51.20 C 27.67 51.20 24.75 51.20 21.82 51.20 C 21.74 44.12 21.98 37.04 21.73 29.96 C 21.79 27.24 19.97 24.22 16.95 24.37 C 13.91 23.84 10.58 25.90 10.49 29.15 C 10.13 36.49 10.47 43.85 10.35 51.20 C 7.43 51.20 4.51 51.20 1.59 51.20 C 1.59 39.69 1.59 28.18 1.59 16.67 C 4.53 16.67 7.47 16.67 10.41 16.67 C 10.36 17.41 10.27 18.89 10.22 19.63 Z"></path>
              <path class="logo-svg" d=" M 129.25 19.84 C 135.49 16.15 143.23 14.75 150.23 16.89 C 154.92 18.35 157.47 23.34 157.42 28.02 C 157.56 35.75 157.42 43.47 157.47 51.20 C 154.57 51.20 151.68 51.20 148.79 51.20 C 148.84 50.65 148.93 49.56 148.98 49.01 C 144.10 52.49 137.26 53.09 132.09 49.91 C 126.05 46.27 125.51 36.43 131.16 32.19 C 136.26 28.22 143.30 28.77 149.13 30.64 C 148.62 28.53 148.91 25.65 146.65 24.49 C 141.77 22.26 136.27 24.40 131.93 26.90 C 131.04 24.55 130.14 22.19 129.25 19.84 Z"></path>
              <path class="logo-svg" d=" M 117.06 16.67 C 119.98 16.67 122.90 16.67 125.82 16.67 C 125.82 28.18 125.82 39.69 125.82 51.20 C 122.90 51.20 119.98 51.20 117.06 51.20 C 117.06 39.69 117.06 28.18 117.06 16.67 Z"></path>
              <path fill="#3a3a3a" d=" M 201.86 17.62 C 202.52 17.30 203.82 16.67 204.48 16.35 C 204.48 18.10 204.48 19.84 204.48 21.59 C 205.23 21.59 206.73 21.60 207.48 21.60 C 207.48 22.17 207.48 23.30 207.48 23.86 C 206.73 23.87 205.22 23.89 204.47 23.91 C 204.49 26.42 204.34 28.95 204.62 31.45 C 205.86 32.02 207.13 32.53 208.42 32.99 C 206.71 34.03 204.25 35.64 202.51 33.72 C 201.29 30.65 202.08 27.15 201.88 23.91 C 201.39 23.89 200.42 23.87 199.94 23.86 C 199.94 23.30 199.94 22.18 199.94 21.62 C 200.43 21.60 201.41 21.57 201.90 21.56 C 201.88 20.24 201.87 18.93 201.86 17.62 Z"></path>
              <path fill="#3a3a3a" d=" M 169.01 34.60 C 161.80 34.48 161.85 21.38 169.03 21.30 C 171.56 20.91 173.24 22.99 174.55 24.80 C 172.38 25.03 170.35 23.99 168.21 24.05 C 165.19 25.78 165.69 32.04 169.72 32.24 C 171.04 30.86 172.68 30.26 174.58 30.81 C 173.29 32.73 171.68 35.03 169.01 34.60 Z"></path>
              <path fill="#3a3a3a" d=" M 176.14 24.15 C 177.71 20.91 182.63 20.34 185.06 22.88 C 186.61 24.47 186.37 26.86 186.72 28.88 C 183.63 28.96 180.54 28.94 177.46 29.07 C 178.33 30.06 178.74 31.71 180.15 32.08 C 182.15 31.99 184.30 31.15 185.94 32.84 C 183.84 33.87 181.50 35.30 179.09 34.28 C 175.09 32.89 174.46 27.52 176.14 24.15 Z"></path>
              <path fill="#3a3a3a" d=" M 188.27 21.67 C 191.44 22.12 195.65 20.04 197.89 23.12 C 199.40 26.61 198.50 30.58 198.71 34.28 C 197.84 34.27 196.97 34.27 196.10 34.26 C 196.04 31.26 196.36 28.21 195.84 25.24 C 195.30 22.95 190.93 23.34 191.03 25.84 C 190.71 28.63 190.93 31.46 190.90 34.27 C 190.25 34.27 188.94 34.27 188.28 34.27 C 188.28 30.07 188.28 25.87 188.27 21.67 Z"></path>
              <path fill="#3a3a3a" d=" M 209.34 24.33 C 210.88 20.80 216.32 20.24 218.67 23.23 C 219.85 24.84 219.70 26.96 220.06 28.84 C 216.93 28.95 213.79 28.96 210.67 29.17 C 211.42 30.17 212.14 31.20 213.03 32.08 C 214.53 32.45 215.99 31.66 217.44 31.37 C 217.81 31.81 218.56 32.68 218.93 33.11 C 216.82 34.02 214.49 35.28 212.18 34.20 C 208.39 32.73 207.86 27.62 209.34 24.33 Z"></path>
              <path fill="#3a3a3a" d=" M 221.57 21.68 C 224.18 22.17 229.35 19.73 229.26 23.99 C 227.69 24.37 225.10 23.31 224.48 25.41 C 223.89 28.32 224.25 31.33 224.17 34.27 C 223.52 34.27 222.23 34.27 221.58 34.27 C 221.58 30.07 221.58 25.88 221.57 21.68 Z"></path>
              <path fill="#ffffff" d=" M 177.47 26.72 C 178.35 25.45 179.09 23.45 180.99 23.60 C 182.85 23.48 183.54 25.46 184.45 26.68 C 182.12 26.79 179.79 26.80 177.47 26.72 Z"></path>
              <path fill="#ffffff" d=" M 210.63 26.63 C 211.70 25.38 212.59 23.21 214.62 23.63 C 216.40 23.58 216.80 25.59 217.66 26.73 C 215.32 26.80 212.97 26.77 210.63 26.63 Z"></path>
              <path fill="#ffffff" d=" M 60.57 29.87 C 61.45 26.41 64.15 23.26 68.04 23.58 C 71.91 23.17 74.23 26.62 75.30 29.84 C 70.39 29.99 65.48 29.97 60.57 29.87 Z"></path>
              <path fill="#ffffff" d=" M 96.52 24.70 C 99.50 23.55 102.54 25.02 104.87 26.85 C 104.80 31.61 104.80 36.38 104.86 41.14 C 102.46 43.09 99.18 44.42 96.17 43.02 C 92.82 41.46 91.99 37.36 91.96 34.01 C 91.89 30.51 92.82 26.06 96.52 24.70 Z"></path>
              <path fill="#ffffff" d=" M 137.58 37.63 C 141.09 35.82 145.16 36.85 148.82 37.59 C 148.82 38.98 148.80 40.38 148.79 41.78 C 145.51 43.89 141.25 45.34 137.54 43.42 C 135.23 42.33 135.28 38.72 137.58 37.63 Z"></path>
              <path class="logo-svg" d=" M 163.30 39.16 C 165.64 38.00 168.47 38.66 171.01 38.49 C 172.96 38.53 176.17 38.23 176.35 40.94 C 176.51 46.79 170.77 51.96 165.05 51.93 C 161.43 51.79 162.41 47.39 162.23 44.97 C 162.49 43.09 161.71 40.56 163.30 39.16 Z"></path>
            </svg>
          </a>
        </div><!-- /.logo -->
        <!-- ============================================================= LOGO : END ============================================================= -->
      </div><!-- /.logo-holder -->

      <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
        <div class="contact-row">
          <div class="phone inline">
            <i class="fa fa-phone"></i> (+800) 123 456 7890
          </div>
          <div class="contact inline">
            <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span>
          </div>
        </div><!-- /.contact-row -->
        <!-- ============================================================= SEARCH AREA ============================================================= -->
        <div class="search-area">
          <form>
            <div class="control-group">
              <input class="search-field" placeholder="Search for item">

              <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                  <a class="dropdown-toggle" data-toggle="dropdown" href="category-grid.html">all categories</a>

                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">laptops</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">tv & audio</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">gadgets</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">cameras</a></li>

                  </ul>
                </li>
              </ul>

              <a class="search-button" href="#"></a>

            </div>
          </form>
        </div><!-- /.search-area -->
        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
      </div><!-- /.top-search-holder -->

      <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
        <div class="top-cart-row-container">
          <div class="wishlist-compare-holder">
            <div class="wishlist ">
              <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </a>
            </div>
            <div class="compare">
              <a href="#"><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </a>
            </div>
          </div>

          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          <div class="top-cart-holder dropdown animate-dropdown">
            <div class="basket">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                  <span class="count">3</span>
                  <img src="assets/images/icon-cart.png" alt="">
                </div>

                <div class="total-price-basket">
                  <span class="lbl">your cart:</span>
                  <span class="total-price">
                    <span class="sign">$</span><span class="value">3219,00</span>
                  </span>
                </div>
              </a>

              <ul class="dropdown-menu">
                <li>
                  <div class="basket-item">
                    <div class="row">
                      <div class="col-xs-4 col-sm-4 no-margin text-center">
                        <div class="thumb">
                          <img alt="" src="assets/images/products/product-small-01.jpg">
                        </div>
                      </div>
                      <div class="col-xs-8 col-sm-8 no-margin">
                        <div class="title">Blueberry</div>
                        <div class="price">$270.00</div>
                      </div>
                    </div>
                    <a class="close-btn" href="#"></a>
                  </div>
                </li>

                <li>
                  <div class="basket-item">
                    <div class="row">
                      <div class="col-xs-4 col-sm-4 no-margin text-center">
                        <div class="thumb">
                          <img alt="" src="assets/images/products/product-small-01.jpg">
                        </div>
                      </div>
                      <div class="col-xs-8 col-sm-8 no-margin">
                        <div class="title">Blueberry</div>
                        <div class="price">$270.00</div>
                      </div>
                    </div>
                    <a class="close-btn" href="#"></a>
                  </div>
                </li>

                <li>
                  <div class="basket-item">
                    <div class="row">
                      <div class="col-xs-4 col-sm-4 no-margin text-center">
                        <div class="thumb">
                          <img alt="" src="assets/images/products/product-small-01.jpg">
                        </div>
                      </div>
                      <div class="col-xs-8 col-sm-8 no-margin">
                        <div class="title">Blueberry</div>
                        <div class="price">$270.00</div>
                      </div>
                    </div>
                    <a class="close-btn" href="#"></a>
                  </div>
                </li>


                <li class="checkout">
                  <div class="basket-item">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <a href="cart.php" class="le-button inverse">View cart</a>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <a href="checkout.php" class="le-button">Checkout</a>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>
            </div><!-- /.basket -->
          </div><!-- /.top-cart-holder -->
        </div><!-- /.top-cart-row-container -->
        <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
      </div><!-- /.top-cart-row -->
    </div><!-- /.container -->
  </header>

  <!-- ============================================================= HEADER : END ============================================================= -->