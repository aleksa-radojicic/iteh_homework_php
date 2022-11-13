<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 mb-2 fixed-top">
    <div class="container">
      <img class="logo" src="assets/images/logo.jpg" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>

          <li class="nav-item">
            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
            <a href="account.html"><i class="fas fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Home-->
  <section id="home">
    <div class="container">
      <h5>Aquarium Keep</h5>
      <h1><span>Affordable Prices</span></h1>
      <p>We offer quality freshwater and marine aquaristic products for everyone's taste and wallet.</p>
      <button>Shop Now</button>
    </div>
  </section>

  <!--Brand-->
  <section id="brand" class="container">
    <div class="row">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brand1.jpg" />
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brand2.jpg" />
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brand3.jpg" />
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/brand4.jpg" />
    </div>
  </section>

  <!--New-->
  <section id="new" class="w-100">
    <div class="row p-0 m-0">
      <!--One-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/1.jpg" />
        <div class="details">
          <h2>Food for Freshwater Fish</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <!--Two-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/2.jpg" />
        <div class="details">
          <h2>External Filters</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

      <!--Three-->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/3.jpg" />
        <div class="details">
          <h2>Goldfish 50% OFF</h2>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </div>

    </div>
  </section>

  <!--Featured-->
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
      <h3>Featured</h3>
      <hr class="mx-auto">
      <p>Here you can check our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">

      <?php include('server/get_featured_products.php'); ?>

      <?php while ($row = $featured_products->fetch_assoc()) { ?>
        <div onclick="location.href='single_product.html';" class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/images/<?php echo $row['product_image']; ?>" />

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>
          <a href="single_product.php?product_id=<?php echo $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
      <?php } ?>
  </section>

  <!--Banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h4>NEW AUTUMN BARGAIN</h4>
      <h1>Check our new collection of corals <br> UP to 30% OFF for registered users</h1>
      <button class="text-uppercase">Shop Now</button>
    </div>
  </section>

  <!--Footer-->
  <footer class="footer mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-4 col-md-6 col-sm-12">
        <img class="logo" src="assets/images/logo.jpg" />
        <p class="pt-3">We provide the best products for the most affordable prices</p>
      </div>

      <div class="footer-one col-lg-4 col-md-6 col-sm-12 footer-featured">
        <h5 class="pb-2">Categories</h5>
        <ul class="text-uppercase">
          <li><a href="#">aquariums<a></li>
          <li><a href="#">food</a></li>
          <li><a href="#">technical products</a></li>
          <li><a href="#">plants</a></li>
          <li><a href="#">animals</a></li>
        </ul>
      </div>

      <div class="footer-one col-lg-4 col-md-6 col-sm-12 footer-contact">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>165 Kragujevačkih Đaka, Belgrade</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p>+381 63 135 3942</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>info@outlook.com</p>
        </div>
      </div>
    </div>

    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-9 col-md-6 col-sm-12 mb-4">
          <p class="text-center">Aquarium Keep ©2022 All Rights Reserved</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 social-icons">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>