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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">About Us</a>
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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Shop</a>
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
    <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading">Caring For The Health & Well Being Of Family.</h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure.
            </p>
            <div class="d-flex flex-wrap align-items-center">
              <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
                <span>Find A Doctor</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="services.html" class="btn btn__white btn__rounded">
                <span>Our Services</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-40">Improving The Quality Of Your Life Through Better Health.</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="mb-30">Our goal is to deliver quality of care in a courteous, respectful, and compassionate
                manner. We hope you will allow us to care for you and to be the first and best choice for healthcare.
              </p>
              <p class="mb-30">We will work with you to develop individualised care plans, including management of
                chronic diseases. We are committed to being the region’s premier healthcare network providing patient
                centered care that inspires clinical and service excellence.</p>
              <div class="d-flex align-items-center mb-30">
                <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
                  Meet Our Doctors</a>
                <img src="assets/images/about/singnture.png" alt="singnture">
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="assets/images/about/1.jpg" alt="about">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ======================
    Features Layout 1
    ========================= -->
    <section class="features-layout1 pt-130 pb-50 mt--90">
      <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row mb-40">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading__layout2">
              <h3 class="heading__title">Providing Care for The Sickest In Community.</h3>
            </div>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="heading__desc font-weight-bold">Medcity has been present in Europe since 1990, offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure. With over 100
              professionals actively participates in numerous initiatives aimed at creating sustainable change for
              patients!
            </p>
            <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
              <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
                <span>Make Appointment</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="#" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Our Core Values</span>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                  <i class="icon-heart feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Medical Advices & Check Ups</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-doctor"></i>
                  <i class="icon-doctor feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Trusted Medical Treatment </h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-ambulance"></i>
                  <i class="icon-ambulance feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Emergency Help Available 24/7</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-drugs"></i>
                  <i class="icon-drugs feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Medical Research Professionals </h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-first-aid-kit"></i>
                  <i class="icon-first-aid-kit feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Only Qualified Doctors</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-hospital"></i>
                  <i class="icon-hospital feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Cutting Edge <br> Facility</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-expenses"></i>
                  <i class="icon-expenses feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Affordable Prices For All Patients</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-bandage"></i>
                  <i class="icon-bandage feature__overlay-icon"></i>
                </div>
                <h4 class="feature__title">Quality Care For Every Patient</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold mb-0">Serve the community by improving the quality of life through better health.
              We have put protocols to protect our patients and staff while continuing to provide medically necessary
              care.
              <a href="#" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <!-- ======================
     Work Process 
    ========================= -->
    <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row heading-layout2">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole Family!
            </h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop individualised
              care
              plans, including
              management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of
              practitioner you require. We treat all enquiries sensitively and in the strictest confidence.
            </p>
            <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
              <li>Fractures and dislocations</li>
              <li>Health Assessments</li>
              <li>Desensitisation injections</li>
              <li>High Quality Care</li>
              <li>Desensitisation injections</li>
            </ul>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container mt-90">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- process item #1 -->
                <div class="process-item">
                  <span class="process__number">01</span>
                  <div class="process__icon">
                    <i class="icon-health-report"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Fill In Our Medical Application</h4>
                  <p class="process__desc">Medcity offers low-cost health coverage for adults with limited income, you
                    can
                    enroll.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Doctors’ Timetable</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #2 -->
                <div class="process-item">
                  <span class="process__number">02</span>
                  <div class="process__icon">
                    <i class="icon-dna"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Review Your Family Medical History</h4>
                  <p class="process__desc">Regular health exams can help find all the problems, also can find it early
                    chances.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Start A Check Up</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #3 -->
                <div class="process-item">
                  <span class="process__number">03</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Choose Between Our Care Programs</h4>
                  <p class="process__desc">We have protocols to protect our patients while continuing to provide
                    necessary
                    care.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Explore Programs</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #4 -->
                <div class="process-item">
                  <span class="process__number">04</span>
                  <div class="process__icon">
                    <i class="icon-stethoscope"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Introduce You To Highly Qualified Doctors</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills and trained to
                    assist you. </p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Meet Our Doctors</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
                <!-- process-item #5 -->
                <div class="process-item">
                  <span class="process__number">05</span>
                  <div class="process__icon">
                    <i class="icon-head"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Your custom Next process</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills to assist you.
                  </p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <span>Meet Our Doctors</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.process-item -->
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="cta bg-primary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <img src="assets/images/icons/alert.png" alt="alert">
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-7 col-lg-7">
              <h4 class="cta__title">True Healthcare For Your Family!</h4>
              <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
                put protocols to protect our patients and staff while continuing to provide medically necessary care.
              </p>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
              <a href="appointment.html" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                <span>Healthcare Programs</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.cta -->
    </section><!-- /.Work Process -->

    <!-- ======================
      Team
    ========================= -->
    <section class="team-layout2 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h3 class="heading__title">Meet Our Doctors</h3>
              <p class="heading__desc">Our administration and support staff all have exceptional people skills and
                trained to assist you with all medical enquiries.
              </p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- Member #1 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/1.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Mike Dooley</a></h5>
                  <p class="member__job">Cardiology Specialist</p>
                  <p class="member__desc">Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane
                    University prior to attending St George's University School of Medicine</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #2 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/2.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Dermatologists</a></h5>
                  <p class="member__job">Cardiology Specialist</p>
                  <p class="member__desc">Brian specializes in treating skin, hair, nail, and mucous membrane. He also
                    address cosmetic issues, helping to revitalize the appearance of the skin</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #3 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/3.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Maria Andaloro</a></h5>
                  <p class="member__job">Pediatrician</p>
                  <p class="member__desc">Andaloro graduated from medical school and completed 3 years residency program
                    in pediatrics. She passed rigorous exams by the American Board of Pediatrics.</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #4 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/4.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Dupree Black</a></h5>
                  <p class="member__job">Urologist</p>
                  <p class="member__desc">Black diagnose and treat diseases of the urinary tract in both men and women.
                    He
                    also diagnose and treat anything involving the reproductive tract in men.</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #5 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/5.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Markus skar</a></h5>
                  <p class="member__job">Laboratory</p>
                  <p class="member__desc">Skar play a very important role in your health care. People working in the
                    clinical laboratory are responsible for conducting tests that provide crucial information.</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #6 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/6.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Kiano Barker</a></h5>
                  <p class="member__job">Pathologist </p>
                  <p class="member__desc">Barker help care for patients every day by providing their doctors with the
                    information needed to ensure appropriate care. He also valuable resources for other physicians.</p>
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team -->

    <!-- ========================= 
      Testimonials layout 1
      =========================  -->
    <section class="testimonials-layout1 pt-130 pb-80">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Inspiring Stories!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="testimonials__rating">
                <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate">4.9</span>
                  <div>
                    <span class="overall__rate">Zocdoc Overall Rating</span>
                    <span>, based on 7541 reviews.</span>
                  </div>
                </div><!-- /.testimonials__rating-inner -->
              </div><!-- /.testimonials__rating -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 1 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Resource Library</h2>
              <h3 class="heading__title">Recent Articles</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Mental Health</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">Martin King</a>
                </div>
                <h4 class="post__title"><a href="#">6 Tips to Protect Your Mental Health When You’re Sick</a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Infectious</a><a href="#">Tips</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">John Ezak</a>
                </div>
                <h4 class="post__title"><a href="#">Unsure About Wearing a Face Mask? Here’s How and Why</a></h4>
                <p class="post__desc">That means that you should still be following any shelter-in-place orders in your
                  community. But when you’re venturing out to the grocery store, pharmacy or hospital..
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Life Style</a><a href="#">Nutrition</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 28, 2022</span>
                  <a class="post__meta-author" href="#">Saul Wade</a>
                </div>
                <h4 class="post__title"><a href="#">Tips for Eating Healthy When You’re Working From Home </a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

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