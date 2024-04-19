<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tourist Venues</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="shortcut icon" href="img/fevicon.png" type="image/x-icon" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
      <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-twitter fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-facebook-f fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-linkedin-in fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-instagram fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
              href=""
              ><i class="fab fa-youtube fw-normal"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <!-- <a href="login.php"
              ><small class="me-3 text-light"
                ><i class="fa fa-user me-2"></i>Register</small
              ></a
            >
            <a href="login.php"
              ><small class="me-3 text-light"
                ><i class="fa fa-sign-in-alt me-2"></i>Login</small
              ></a
            > -->
            <div class="dropdown">
              <a
                href="#"
                class="dropdown-toggle text-light"
                data-bs-toggle="dropdown"
                ><small><i class="fa fa-home me-2"></i> My Dashboard</small></a
              >
              <div class="dropdown-menu rounded">
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-user-alt me-2"></i> My Profile</a
                >
                <!-- <a href="#" class="dropdown-item"
                  ><i class="fas fa-comment-alt me-2"></i> Inbox</a
                >
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-bell me-2"></i> Notifications</a
                >
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-cog me-2"></i> Account Settings</a
                > -->
                <a href="logout.php" class="dropdown-item"
                  ><i class="fas fa-power-off me-2"></i> Log Out</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
      <nav
        class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
      >
        <a href="" class="navbar-brand p-0">
          <h1 class="m-0"><i class="fas fa-route me-3"></i></h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
            <!-- <a href="packages.html" class="nav-item nav-link">Packages</a> -->
            <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->

            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >Services</a
              >
              <div class="dropdown-menu m-0">
                <!-- <a href="destination.html" class="dropdown-item">Destination</a> -->
                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                <!-- <a href="gallery.html" class="dropdown-item">Our Gallery</a> -->
                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
              </div>
            </div>
            <a href="gallery.html" class="nav-item nav-link">Gallery</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
          </div>
          <a
            href="booking.html"
            class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4"
            >Book Now</a
          >
        </div>
      </nav>

      <!-- Carousel Start -->
      <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li
              data-bs-target="#carouselId"
              data-bs-slide-to="0"
              class="active"
            ></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/carousel-2.jpg" class="img-fluid" alt="Image" />
              <div class="carousel-caption">
                <div class="p-3" style="max-width: 900px">
                  <h4
                    class="text-white text-uppercase fw-bold mb-4"
                    style="letter-spacing: 3px"
                  >
                    Explore Odisha With Us<?php echo $_SESSION['username']; ?>
                  </h4>
                  <h1 class="display-2 text-capitalize text-white mb-4">
                    Let's Visit Odisha Together!
                  </h1>
                  <p class="mb-5 fs-5">
                    The biggest adventure you can ever take is to live the life
                    of your dreams
                  </p>
                  <!-- <div class="d-flex align-items-center justify-content-center">
                    <a
                      class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                      href="login.php"
                      >Login</a
                    >
                  </div> -->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/carousel-1.jpg" class="img-fluid" alt="Image" />
              <div class="carousel-caption">
                <div class="p-3" style="max-width: 900px">
                  <h4
                    class="text-white text-uppercase fw-bold mb-4"
                    style="letter-spacing: 3px"
                  >
                    Explore Odisha with Us
                  </h4>
                  <h1 class="display-2 text-capitalize text-white mb-4">
                    Find Your Perfect Tour At Travel
                  </h1>
                  <p class="mb-5 fs-5">
                    Odisha Tours offers an immersive journey into the heart of
                    India's culturally rich state, Odisha. With its diverse
                    landscapes, ancient temples, vibrant festivals, and serene
                    beaches, Odisha promises an unforgettable travel experience.
                    Whether you're a history buff, a nature enthusiast, or a
                    beach lover, All Odisha Tours has something special to offer
                    for every traveler.
                  </p>
                  <div class="d-flex align-items-center justify-content-center">
                    <!-- <a
                      class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                      href="login.php"
                      >Login</a
                    > -->
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/carousel-3.jpg" class="img-fluid" alt="Image" />
              <div class="carousel-caption">
                <div class="p-3" style="max-width: 900px">
                  <h4
                    class="text-white text-uppercase fw-bold mb-4"
                    style="letter-spacing: 3px"
                  >
                    Explore odisha us
                  </h4>
                  <h1 class="display-2 text-capitalize text-white mb-4">
                    You Like To Go?
                  </h1>
                  <p class="mb-5 fs-5">
                    The biggest adventure you can ever take is to live the life
                    of your dreams
                  </p>
                  <div class="d-flex align-items-center justify-content-center">
                    <!-- <a
                      class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                      href="login.php"
                      >Login</a
                    > -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon btn bg-primary"
              aria-hidden="false"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon btn bg-primary"
              aria-hidden="false"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Carousel End -->
    </div>
    <div
      class="container-fluid search-bar position-relative"
      style="top: -50%; transform: translateY(-50%)"
    >
      <div class="container">
        <div
          class="position-relative rounded-pill w-100 mx-auto p-5"
          style="background: rgba(26, 19, 123, 0.8)"
        >
        <form id="searchForm" method="POST" action="http://127.0.0.1:5000/recommend">
          <input
            name="user_input"
            class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
            type="text"
            placeholder="Search place name"
          />
          <button
            id="SearchBtn"
            type="submit"
            class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
            style="top: 50%; right: 46px; transform: translateY(-50%)"
          >
          Search
          </button>
        </form>
          <!--a href="http://127.0.0.1:5000/" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%)"
            >Search</a
          -->
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5">
            <div
              class="h-100"
              style="
                border: 50px solid;
                border-color: transparent #13357b transparent #13357b;
              "
            >
              <img src="img/about.png" class="img-fluid w-100 h-100" alt="" />
            </div>
          </div>
          <div
            class="col-lg-7"
            style="
              background: linear-gradient(
                  rgba(255, 255, 255, 0.8),
                  rgba(255, 255, 255, 0.8)
                ),
                url(img/about-img-1.png);
            "
          >
            <h5 class="section-about-title pe-3">About Us</h5>
            <h1 class="mb-4">
              Welcome to <span class="text-primary">Tourist Venues</span>
            </h1>
            <p class="mb-4">
              Nurtured from the seed of a single idea ‘to empower the traveller
              with easy & instant travel bookings providing comprehensive
              choices’, Tourist Venues is a pioneer in Odisha’s online travel
              space. Founded by Gecian in the year 2024, Tourist Venues began
              its journey by serving the Odisha travel market with best-value
              products & services, powered by robust technology and
              round-the-clock customer support.
            </p>
            <p class="mb-4">
              As low-cost budget carriers were introduced in Odisha, the number
              of people opting for online travel solutions also increased
              rapidly. And Tourist Venues answered the call of the hour, by
              bringing the convenience of booking guide, hotels, and holiday
              packages in just a few clicks.
            </p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>First Class
                  Flights
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Trending Place
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>5 Star
                  Accommodations
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Latest
                  Model Vehicles
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>50+
                  Premium City Tours
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>24/7
                  Service
                </p>
              </div>
            </div>
            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href=""
              >Read More</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
      <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px">
          <h5 class="section-title px-3">Searvices</h5>
          <h1 class="mb-0">Discover Our Comprehensive Travel Services</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="row g-4">
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0"
                >
                  <div class="service-content text-end">
                    <h5 class="mb-4">All Odisha Tours</h5>
                    <p class="mb-0">
                      Welcome to Odisha, a land steeped in history, culture, and
                      natural beauty. At Odisha Guide Service, we are dedicated
                      to helping you unlock the treasures of this enchanting
                      region with our comprehensive range of travel services.
                    </p>
                  </div>
                  <div class="service-icon p-4">
                    <i class="fa fa-map-pin fa-4x text-primary"></i>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0"
                >
                  <div class="service-content text-end">
                    <h5 class="mb-4">Hotel Reservation</h5>
                    <p class="mb-0">
                      Now Say goodbye to endless searching and let us find you
                      the best deals on flights to your dream destinations. With
                      access to a vast numbers of hotels, we'll help you
                      secure the perfect itinerary at the best price.
                    </p>
                  </div>
                  <div class="service-icon p-4">
                    <i class="fa fa-hotel fa-4x text-primary"></i>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0"
                >
                  <div class="service-content text-end">
                    <h5 class="mb-4">Travel Guides</h5>
                    <p class="mb-0">
                      Our team of experienced guides are passionate about
                      sharing the beauty and heritage of Odisha with travelers
                      from around the world. With their wealth of knowledge and
                      local insights, they'll ensure that your journey is not
                      just memorable, but truly transformative.
                    </p>
                  </div>
                  <div class="service-icon p-4">
                    <i class="fa fa-user fa-4x text-primary"></i>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0"
                >
                  <div class="service-content text-end">
                    <h5 class="mb-4">24/7 Support</h5>
                    <p class="mb-0">
                      Our dedicated team of travel experts is here for you
                      around the clock, ready to assist with any inquiries,
                      changes, or emergencies you may encounter during your
                      travels.No matter the time zone or the nature of your
                      inquiry, we're committed to providing prompt and reliable
                      assistance to help you navigate any situation that may
                      arise.
                    </p>
                  </div>
                  <div class="service-icon p-4">
                    <i class="fa fa-cog fa-4x text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-4">
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0"
                >
                  <div class="service-icon p-4">
                    <i class="fa fa-bell fa-4x text-primary"></i>
                  </div>
                  <div class="service-content">
                    <h5 class="mb-4">Recommendation</h5>
                    <p class="mb-0">
                      Experience the joy of travel made just for you with
                      personalized recommendations from Odisha Guide Service.
                      Let us be your trusted companion in crafting unforgettable
                      adventures that reflect your individuality and wanderlust
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0"
                >
                  <div class="service-icon p-4">
                    <i class="fa fa-plane fa-4x text-primary"></i>
                  </div>
                  <div class="service-content">
                    <h5 class="mb-4">Air Trip</h5>
                    <p class="mb-0">
                      It's time to say goodbye to endless searching and let us
                      find you the best deals on flights to your dream
                      destinations. With access to a vast network of airlines,
                      we'll help you secure the perfect itinerary at the best
                      price.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0"
                >
                  <div class="service-icon p-4">
                    <i class="fa fa-train fa-4x text-primary"></i>
                  </div>
                  <div class="service-content">
                    <h5 class="mb-4">Train Trips</h5>
                    <p class="mb-0">
                      With Tourist Venues Service, your train journey is just
                      the beginning of a larger exploration of this captivating
                      region. Let us be your guide as you traverse the
                      landscapes of Odisha by rail, uncovering the beauty and
                      diversity that await around every bend of the track
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div
                  class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0"
                >
                  <div class="service-icon p-4">
                    <i class="fa fa-bus fa-4x text-primary"></i>
                  </div>
                  <div class="service-content">
                    <h5 class="mb-4">Bus Trip</h5>
                    <p class="mb-0">
                      With Tourist Venues Service, your bus trip is more than
                      just a mode of transportation – it's an opportunity to
                      connect with the essence of Odisha and create lasting
                      memories with fellow travelers. Join us as we embark on a
                      road trip like no other, exploring the wonders of Odisha
                      one stop at a time."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="text-center">
              <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href=""
                >Service More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services End -->

    <!-- Destination Start -->
    <div class="container-fluid destination py-5">
      <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px">
          <h5 class="section-title px-3">Destination</h5>
          <h1 class="mb-0">Popular Destination</h1>
        </div>
        <div class="tab-class text-center">
          <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                data-bs-toggle="pill"
                href="#tab-1"
              >
                <span class="text-dark" style="width: 150px">All</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-2"
              >
                <span class="text-dark" style="width: 150px">Puri</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-3"
              >
                <span class="text-dark" style="width: 150px">Khordha</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-4"
              >
                <span class="text-dark" style="width: 150px">Balasore</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-5"
              >
                <span class="text-dark" style="width: 150px">Mayurbhanj</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#tab-6"
              >
                <span class="text-dark" style="width: 150px">Keonjhar</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-xl-8">
                  <div class="row g-4">
                    <div class="col-lg-6">
                      <div class="destination-img">
                        <img
                          class="img-fluid rounded w-100"
                          src="./OD-Images/puri1.jpg"
                          alt=""
                        />
                        <div class="destination-overlay p-4">
                          <a
                            href="gallery.html"
                            class="btn btn-primary text-white rounded-pill border py-2 px-3"
                            >See More</a
                          >
                          <h4 class="text-white mb-2 mt-3">Jagannath Temple</h4>
                          <a href="gallery.html" class="btn-hover text-white"
                            >View Place
                            <i class="fa fa-arrow-right ms-2"></i
                          ></a>
                        </div>
                        <div class="search-icon">
                          <a
                            href="./OD-Images/puri1.jpg"
                            data-lightbox="destination-1"
                            ><i
                              class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                            ></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="destination-img">
                        <img
                          class="img-fluid rounded w-100"
                          src="./OD-Images/Konarka.jpg"
                          alt=""
                        />
                        <div class="destination-overlay p-4">
                          <a
                            href="gallery.html"
                            class="btn btn-primary text-white rounded-pill border py-2 px-3"
                            >See More</a
                          >
                          <h4 class="text-white mb-2 mt-3">Konark Temple</h4>
                          <a href="gallery.html" class="btn-hover text-white"
                            >View Place
                            <i class="fa fa-arrow-right ms-2"></i
                          ></a>
                        </div>
                        <div class="search-icon">
                          <a href="./OD-Images/Konarka.jpg" data-lightbox="destination-2"
                            ><i
                              class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                            ></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="destination-img">
                        <img
                          class="img-fluid rounded w-100"
                          src="./OD-Images/khordha1.jpg"
                          alt=""
                        />
                        <div class="destination-overlay p-4">
                          <a
                            href="gallery.html"
                            class="btn btn-primary text-white rounded-pill border py-2 px-3"
                            >See More</a
                          >
                          <h4 class="text-white mb-2 mt-3">Lingaraj Temple</h4>
                          <a href="gallery.html" class="btn-hover text-white"
                            >View Place
                            <i class="fa fa-arrow-right ms-2"></i
                          ></a>
                        </div>
                        <div class="search-icon">
                          <a href="./OD-Images/khordha1.jpg" data-lightbox="destination-7"
                            ><i
                              class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                            ></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="destination-img">
                        <img
                          class="img-fluid rounded w-100"
                          src="./OD-Images/khordha2.jpg"
                          alt=""
                        />
                        <div class="destination-overlay p-4">
                          <a
                            href="gallery.html"
                            class="btn btn-primary text-white rounded-pill border py-2 px-3"
                            >See More</a
                          >
                          <h4 class="text-white mb-2 mt-3">Nandankanan</h4>
                          <a href="gallery.html" class="btn-hover text-white"
                            >View Place
                            <i class="fa fa-arrow-right ms-2"></i
                          ></a>
                        </div>
                        <div class="search-icon">
                          <a href="./OD-Images/khordha2.jpg" data-lightbox="destination-8"
                            ><i
                              class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                            ></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="destination-img h-100">
                    <img
                      class="img-fluid rounded w-100 h-100"
                      src="./OD-Images/destination-9.jpg"
                      style="object-fit: cover; min-height: 300px"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="gallery.html"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">ALL</h4>
                      <a href="gallery.html" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a
                        href="./OD-Images/destination-9.jpg"
                        data-lightbox="destination-4"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/emami.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="gallery.html"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Emami Jagannath Temple</h4>
                      <a href="gallery.html" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/emami.jpg" data-lightbox="destination-4"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/seabeach.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="gallery.html"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Sea Beach</h4>
                      <a href="gallery.html" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/seabeach.jpg" data-lightbox="destination-5"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/dhauli.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="gallery.html"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Hill Area</h4>
                      <a href="gallery.html" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/dhauli.jpg" data-lightbox="destination-6"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/puri1.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/puri/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">
                        Jagannath Temple
                      </h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/puri1.jpg" data-lightbox="odisha1"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/puri2.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/puri/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">
                        Konark Temple
                      </h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/puri2.jpg" data-lightbox="odisha2"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/k1.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/khordha/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Khordha</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="OD-Images/k1.jpg" data-lightbox="destination-5"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/k2.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/khordha/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Khordha</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/k2.jpg" data-lightbox="destination-6"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-4" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/emami.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/balesore/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Balasore</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a
                        href="./OD-Images/emami.jpg"
                        data-lightbox="destination-5"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/seabeach.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/balesore/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Balasore</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a
                        href="./OD-Images/seabeach.jpg"
                        data-lightbox="destination-6"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-5" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/mayurbhanj1.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/mayurbhanj/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Mayurbhanj</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/mayurbhanj1.jpg" data-lightbox="destination-5"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/mayurbhanj2.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/mayurbhanj/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Mayurbhanj</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/mayurbhanj2.jpg" data-lightbox="destination-6"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab-6" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/Keonjhar1.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/keonjhar/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Keonjhar</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a href="./OD-Images/Keonjhar1.jpg" data-lightbox="destination-5"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="destination-img">
                    <img
                      class="img-fluid rounded w-100"
                      src="./OD-Images/Keonjhar2.jpg"
                      alt=""
                    />
                    <div class="destination-overlay p-4">
                      <a
                        href="https://odishatour.in/keonjhar/"
                        class="btn btn-primary text-white rounded-pill border py-2 px-3"
                        >See More</a
                      >
                      <h4 class="text-white mb-2 mt-3">Keonjhar</h4>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                    <div class="search-icon">
                      <a
                        href="./OD-Images/Keonjhar2.jpg"
                        data-lightbox="destination-6"
                        ><i
                          class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Destination End -->

    <!-- Explore Tour Start -->
    <div class="container-fluid ExploreTour py-5">
      <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px">
          <h5 class="section-title px-3">Explore Tour</h5>
          <h1 class="mb-4">The Odisha</h1>
          <p class="mb-0">
            Traveling is a brutality. It forces you to trust strangers and to
            lose sight of all that familiar comforts of home and friends. You
            are constantly off balance. Nothing is yours except the essential
            things. -air, sleep, dreams, the sea, the sky. -all things tending
            towards the eternal or what we imagine of it.
          </p>
        </div>
        <div class="tab-class text-center">
          <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
              <a
                class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                data-bs-toggle="pill"
                href="#NationalTab-1"
              >
                <span class="text-dark" style="width: 250px"
                  >Near By Category</span
                >
              </a>
            </li>
            <li class="nav-item">
              <a
                class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill"
                data-bs-toggle="pill"
                href="#InternationalTab-2"
              >
                <span class="text-dark" style="width: 250px"
                  >National Tour Category</span
                >
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="NationalTab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb1.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Weekend Tour
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb2.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Holiday Tour
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb3.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Road Trip
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="tour-offer bg-info">15% Off</div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb4.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Historical Trip
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb5.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Family Tour
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="tour-offer bg-warning">50% Off</div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      src="img/explore-tour-nb6.jpg"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          Beach Tour
                        </h5>
                        <a href="gallery.html" class="btn-hover text-white"
                          >View Place <i class="fa fa-arrow-right ms-2"></i
                        ></a>
                      </div>
                    </div>
                    <div class="national-plus-icon">
                      <a href="#" class="my-auto"
                        ><i class="fas fa-link fa-2x text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="InternationalTab-2" class="tab-pane fade show p-0">
              <div class="InternationalTour-carousel owl-carousel">
                <div class="international-item">
                  <img
                    src="img/National Tour-1.jpg "
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                  <div class="international-content">
                    <div class="international-info">
                      <h5 class="text-white text-uppercase mb-2">Mumbai</h5>
                      <a href="#" class="btn-hover text-white me-4"
                        ><i class="fas fa-map-marker-alt me-1"></i> 8 Cities</a
                      >
                      <a href="gallery.html" class="btn-hover text-white"
                        ><i class="fa fa-eye ms-2"></i>
                        <span>143+ Tour Places</span></a
                      >
                    </div>
                  </div>
                  <div class="tour-offer bg-success">30% Off</div>
                  <div class="international-plus-icon">
                    <a href="#" class="my-auto"
                      ><i class="fas fa-link fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
                <div class="international-item">
                  <img
                    src="img/National Tour-2.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                  <div class="international-content">
                    <div class="international-info">
                      <h5 class="text-white text-uppercase mb-2">Goa</h5>
                      <a href="#" class="btn-hover text-white me-4"
                        ><i class="fas fa-map-marker-alt me-1"></i> 12 Cities</a
                      >
                      <a href="gallery.html" class="btn-hover text-white"
                        ><i class="fa fa-eye ms-2"></i>
                        <span>21+ Tour Places</span></a
                      >
                    </div>
                  </div>
                  <div class="international-plus-icon">
                    <a href="#" class="my-auto"
                      ><i class="fas fa-link fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
                <div class="international-item">
                  <img
                    src="img/National Tour-3.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                  <div class="international-content">
                    <div class="tour-offer bg-warning">65% Off</div>
                    <div class="international-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha</h5>
                      <a href="#" class="btn-hover text-white me-4"
                        ><i class="fas fa-map-marker-alt me-1"></i> 9 Cities</a
                      >
                      <a href="gallery.html" class="btn-hover text-white"
                        ><i class="fa fa-eye ms-2"></i>
                        <span>133+ Tour Places</span></a
                      >
                    </div>
                  </div>
                  <div class="international-plus-icon">
                    <a href="#" class="my-auto"
                      ><i class="fas fa-link fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
                <div class="international-item">
                  <img
                    src="img/National Tour-4.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                  <div class="international-content">
                    <div class="international-info">
                      <h5 class="text-white text-uppercase mb-2">Delhi</h5>
                      <a href="#" class="btn-hover text-white me-4"
                        ><i class="fas fa-map-marker-alt me-1"></i> 8 Cities</a
                      >
                      <a href="gallery.html" class="btn-hover text-white"
                        ><i class="fa fa-eye ms-2"></i>
                        <span>137+ Tour Places</span></a
                      >
                    </div>
                  </div>
                  <div class="international-plus-icon">
                    <a href="#" class="my-auto"
                      ><i class="fas fa-link fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
                <div class="international-item">
                  <img
                    src="img/National Tour-5.jpg"
                    class="img-fluid w-100 rounded"
                    alt="Image"
                  />
                  <div class="international-content">
                    <div class="tour-offer bg-info">40% Off</div>
                    <div class="international-info">
                      <h5 class="text-white text-uppercase mb-2">Punjab</h5>
                      <a href="#" class="btn-hover text-white me-4"
                        ><i class="fas fa-map-marker-alt me-1"></i> 17 Cities</a
                      >
                      <a href="gallery.html" class="btn-hover text-white"
                        ><i class="fa fa-eye ms-2"></i>
                        <span>26+ Tour Places</span></a
                      >
                    </div>
                  </div>
                  <div class="international-plus-icon">
                    <a href="#" class="my-auto"
                      ><i class="fas fa-link fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Explore Tour Start -->

    <!-- Packages Start -->
    <!-- <div class="container-fluid packages py-5">
      <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px">
          <h5 class="section-title px-3">Packages</h5>
          <h1 class="mb-0">Awesome Packages</h1>
        </div>
        <div class="packages-carousel owl-carousel">
          <div class="packages-item">
            <div class="packages-img">
              <img
                src="img/packages-4.jpg"
                class="img-fluid w-100 rounded-top"
                alt="Image"
              />
              <div
                class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                style="width: 100%; bottom: 0; left: 0; z-index: 5"
              >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt me-2"></i>Venice -
                  Italy</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt me-2"></i>3 days</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user me-2"></i>2 Person</small
                >
              </div>
              <div class="packages-price py-2 px-4">$349.00</div>
            </div>
            <div class="packages-content bg-light">
              <div class="p-4 pb-0">
                <h5 class="mb-0">Venice - Italy</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p class="mb-4">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Nesciunt nemo quia quae illum aperiam fugiat voluptatem
                  repellat
                </p>
              </div>
              <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Read More</a
                  >
                </div>
                <div class="col-6 text-end px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Book Now</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="packages-item">
            <div class="packages-img">
              <img
                src="img/packages-2.jpg"
                class="img-fluid w-100 rounded-top"
                alt="Image"
              />
              <div
                class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                style="width: 100%; bottom: 0; left: 0; z-index: 5"
              >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt me-2"></i>Venice -
                  Italy</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt me-2"></i>3 days</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user me-2"></i>2 Person</small
                >
              </div>
              <div class="packages-price py-2 px-4">$449.00</div>
            </div>
            <div class="packages-content bg-light">
              <div class="p-4 pb-0">
                <h5 class="mb-0">The New California</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p class="mb-4">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Nesciunt nemo quia quae illum aperiam fugiat voluptatem
                  repellat
                </p>
              </div>
              <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Read More</a
                  >
                </div>
                <div class="col-6 text-end px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Book Now</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="packages-item">
            <div class="packages-img">
              <img
                src="img/packages-3.jpg"
                class="img-fluid w-100 rounded-top"
                alt="Image"
              />
              <div
                class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                style="width: 100%; bottom: 0; left: 0; z-index: 5"
              >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt me-2"></i>Venice -
                  Italy</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt me-2"></i>3 days</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user me-2"></i>2 Person</small
                >
              </div>
              <div class="packages-price py-2 px-4">$549.00</div>
            </div>
            <div class="packages-content bg-light">
              <div class="p-4 pb-0">
                <h5 class="mb-0">Discover Japan</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p class="mb-4">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Nesciunt nemo quia quae illum aperiam fugiat voluptatem
                  repellat
                </p>
              </div>
              <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Read More</a
                  >
                </div>
                <div class="col-6 text-end px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Book Now</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="packages-item">
            <div class="packages-img">
              <img
                src="img/packages-1.jpg"
                class="img-fluid w-100 rounded-top"
                alt="Image"
              />
              <div
                class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                style="width: 100%; bottom: 0; left: 0; z-index: 5"
              >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-map-marker-alt me-2"></i>Thayland</small
                >
                <small class="flex-fill text-center border-end py-2"
                  ><i class="fa fa-calendar-alt me-2"></i>3 days</small
                >
                <small class="flex-fill text-center py-2"
                  ><i class="fa fa-user me-2"></i>2 Person</small
                >
              </div>
              <div class="packages-price py-2 px-4">$649.00</div>
            </div>
            <div class="packages-content bg-light">
              <div class="p-4 pb-0">
                <h5 class="mb-0">Thayland Trip</h5>
                <small class="text-uppercase">Hotel Deals</small>
                <div class="mb-3">
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                  <small class="fa fa-star text-primary"></small>
                </div>
                <p class="mb-4">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Nesciunt nemo quia quae illum aperiam fugiat voluptatem
                  repellat
                </p>
              </div>
              <div class="row bg-primary rounded-bottom mx-0">
                <div class="col-6 text-start px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Read More</a
                  >
                </div>
                <div class="col-6 text-end px-0">
                  <a href="#" class="btn-hover btn text-white py-2 px-4"
                    >Book Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Packages End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5">
      <div class="mx-auto text-center mb-5" style="max-width: 900px">
        <h5 class="section-title px-3">Our Gallery</h5>
        <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
        <p class="mb-0">
          Welcome to our captivating gallery, where every image tells a story and every moment invites you to embark on a journey. Step into a world of wanderlust as you browse through our carefully curated collection of breathtaking destinations, iconic landmarks, and unforgettable experiences.


        </p>
      </div>
      <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
          <li class="nav-item">
            <a
              class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
              data-bs-toggle="pill"
              href="#GalleryTab-1"
            >
              <span class="text-dark" style="width: 150px">All</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill"
              data-bs-toggle="pill"
              href="#GalleryTab-2"
            >
              <span class="text-dark" style="width: 150px">Family Tour</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
              data-bs-toggle="pill"
              href="#GalleryTab-3"
            >
              <span class="text-dark" style="width: 150px">Ocean Tour</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
              data-bs-toggle="pill"
              href="#GalleryTab-4"
            >
              <span class="text-dark" style="width: 150px">Summer Tour</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill"
              data-bs-toggle="pill"
              href="#GalleryTab-5"
            >
              <span class="text-dark" style="width: 150px">Sport Tour</span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
            <div class="row g-2">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new1.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new1.jpg"
                      data-lightbox="gallery-1"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new2.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new3.jpg"
                      data-lightbox="gallery-3"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new4.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new4.jpg"
                      data-lightbox="gallery-4"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new5.jpg"
                      data-lightbox="gallery-5"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new6.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new6.jpg"
                      data-lightbox="gallery-6"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new7.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new7.jpg"
                      data-lightbox="gallery-7"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new8.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new8.jpg"
                      data-lightbox="gallery-8"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-new9.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-new9.jpg"
                      data-lightbox="gallery-9"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="./OD-Images/emami.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Odisha Tour</h5>
                      <a href="https://odishatour.in/district-wise-tourist-places-in-odisha/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="./OD-Images/emami.jpg"
                      data-lightbox="gallery-10"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="GalleryTab-2" class="tab-pane fade show p-0">
            <div class="row g-2">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new1.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new1.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>




              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new2.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>





              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new3.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new4.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new4.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tourr</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new5.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new6.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new6.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new7.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new7.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/family-tour-new8.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                      <a href="https://odishatour.in/?s=family+tour&post_type=post" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/family-tour-new8.jpg"
                      data-lightbox="gallery-3"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="GalleryTab-3" class="tab-pane fade show p-0">
            <div class="row g-2">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new1.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new1.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new2"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new3.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new4.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new4.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new5.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/ocean-tour-new6.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="#" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/ocean-tour-new6.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-2.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/gallery-3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Ocean Tour</h5>
                      <a href="https://odishatour.in/category/sea-beach/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/gallery-3.jpg"
                      data-lightbox="gallery-3"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="GalleryTab-4" class="tab-pane fade show p-0">
            <div class="row g-2">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="./OD-Images/seabeach.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="./OD-Images/seabeach.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new2.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>




              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tourr</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new3.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new4.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new4.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new5.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new6.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new6.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new7.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new7.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="img/summer-tour-new8.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Summer Tour</h5>
                      <a href="https://odishatour.in/category/dam/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/summer-tour-new8.jpg"
                      data-lightbox="gallery-3"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="GalleryTab-5" class="tab-pane fade show p-0">
            <div class="row g-2">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new1.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new1.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>





              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new2.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new3.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>




              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new3.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new3.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>




              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new4.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new4.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>




              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new5.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new5.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new6.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="hhttps://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new6.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="gallery-item h-100">
                  <img
                    src="img/sport-tour-new7.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="img/sport-tour-new7.jpg"
                      data-lightbox="gallery-2"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                <div class="gallery-item h-100">
                  <img
                    src="./OD-Images/dhauli.jpg"
                    class="img-fluid w-100 h-100 rounded"
                    alt="Image"
                  />
                  <div class="gallery-content">
                    <div class="gallery-info">
                      <h5 class="text-white text-uppercase mb-2">Sport Tour</h5>
                      <a href="https://odishatour.in/category/hill-station/" class="btn-hover text-white"
                        >View Place <i class="fa fa-arrow-right ms-2"></i
                      ></a>
                    </div>
                  </div>
                  <div class="gallery-plus-icon">
                    <a
                      href="./OD-Images/dhauli.jpg"
                      data-lightbox="gallery-3"
                      class="my-auto"
                      ><i class="fas fa-plus fa-2x text-white"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h5 class="section-booking-title pe-3">Booking</h5>
            <h1 class="text-white mb-4">Online Booking</h1>
            <p class="text-white mb-4">
              Welcome to Tourist Venues, your ultimate destination for
              hassle-free travel booking! Our user-friendly interface offers a
              seamless experience, allowing you to effortlessly plan and book
              your dream vacation.
            </p>
            <p class="text-white mb-4">
              Manage your travel itinerary with ease, from flight schedules to
              hotel reservations and activities, all conveniently accessible in
              one place. Our responsive design ensures a seamless experience
              across all devices, so you can book your travel anytime, anywhere.
            </p>
            <!-- <a
              href="#"
              class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2"
              >Read More</a
            > -->
          </div>
          <div class="col-lg-6">
            <h1 class="text-white mb-3">Book A Tour Guide</h1>
            <p class="text-white mb-4">
              Get <span class="text-warning">50% Off</span> On Your First
              Adventure Trip With Us. Get More Deal Offers Here.
            </p>
            <form action="pay.php" method="post">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-white border-0"
                      id="name"
                      placeholder="name" 
                     
                    />
                    <label for="name">Name</label>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-floating">
                    <input
                    
                      type="email"
                      class="form-control bg-white border-0"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div> -->
                <div class="col-md-6">
                  <div class="form-floating" >
                    <select class="form-select bg-white border-0" id="select1" required >
                      <option value="0">Choose a Destination</option>
                      <option value="1">SAILA SRIKHETRA</option>
                      <option value="2">TIKARPADA WILDLIFE SANCTUARY</option>
                      <option value="3">MAA HINGULA TEMPLE</option>
                      <option value="4">SATAKOSIA TIGER RESERVE</option>
                      <option value="5">SURESWARI WATERFALL</option>
                      <option value="6">JOGINDRA VILLA PALACE</option>
                      <option value="7">NAYAKPADA CAVE</option>
                      <option value="8">PADMATOLA SANCTUARY</option>
                      <option value="9">CHARISAMBHU TEMPLE</option>
                      <option value="10">CHANDI TEMPLE</option>
                      <option value="11">GANDHAMARDAN HILLS</option>
                      <option value="12"> HARISHANKAR TEMPLE</option>
                      <option value="13">TUREKELA WILDLIFE SANCTUARY</option>
                      <option value="14">SAILASHREE PALACE</option>
                      <option value="15">PATANESWARI TEMPLE</option>
                      <option value="16">AAPKHOL WATERFALLS</option>
                      <option value="17">BARABAKHARA WATERFALL & CAVE</option>
                      <option value="18">SHYAMA KALI TEMPLE</option>
                      <option value="19">PATHARSENI TEMPLE</option>
                      <option value="20">SWAPNESWAR TEMPLE</option>
                      <option value="21">CHANDIPUR BEACH</option>
                      <option value="22">KHIRACHORA TEMPLE</option>
                      <option value="23">EMAMI JAGANNATH TEMPLE</option>
                      <option value="24">PANCHALINGESWAR TEMPLE</option>
                      <option value="25">KULDIHA WILDLIFE SANCTUARY</option>
                      <option value="26">DHAMARAI TEMPLE</option>
                      <option value="27">MAA BHADRAKALI TEMPLE</option>
                      <option value="28">AKHANDALAMANI TEMLPLE</option>
                      <option value="29">RAKTATIRTHA</option>
                      <option value="30">DHAMRA PORT</option>
                      <option value="31">BARABATI FORT</option>
                      <option value="32">MAA CUTTACK CHANDI TEMPLE</option>
                      <option value="33">MAHANADI RIVER  BEACH</option>
                      <option value="34">LALITGIRI BUDDHIST COMPLEX</option>
                      <option value="35">NETAJI BIRTH PLACE MUSEUM</option>
                      <option value="36">PRADHANPAT WATERFALL</option>
                      <option value="37">DEOGARH RAJBATI PALACE</option>
                      <option value="38">AKSHARSHILA ROCK</option>
                      <option value="39">KALAJIRA DAM</option>
                      <option value="40">KATASAR GHAT SHIVA TEMPLE</option>
                      <option value="41">KAPILASH MAHADEV TEMPLE</option>
                      <option value="42">LORD VISHNU ANANTASAYANA</option>
                      <option value="43">ASTASHAMBHU TEMPLE</option>
                      <option value="44">SAPTASAJYA HILL</option>
                      <option value="45">SAPUA DAM</option>
                      <option value="46">TARATARINI TMPLE</option>
                      <option value="47">TARATARINI TMPLE</option>
                      <option value="48">RAMBHA LAKE & BIRD ISLAND</option>
                      <option value="49">GOPALPUR BEACH</option>
                      <option value="50">JAUGADA FORT</option>
                      <option value="51">ARYAPALLI MARINE BEACH</option>
                      <option value="52">GAJAPATI PALACE</option>
                      <option value="53">PADMASAMBHAVA STATUE</option>
                      <option value="54">MAHENDRAGIRI HILL</option>
                      <option value="55">GANDAHATI WATERFALL</option>
                      <option value="56">BRUNDABAN PALACE</option>
                      <option value="57">RAM CHANDI TEMPLE</option>
                      <option value="58">JHADESWAR TEMPLE</option>
                      <option value="59">VIKRAMKHOL CAVE</option>
                      <option value="60">RAMPALUGA ISLAND</option>
                      <option value="61">KOILIGHUGHAR WATERFALL</option>
                      <option value="62">CHHATIA BATA TEMPLE</option>
                      <option value="63">BIRAJA TMEPLE</option>
                      <option value="64">RATNAGIRI MONASTERY</option>
                      <option value="65">OLASUNI TEMPLE</option>
                      <option value="66">ASHOKJHAR WATERFALL</option>
                      <option value="67">PARADEEP PORT</option>
                      <option value="68">SIALI SEA BEACH</option>
                      <option value="69">SARALA TEMPLE</option>
                      <option value="70">MARINE AQUARIUM</option>
                      <option value="71">GOBARDHANA PITHA,GAROI ASHRAM</option>
                      <option value="72">CHILIKA LAKE</option>
                      <option value="73">NANDANKANAN ZOOLOGICAL PARK</option>
                      <option value="74">LINGARAJ TEMPLE</option>
                      <option value="75">UDAYAGIRI AND KHANDAGIRI CAVES</option>
                      <option value="76">ODISHA STATE MUSEUM</option>
                      <option value="77">TARINI TEMPLE</option>
                      <option value="78">SANAGHAGARA & BADAGHAGARA WATERFALLS</option>
                      <option value="79">GONASIKA TEMPLE</option>
                      <option value="80">KESHRI KUNDA</option>
                      <option value="81">KHANDADHAR WATERFALL</option>
                      <option value="82">ASURGARH FORT</option>
                      <option value="83">UMA MAHESWARI TEMPLE</option>
                      <option value="84">AMBAPANI SANCTUARY</option>
                      <option value="85">GUDAHANDI WATERFALL</option>
                      <option value="86">LANKHESWARI TEMPLE</option>
                      <option value="87">BUTTERFLY NATURE PARK</option>
                      <option value="88">DARINGBADI HILL STATION</option>
                      <option value="89">MANDASARU VALLEY NATURE CAMP</option>
                      <option value="90">BELGHAR NATURE CAMP</option>
                      <option value="91">MAA BARALA DEVI TEMPLE</option>
                      <option value="92">TRIBAL MUSEUM</option>
                      <option value="93">GUPTESWAR MAHADEEV TEMPLE</option>
                      <option value="94">DUDUMA WATERFALLS</option>
                      <option value="95">JAGANNATH SAGAR</option>
                      <option value="96">HANUMAN TEMPLE</option>
                      <option value="97">HUKITOLA ISLAND</option>
                      <option value="98">BHITARKANIKA NATIONAL PARK</option>
                      <option value="99">MAA GOJABAYANI TEMPLE</option>
                      <option value="100">RAJKANIKA PALACE</option>
                      <option value="101">PENTHA SEA BEACH</option>
                      <option value="102">BALIMELA RESERVOIR,CHITRAKONDA DAM</option>
                      <option value="103">KANGERGHATI NATIONAL PARK</option>
                      <option value="104">AMMAKUNDA WATERPARK</option>
                      <option value="105">BONDA HILL</option>
                      <option value="106">EKAGUDI WATERFALL</option>
                      <option value="107">JAGANNATH TEMPLE</option>
                      <option value="108">SIMILIPAL NATIONAL PARK</option>
                      <option value="109">DEVKUND AMBIKA TEMPLE</option>
                      <option value="110">BELGADIA PALACE</option>
                      <option value="111">SULAIPAT DAM & KHADAKHAI DAM</option>
                      <option value="112">DEER PARK</option>
                      <option value="113">BHANDARA GHARANI TEMPLE</option>
                      <option value="114">MANGARDORA TEMPLE</option>
                      <option value="115">HIRLI DONGRI HILL PARK</option>
                      <option value="116">PODAGADA</option>
                      <option value="117">KUTURI DEER PARK</option>
                      <option value="118">NILAMADHABA TEMPLE</option>
                      <option value="119">DAKHINAKALI TEMPLE</option>
                      <option value="120">MANINAGA TEMPLE</option>
                      <option value="121">BAISIPALLI WILDLIFE SANCTUARY</option>
                      <option value="122">TIKHALI DAM</option>
                      <option value="123">PATALGANGA SPRING</option>
                      <option value="124">YOGIMATH CAVES</option>
                      <option value="125">DADHIBABAN TEMPLE</option>
                      <option value="126">SUNABEDA WILDLIFE SANCTUARY</option>
                      <option value="127">GOLDEN BEACH</option>
                      <option value="128">SHREE JAGANNATH TEMPLE</option>
                      <option value="129">KONARK SUN TEMPLE</option>
                      <option value="130">RAMACHANDI TEMPLE</option>
                      <option value="131">SAKHIGOPAL TEMPLE</option>
                      <option value="132">DEVAGIRI HILL</option>
                      <option value="133">MAJHIGHARIANI TEMPLE</option>
                      <option value="134">PATALESHWAR SHIVA TEMPLE</option>
                      <option value="135">LAXMINARAYAN TEMPLE</option>
                      <option value="136">DURGAPADU WATERFALL</option>
                      <option value="137">HIRAKUD DAM</option>
                      <option value="138">SAMALESWARI TEMPLE</option>
                      <option value="139">DEBRIGARH WILDLIFE SANCTUARY</option>
                      <option value="140">HUMA TEMPLE</option>
                      <option value="141">HIRAKUD ROPEWAY</option>
                      <option value="142">PATALI SRIKHETRA</option>
                      <option value="143">SUBARNAMERU TEMPLE</option>
                      <option value="144">THENGO DAM</option>
                      <option value="145">KAPILESWAR TEMPLE</option>
                      <option value="146">SASHISENA TEMPLE</option>
                      <option value="147">VEDVYAS TEMPLE</option>
                      <option value="148">VAISHNNO DEVI TEMPLE</option>
                      <option value="149">HANUMAN VATIKA</option>
                      <option value="150">PITAMAHAL DAM</option>
                      <option value="151">TENSA HILL STATION</option>
                    </select>
                    <label for="select1">Destination</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div
                    class="form-floating date"
                    id="date3"
                    data-target-input="nearest" 
                  >

                    <input
                      type="date"
                      class="form-control bg-white border-0"
                      id="From Date"
                      placeholder="From date"
                      data-target="#date3"
                      data-toggle="datetimepicker"
                      required
                    />
                    <label for="datetime">From date</label>
                  </div>
                </div>
               
                <div class="col-md-6">
                  <div
                    class="form-floating date"
                    id="date3"
                    data-target-input="nearest"
                  >
                    <input
                      type="date"
                      class="form-control bg-white border-0"
                      id="datetime"
                      placeholder="Date & Time"
                      data-target="#date3"
                      data-toggle="datetimepicker"
                      required
                    />
                    <label for="datetime">To Date</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating" >
                    <select class="form-select bg-white border-0" id="select1" required >
                      <option value="0">Choose Your Guide</option>
                      <option value="1">Rajendra Sahoo-Balangir
                      </option>
                      <option value="2">Anupama Sahu
                        -Balangir</option>
                      <option value="3">Pradeep Kumar
                        -Balangir</option>
                      <option value="4">Swati Mishra
                        -Balangir</option>
                      <option value="5"> Suryakanta Moharan
                        -Balangir</option>
                      <option value="6">Anjan Kumar Manik-Baragada 
                      </option>
                      <option value="7">Prakash Chandra
                        -Baragada</option>
                      <option value="8">Biswajit Dash
                        -Baragada</option>
                      <option value="9">Bijay Kumar Jena
                        -Baragada</option>
                      <option value="10"> Aakas Kumar Sahoo
                        -Baragada</option>
                      <option value="11"> Gyan Ranjan Das
                        -Bhadrak</option>
                      <option value="12">Swaraj Das-Bhadrak
                      </option>
                      <option value="13">Aditya Das
                        -Bhadrak</option>
                      <option value="13">Annapurna Patnaik
                        -Bhadrak</option>
                      <option value="14">Anisha Pati
                        -Bhadrak</option>
                      <option value="15">Bhabani Chauhan
                        -Cuttack</option>
                      <option value="16">Bhikari Sahoo
                        -Cuttack</option>
                      <option value="17">Aakash Das
                        -Cuttack</option>
                      <option value="18">Suhana Sahu
                        -Cuttack</option>
                      <option value="19">Sweta Barik
                        -Cuttack</option>
                      <option value="20">Sunita Mohapatra
                        -Deogarh</option>
                      <option value="21">Sumitra Patra
                        -Deogarh</option>
                      <option value="22">Raghubara Das
                        -Deogarh</option>
                      <option value="23">Aakash Sahu
                        -Deogarh</option>
                      <option value="24">Raghunath Sahoo
                        -Deogarh</option>
                      <option value="25">Ashok Behera-Dhenkanal</option>
                      <option value="26">Priyanka Dash-Dhenkanal</option>
                      <option value="27">Santosh Pradhan-Dhenkanal</option>
                      <option value="28">Snigdha Mohanty-Dhenkanal</option>
                      <option value="29">Debendra Sahoo-Dhenkanal</option>
                      <option value="30">Leena Swain-Gajapati</option>
                      <option value="31">Sudhir Patra-Gajapati</option>
                      <option value="32">Rashmita Mohapatra-Gajapati</option>
                      <option value="33">Bhagirathi Nayak-Gajapati</option>
                      <option value="34">Snehalata Sahu-Gajapati</option>
                      <option value="35">Bikram Singh-Ganjam</option>
                      <option value="36">Deepika Dash-Ganjam</option>
                      <option value="37">Raghunath Nayak-Ganjam</option>
                      <option value="38">Shweta Panda-Ganjam</option>
                      <option value="39">Gopinath Parida-Ganjam</option>
                      <option value="40">Ajit Kumar Das-Jagatsinghpur</option>
                      <option value="41">Anuradha Jena-Jagatsinghpur</option>
                      <option value="42">Santanu Mohapatra-Jagatsinghpur</option>
                      <option value="43">Rashmi Pradhan-Jagatsinghpur</option>
                      <option value="44">Debashis Sahu-Jagatsinghpur</option>
                      <option value="45">Shakti Mohanty-Jajpur</option>
                      <option value="46"> Prakash Behera-Jajpur</option>
                      <option value="47">Ananya Rout-Jajpur</option>
                      <option value="48">Bijay Kumar Das-Jajpur</option>
                      <option value="49">Manasi Pattnaik-Jajpur</option>
                      <option value="50">Arun Kumar Pradhan-Jharsuguda</option>
                      <option value="51">Sunita Meher-Jharsuguda</option>
                      <option value="52">Rajesh Behera-Jharsuguda</option>
                      <option value="53">Rupali Patel-Jharsuguda</option>
                      <option value="54">Santosh Mohapatra-Jharsuguda</option>
                      <option value="55">Ipsita Dash-Kalahandi</option>
                      <option value="56"> Pramod Sahu-Kalahandi</option>
                      <option value="57">Anjali Majhi-Kalahandi</option>
                      <option value="58">Sudhir Nayak-Kalahandi</option>
                      <option value="59">Renuka Behera-Kalahandi</option>
                      <option value="60">Debendra Digal-Kandhamal</option>
                      <option value="61">Namita Prusty-Kandhamal</option>
                      <option value="62">Harihara Nayak-Kandhamal</option>
                      <option value="63">Sneha Sahoo-Kandhamal</option>
                      <option value="64">Rakesh Parida-Kandhamal</option>
                      <option value="65">Simran Behera-Kendrapara</option>
                      <option value="66">Amarendra Jena-Kendrapara</option>
                      <option value="67">Jyotsna Sahoo-Kendrapara</option>
                      <option value="68">Prabhat Swain-Kendrapara</option>
                      <option value="69">Poonam Sahoo-Kendrapara</option>
                      <option value="70">Dilip Behera-Keonjhar</option>
                      <option value="71">Radhika Dash-Keonjhar</option>
                      <option value="71">Subhankar Mohapatra-Keonjhar</option>
                      <option value="72">Sneha Pradhan-Keonjhar</option>
                      <option value="73">Arjun Sahoo-Keonjhar</option>
                      <option value="74">Tanuja Mishra-Khurda</option>
                      <option value="75">Siddharth Dash-Khurda</option>
                      <option value="76">Aishwarya Pattnaik-Khurda</option>
                      <option value="77">Pradeep Behera-Khurda</option>
                      <option value="78">Neha Mohanty-Khurda</option>
                      <option value="79">Dinesh Nayak-Koraput</option>
                      <option value="80">Priyanka Panda-Koraput</option>
                      <option value="81">Satish Sahu-Koraput</option>
                      <option value="85">Ananya Dash-Koraput</option>
                      <option value="86">Niranjan Patra-Koraput</option>
                      <option value="87">Manisha Behera-Malkangiri</option>
                      <option value="88">Bijay Kumar Meher-Malkangiri</option>
                      <option value="89">Snehalata Sahoo-Malkangiri</option>
                      <option value="90">Anand Singh-Malkangiri</option>
                      <option value="91">Preeti Mohapatra-Malkangiri</option>
                      <option value="92">Rahul Das-Mayurbhanj</option>
                      <option value="93">Anshika Singh-Mayurbhanj</option>
                      <option value="94">Pranab Behera-Mayurbhanj</option>
                      <option value="95">Suman Das-Mayurbhanj</option>
                      <option value="96">Manoj Mohanty-Mayurbhanj</option>
                      <option value="97">Priya Pradhan-Nabarangpur</option>
                      <option value="98">Debashis Sahu-Nabarangpur</option>
                      <option value="99">Tanmayee Mohapatra-Nabarangpur</option>
                      <option value="100">Rakesh Behera-Nabarangpur</option>
                      <option value="101">Swetapadma Das-Nabarangpur</option>
                      <option value="102">Aniket Rath-Nayagarh</option>
                      <option value="103">Ipsita Samal-Nayagarh</option>
                      <option value="104">Rahul Mohapatra-Nayagarh</option>
                      <option value="105">Swara Sahu-Nayagarh</option>
                      <option value="106">Abhinav Behera-Nayagarh</option>
                      <option value="107">Dipti Dash-Nuapada</option>
                      <option value="108">Rakesh Panigrahi-Nuapada</option>
                      <option value="109">Aditi Patel-Nuapada</option>
                      <option value="110">Sarthak Nayak-Nuapada</option>
                      <option value="111">Sushree Mohanty-Nuapada</option>
                      <option value="112">Rishi Satpathy-Puri</option>
                      <option value="113">Tanvi Pradhan-Puri</option>
                      <option value="114">Ashutosh Panda-Puri</option>
                      <option value="115">Trisha Mohapatra-Puri</option>
                      <option value="116">Suryakant Jena-Puri</option>
                      <option value="117">Arpita Behera-Rayagada</option>
                      <option value="118">Kaustav Rath-Rayagada</option>
                      <option value="119">Pragyan Mohanty-Rayagada</option>
                      <option value="120">Subrat Nayak-Rayagada</option>
                      <option value="121">Smruti Patel-Rayagada</option>
                      <option value="122">Prateek Behera-Sambalpur</option>
                      <option value="123">Aishani Mohapatra-Sambalpur</option>
                      <option value="124">Shubham Patel-Sambalpur</option>
                      <option value="125">Swati Sahu-Sambalpur</option>
                      <option value="126">Rishi Das-Sambalpur</option>
                      <option value="127">Anshul Das-Sonepur</option>
                      <option value="128">Shruti Biswal-Sonepur</option>
                      <option value="129">Rishabh Patel-Sonepur</option>
                      <option value="130">Smita Behera-Sonepur</option>
                      <option value="131">Sujata Sahoo-Sonepur</option>
                      <option value="132">Somesh Pradhan
                        -Sundargarh</option>
                      <option value="133">Simran Singh
                        -Sundargarh</option>
                      <option value="134">Suraj Mohapatra
                        -Sundargarh</option>
                      <option value="135">Shreya Panigrahi
                        -Sundargarh</option>
                      <option value="136">Shashank Das
                        -Sundargarh</option>
                      <option value="137">Niharika Mohanty-Nawarangpur</option>
                      <option value="138">Surya Prakash Sahu-Nawarangpur</option>
                      <option value="139">Snehal Singh-Nawarangpur</option>
                      <option value="140">Nishant Behera-Nawarangpur</option>
                      <option value="141">Sweta Patra-Nawarangpur</option>
                      <option value="142">Navin Rath-Nayagarh </option>
                      <option value="143">Sarita Behera-Nayagarh </option>
                      <option value="144">Neelam Sahoo-Nayagarh </option>
                      <option value="145">Sagarika Patel-Nayagarh </option>
                      <option value="146">Santosh Mohanty-Nayagarh </option>
                      <option value="147">Sneha Singh-Nuapada</option>
                      <option value="148">Shubham Mohapatra-Nuapada</option>
                      <option value="149">Samiksha Patel-Nuapada</option>
                      <option value="150">Surya Prakash Das-Nuapada</option>
                      <option value="151">Simran Behera-Nuapada</option>
                    </select>
                    <label for="select1">Guide</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="price"
                      class="form-control bg-white border-0"
                      id="price"
                      placeholder="price" value="200"
                    />
                    <label for="email">Price</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-white border-0"
                      placeholder="Special Request"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Special Request</label>
                  </div>
                </div>
                <div class="col-12">
                  <button
                    class="btn btn-primary text-white w-100 py-3"
                    type="submit"
                  >
                    Book Now
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Tour Booking End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
      <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px">
          <h5 class="section-title px-3">Travel Guide</h5>
          <h1 class="mb-0">Meet Our Guide</h1>
          <p>Book our experienced guide for an effortless journey</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="guide-item">
              <div class="guide-img">
                <div class="guide-img-efects">
                  <img
                    src="OD-Images/g3.jpg"
                    class="img-fluid w-100 rounded-top"
                    alt="Image"
                  />
                </div>
                <div class="guide-icon rounded-pill p-2">

                  <a
                  target="_blank"
                  class="btn btn-square btn-primary rounded-circle mx-1"
                  href="https://www.instagram.com/iampriyanka01_?igsh=MTB4ZDd0azAwdXYzbw=="
                  ><i class="fab fa-instagram"></i
                ></a>
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  
                
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                 
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href="booking.html"
                    ><i class="">P.P.</i
                  ></a>
                </div>
              </div>
              <div class="guide-title text-center rounded-bottom p-4">
                <div class="guide-title-inner">
                  <h4 class="mt-3">Priyanka Panda</h4>
                  <p class="mb-0">Tourist Venues</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="guide-item">
              <div class="guide-img">
                <div class="guide-img-efects">
                  <img
                    src="OD-Images/g2.jpg"
                    class="img-fluid w-100 rounded-top"
                    alt="Image"
                  />
                </div>
                <div class="guide-icon rounded-pill p-2">

                  <a
                  target="_blank"
                  class="btn btn-square btn-primary rounded-circle mx-1"
                  href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  
                
                  <a
                  
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href="booking.html"
                    ><i class="">D.S.</i
                  ></a>
                </div>
              </div>
              <div class="guide-title text-center rounded-bottom p-4">
                <div class="guide-title-inner">
                  <h4 class="mt-3">Debasis Sahu</h4>
                  <p class="mb-0">Touorist Venues</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="guide-item">
              <div class="guide-img">
                <div class="guide-img-efects">
                  <img
                    src="OD-Images/sanjana.jpg"
                    class="img-fluid w-100 rounded-top"
                    alt="Image"
                  />
                </div>
                <div class="guide-icon rounded-pill p-2">

                  <a
                  target="_blank"
                  class="btn btn-square btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  
                
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href="booking.html"
                    ><i class="">P.S.</i
                  ></a>
                </div>
              </div>
              <div class="guide-title text-center rounded-bottom p-4">
                <div class="guide-title-inner">
                  <h4 class="mt-3">Poonam Sahoo</h4>
                  <p class="mb-0">Touorist Venues</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="guide-item">
              <div class="guide-img">
                <div class="guide-img-efects">
                  <img
                    src="OD-Images/g4.jpg"
                    class="img-fluid w-100 rounded-top"
                    alt="Image"
                  />
                </div>
                <div class="guide-icon rounded-pill p-2">

                  <a
                  target="_blank"
                  class="btn btn-square btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  
                
                  <a
                  target="_blank"
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary rounded-circle mx-1"
                    href="booking.html"
                    ><i class="">N.B.</i
                  ></a>
                </div>
              </div>
              <div class="guide-title text-center rounded-bottom p-4">
                <div class="guide-title-inner">
                  <h4 class="mt-3">Nishant Behera</h4>
                  <p class="mb-0">Touorist Venues</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Blog</h5>
                <h1 class="mb-4">Popular Travel Blogs</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="img/blog-3.jpg" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->

    <!-- Subscribe Start -->
    <!-- <div class="container-fluid subscribe py-5">
      <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px">
          <h5 class="subscribe-title px-3">Subscribe</h5>
          <h1 class="text-white mb-4">Subscribe to Our Exclusive Newsletter</h1>
          <p class="text-white mb-5">
            Join our community of passionate travelers and adventurers by
            subscribing to our exclusive newsletter. Stay informed about the
            latest travel trends, destination spotlights, and hidden gems
            waiting to be discovered. Receive expert advice on planning your
            next adventure, from packing hacks to budget-friendly travel tips.
          </p>
          <div class="position-relative mx-auto">
            <input
              class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5"
              type="text"
              placeholder="Your email"
            />
            <button
              type="button"
              class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2"
            >
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Subscribe End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
              <h4 class="mb-4 text-white">Get In Touch</h4>
              <a href="./contact.htmlp"
                ><i class="fa fa-building me-2"></i> Bhubaneswar, Odisha,
                India</a
              >
              <a href="mailto:touristvenues@gmail.com"
                ><i class="fas fa-envelope me-2"></i> touristvenues@gmail.com</a
              >
              <a href="mailto:touristvenues@support.com"
                ><i class="fa fa-question-circle me-2"></i>
                touristvenues@support.com</a
              >
              <a href=""><i class="fas fa-phone me-2"></i> +91 XXXXX XXXXX</a>
              <a href="" class="mb-3"
                ><i class="fas fa-print me-2"></i> +91 XXXXX XXXXX</a
              >
              <div class="d-flex align-items-center">
                <i class="fas fa-share fa-2x text-white me-2"></i>
                <a
                  class="btn-square btn btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a
                  class="btn-square btn btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a
                  class="btn-square btn btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  class="btn-square btn btn-primary rounded-circle mx-1"
                  href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
              <h4 class="mb-4 text-white">Company</h4>
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Home</a
              >
              <a href="about.html"
                ><i class="fas fa-angle-right me-2"></i> About</a
              >
              <a href="tour.html"
                ><i class="fas fa-angle-right me-2"></i> Explore Tour</a
              >
              <a href="booking.html"
                ><i class="fas fa-angle-right me-2"></i> Book a Tour</a
              >
              <a href="guides.html"
                ><i class="fas fa-angle-right me-2"></i> Book a Guide</a
              >
              <a href="gallery.html"
                ><i class="fas fa-angle-right me-2"></i> Gallery</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
              <h4 class="mb-4 text-white">Support</h4>
              <a href="./contact.html"
                ><i class="fas fa-angle-right me-2"></i> Contact</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Legal Notice</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Privacy Policy</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a
              >
              <a href="contact.html"
                ><i class="fas fa-angle-right me-2"></i> Sitemap</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Cookie policy</a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item">
              <div class="row gy-3 gx-2 mb-4">
                <div class="col-xl-6">
                  <form>
                    <div class="form-floating">
                      <select class="form-select bg-dark border" id="select1">
                        <option value="1">USA</option>
                        <option value="2">Eng</option>
                      </select>
                      <label for="select1">English</label>
                    </div>
                  </form>
                </div>
                <div class="col-xl-6">
                  <form>
                    <div class="form-floating">
                      <select class="form-select bg-dark border" id="select1">
                        <option value="1">Inr</option>
                      </select>
                      <label for="select1">₹</label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-md-6 text-center text-md-end mb-md-0">
            <i class="fas fa-copyright me-2"></i
            ><a class="text-white" href="#">Travel Recommendation System</a>,
            All right reserved.
          </div>
          <div class="col-md-6 text-center text-md-start">
            Designed By <a class="text-white" href="#">Gecian</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"
      ><i class="fa fa-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
