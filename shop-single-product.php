<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Medcity - Medical Healthcare HTML5 Template</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+201061245741" class="phone__number">
                        <i class="icon-phone"></i> <span>+2 01061245741</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-dentist.html" class="nav__item-link">Home Dentist</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-pharmacy.html" class="nav__item-link">Home pharmacy</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services.html" class="nav__item-link">Our Services</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services-single.html" class="nav__item-link">single Services</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="appointment.html" class="nav__item-link">Appointments</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Doctors</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="doctors-timetable.html" class="nav__item-link">Doctors Timetable</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-standard.html" class="nav__item-link">Our Doctors Standard</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-modern.html" class="nav__item-link">Our Doctors Modern</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-grid.html" class="nav__item-link">Our Doctors Grid</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-single-doctor1.html" class="nav__item-link">Single Doctor 01</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="doctors-single-doctor2.html" class="nav__item-link">Single Doctor 02</a>
                  </li> <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Blog Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="shop.html" class="nav__item-link">Our Products</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shop-single-product.html" class="nav__item-link">Products Single</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="cart.html" class="nav__item-link">Cart</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a href="departments.html">Departments</a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Neurology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pathology Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Laboratory Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Pediatric Clinic</a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="department-single.html" class="nav__item-link">Cardiac Clinic</a>
              </li><!-- /.nav-item -->
            </ul> <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title pt-30 pb-30">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
       shop single
    =========================== -->
    <section class="shop pb-40 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="alert alert-primary d-flex flex-wrap justify-content-between align-items-center mb-40">
              <h3 class="alert__title my-1">“Green Tea” has been added to your cart.</h3>
              <a href="cart.html" class="btn btn__secondary btn__rounded">View Cart</a>
            </div><!-- /.alert-panel-->
            <div class="row product-item-single">
              <div class="col-sm-6">
                <div class="product__img">
                  <img src="assets/images/products/2.jpg" class="zoomin" alt="product" loading="lazy">
                </div><!-- /.product-img -->
              </div>
              <div class="col-sm-6">
                <h1 class="product__title">Green Tea</h1>
                <div class="product__meta-review mb-20">
                  <span class="product__rating">
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star active"></i>
                    <i class="fa fa-star"></i>
                  </span>
                  <span>4 Review(s)</span>
                  <a href="#">Add Review</a>
                </div><!-- /.product-meta-review -->
                <span class="product__price mb-20">$ 14.00</span>
                <div class="product__desc">
                  <p>EGCG is one of the most powerful compounds in green tea. Research has tested its ability to help
                    treat various diseases. It appears to be one of the main compounds that gives green tea its
                    medicinal properties (2
                  </p>
                </div><!-- /.product-desc -->
                <div class="product__quantity d-flex mb-30">
                  <div class="quantity__input-wrap mr-20">
                    <i class="decrease-qty fa fa-minus"></i>
                    <input type="number" value="1" class="qty-input">
                    <i class="increase-qty fa fa-plus"></i>
                  </div>
                  <a class="btn btn__secondary btn__rounded" href="#">add to cart</a>
                </div><!-- /.product-quantity -->
                <div class="product__meta-details">
                  <ul class="list-unstyled mb-30">
                    <li><span>SKU :</span> <span>#0214</span></li>
                    <li><span>Category :</span> <span>Vitamins</span></li>
                    <li><span>Tags :</span> <span>Beauty, Supplements</span></li>
                  </ul>
                </div><!-- /.product__meta-details -->
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div>
            </div><!-- /.row -->
            <div class="product__details mt-100">
              <nav class="nav nav-tabs">
                <a class="nav__link active" data-toggle="tab" href="#Description">Description</a>
                <a class="nav__link" data-toggle="tab" href="#Details">Details</a>
                <a class="nav__link" data-toggle="tab" href="#Reviews">Reviews (3)</a>
              </nav>
              <div class="tab-content mb-50" id="nav-tabContent">
                <div class="tab-pane fade show active" id="Description">
                  <p>It doesn’t contain as much as coffee, but enough to produce a response without causing the jittery
                    effects associated with taking in too much caffeine. Caffeine affects the brain by blocking an
                    inhibitory neurotransmitter called adenosine. This way, it increases the firing of neurons and the
                    concentration of neurotransmitters like dopamine and norepinephrine (4Trusted Source, 5). Research
                    has consistently shown that caffeine can improve various aspects of brain function, including mood,
                    vigilance, reaction time, and memory (6).</p>
                </div><!-- /.desc-tab -->
                <div class="tab-pane fade" id="Details">
                  <p>Yorks is not just about graphic design; it's more than that. We offer integral communication
                    services, and we're responsible for our process and results. We thank each of our clients and their
                    portfolios; thanks to them we have grown and built what we are today! After all</p>
                  <p>as described in Web
                    Design Trends 2015 & 2016, vision dominates a lot of our subconscious interpretation of the world
                    around us. On top of that, pleasing images create a better user experience.
                    At League Agency, we shows only the best websites and portfolios built completely with passion,
                    simplicity & creativity !</p>
                </div><!-- /.details-tab -->
                <div class="tab-pane fade" id="Reviews">
                  <form class="reviews__form">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Review"></textarea>
                    </div><!-- /.form-group -->
                    <button type="submit" class="btn btn__primary btn__rounded">Submit</button>
                  </form>
                </div><!-- /.reviews-tab -->
              </div>
            </div><!-- /.product-tabs -->
            <h6 class="related__products-title text-center-xs mb-25">Related Products</h6>
            <div class="row">
              <!-- Product item #1 -->
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/2.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="#" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Add To Cart</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Biotin Complex</a></h4>
                    <span class="product__price">$12,99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-3 -->
              <!-- Product item #2 -->
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/3.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="#" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Add To Cart</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Facial Serum</a></h4>
                    <span class="product__price">$19,99</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-3 -->
              <!-- Product item #3 -->
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/4.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="#" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Add To Cart</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                    <span class="product__price">$33.00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-3 -->
              <!-- Product item #4 -->
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="product-item">
                  <div class="product__img">
                    <img src="assets/images/products/5.jpg" alt="Product" loading="lazy">
                    <div class="product__action">
                      <a href="#" class="btn btn__primary btn__rounded">
                        <i class="icon-cart"></i> <span>Add To Cart</span>
                      </a>
                    </div><!-- /.product-action -->
                  </div><!-- /.product-img -->
                  <div class="product__info">
                    <h4 class="product__title"><a href="#">Essential Oil</a></h4>
                    <span class="product__price">$63.00</span>
                  </div><!-- /.product-content -->
                </div><!-- /.product-item -->
              </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop single -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="assets/images/logo/logo-light.png" alt="logo" class="mb-30">
                <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for your family healthcare.
                </p>
                <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Departments</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Neurology Clinic</a></li>
                    <li><a href="#">Cardiology Clinic</a></li>
                    <li><a href="#">Pathology Clinic</a></li>
                    <li><a href="#">Laboratory Analysis</a></li>
                    <li><a href="#">Pediatric Clinic</a></li>
                    <li><a href="#">Cardiac Clinic</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our CLinic</a></li>
                    <li><a href="#">Our Doctors</a></li>
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Appointments</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <a href="tel:01061245741" class="phone__number">
                      <i class="icon-phone"></i> <span>01061245741</span>
                    </a>
                  </li>
                  <li class="color-body">2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>Get Directions</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <span class="fz-14">&copy; 2020 DataSoft, All Rights Reserved. With Love by</span>
              <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Cookies</a></li>
                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>