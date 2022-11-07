<?php include_once('header.php') ?>


<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          GREEN
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Vegetables.php">Our Vegetables </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.php">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->

 <!-- Vegetables section -->

 <section class="Vegetables_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Fresh Vegetables
        </h2>
      </div>
    </div>
    <div class="container-fluid">

      <div class="Vegetables_container">
        <div class="box">
          <img width=300 src="images/pototo.jpg" alt="">
          <div class="link_box">
            <h5>
              Potato
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img width=300 src="images/1_0h19diyBx5Ni3LaS2UifCA.jpeg" alt="">
          <div class="link_box">
            <h5>
              Cabbage
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img width=300 src="images/968524677.jpg" alt="">
          <div class="link_box">
            <h5>
              Carrots
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/j0r1.jpg" alt="">
          <div class="link_box">
            <h5>
              Tomatoes
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/f-5.jpg" alt="">
          <div class="link_box">
            <h5>
              Mango
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <img src="images/images-39.jpeg" alt="">
          <div class="link_box">
            <h5>
              Lettuce
            </h5>
            <a href="checkout.php">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end Vegetables section -->



  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          GREEN
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <?php include_once('footer.php') ?>
