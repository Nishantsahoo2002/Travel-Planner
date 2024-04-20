<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Search Bar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"/>

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
    <link href="/static/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/static/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="/static/css/style.css" rel="stylesheet" />

    <link rel="shortcut icon" href="static/img/fevicon.png" type="image/x-icon">
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
            <!--a href="loginnew.html"
              ><small class="me-3 text-light"
                ><i class="fa fa-user me-2"></i>Register</small
              ></a
            >
            <a href="loginnew.html"
              ><small class="me-3 text-light"
                ><i class="fa fa-sign-in-alt me-2"></i>Login</small
              ></a
            -->
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
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-comment-alt me-2"></i> Inbox</a
                >
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-bell me-2"></i> Notifications</a
                >
                <a href="#" class="dropdown-item"
                  ><i class="fas fa-cog me-2"></i> Account Settings</a
                >
                <a href="#" class="dropdown-item"
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
          <h1  class="m-0"><i class="fas fa-route me-3"></i></h1>
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

            <!-- <nav nav class="navbar" style="background-color: transparent">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="background-color: aqua;">Search</button>
              </form>
            </nav> -->
          <div class="navbar-nav ms-auto py-0">
            <a href="http://127.0.0.1/touristvenues/Travel_Planner/index.html" class="nav-item nav-link active">Home</a>
            <a href="http://127.0.0.1/touristvenues/Travel_Planner/about.html" class="nav-item nav-link">About</a>
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
                <a href="http://127.0.0.1/touristvenues/Travel_Planner/tour.html" class="dropdown-item">Explore Tour</a>
                <a href="http://127.0.0.1/touristvenues/Travel_Planner/booking.php" class="dropdown-item">Travel Booking</a>
                <!-- <a href="gallery.html" class="dropdown-item">Our Gallery</a> -->
                <a href="http://127.0.0.1/touristvenues/Travel_Planner/guides.html" class="dropdown-item">Travel Guides</a>
                <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
              </div>
            </div>
            <a href="http://127.0.0.1/touristvenues/Travel_Planner/gallery.html" class="nav-item nav-link">Gallery</a>
            <a href="http://127.0.0.1/touristvenues/Travel_Planner/contact.html" class="nav-item nav-link">Contact</a>
          </div>
          <a href="http://127.0.0.1/touristvenues/Travel_Planner/booking.php" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4"
            >Book Now</a
          >
        </div>
      </nav>
    </div>
    <div
      class="container-fluid search-bar position-relative"
      style="top: -50%; transform: translateY(-50%)"
    >
      <div class="container" id="search-around">
        <div
          id="searchbar"
          class="position-relative rounded-pill w-100 mx-auto "
          style="background: rgba(165, 118, 253, 0.8)"
        >
        <form method="POST" action="/recommend">
          <input
            class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
            type="text"
            name="user_input"
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
        </div>
      </div>
    </div>
    
    <!-- Navbar & Hero End -->


    <!-- Random -->
    <div class="container-fluid ExploreTour py-5" id="result">
      <div class="container py-5">
        
        <div class="tab-class text-center">
         
          <div class="tab-content">
            <div id="NationalTab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                  <div class="national-item">
                    <img
                      id="place_1_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_1_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 id="place_1_name" class="text-white text-uppercase mb-2">
                         {{place_1_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_1}}&parameter2={{place_name_1}}&parameter3={{description_1}}&parameter4={{latitude_1}}&parameter5={{longitude_1}}&parameter6={{area_1}}&parameter7={{city_1}}&parameter8={{district_1}}&parameter9={{state_1}}&parameter10={{country_1}}&parameter11={{pincode_1}}&parameter12={{category_1}}&parameter13={{visit_time_1}}&parameter14={{rating_1}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_2_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_2_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_2_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_2}}&parameter2={{place_name_2}}&parameter3={{description_2}}&parameter4={{latitude_2}}&parameter5={{longitude_2}}&parameter6={{area_2}}&parameter7={{city_2}}&parameter8={{district_2}}&parameter9={{state_2}}&parameter10={{country_2}}&parameter11={{pincode_2}}&parameter12={{category_2}}&parameter13={{visit_time_2}}&parameter14={{rating_2}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_3_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_3_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_3_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_3}}&parameter2={{place_name_3}}&parameter3={{description_3}}&parameter4={{latitude_3}}&parameter5={{longitude_3}}&parameter6={{area_3}}&parameter7={{city_3}}&parameter8={{district_3}}&parameter9={{state_3}}&parameter10={{country_3}}&parameter11={{pincode_3}}&parameter12={{category_3}}&parameter13={{visit_time_3}}&parameter14={{rating_3}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_4_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_4_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_4_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_4}}&parameter2={{place_name_4}}&parameter3={{description_4}}&parameter4={{latitude_4}}&parameter5={{longitude_4}}&parameter6={{area_4}}&parameter7={{city_4}}&parameter8={{district_4}}&parameter9={{state_4}}&parameter10={{country_4}}&parameter11={{pincode_4}}&parameter12={{category_4}}&parameter13={{visit_time_4}}&parameter14={{rating_4}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                    id="place_5_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_5_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_5_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_5}}&parameter2={{place_name_5}}&parameter3={{description_5}}&parameter4={{latitude_5}}&parameter5={{longitude_5}}&parameter6={{area_5}}&parameter7={{city_5}}&parameter8={{district_5}}&parameter9={{state_5}}&parameter10={{country_5}}&parameter11={{pincode_5}}&parameter12={{category_5}}&parameter13={{visit_time_5}}&parameter14={{rating_5}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_6_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_6_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_6_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_6}}&parameter2={{place_name_6}}&parameter3={{description_6}}&parameter4={{latitude_6}}&parameter5={{longitude_6}}&parameter6={{area_6}}&parameter7={{city_6}}&parameter8={{district_6}}&parameter9={{state_6}}&parameter10={{country_6}}&parameter11={{pincode_6}}&parameter12={{category_6}}&parameter13={{visit_time_6}}&parameter14={{rating_6}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                    id="place_7_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_7_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_7_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_7}}&parameter2={{place_name_7}}&parameter3={{description_7}}&parameter4={{latitude_7}}&parameter5={{longitude_7}}&parameter6={{area_7}}&parameter7={{city_7}}&parameter8={{district_7}}&parameter9={{state_7}}&parameter10={{country_7}}&parameter11={{pincode_7}}&parameter12={{category_7}}&parameter13={{visit_time_7}}&parameter14={{rating_7}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_8_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_8_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_8_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_8}}&parameter2={{place_name_8}}&parameter3={{description_8}}&parameter4={{latitude_8}}&parameter5={{longitude_8}}&parameter6={{area_8}}&parameter7={{city_8}}&parameter8={{district_8}}&parameter9={{state_8}}&parameter10={{country_8}}&parameter11={{pincode_8}}&parameter12={{category_8}}&parameter13={{visit_time_8}}&parameter14={{rating_8}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
                      id="place_9_id"
                      src="{{ url_for('static', filename='Odisha_Images/' + place_9_id + '.jpg') }}"
                      class="img-fluid w-100 rounded"
                      alt="Image"
                    />
                    <div class="national-content">
                      <div class="national-info">
                        <h5 class="text-white text-uppercase mb-2">
                          {{place_9_name}}
                        </h5>
                        <a href="info.php?parameter1={{place_id_9}}&parameter2={{place_name_9}}&parameter3={{description_9}}&parameter4={{latitude_9}}&parameter5={{longitude_9}}&parameter6={{area_9}}&parameter7={{city_9}}&parameter8={{district_9}}&parameter9={{state_9}}&parameter10={{country_9}}&parameter11={{pincode_9}}&parameter12={{category_9}}&parameter13={{visit_time_9}}&parameter14={{rating_9}}" class="btn-hover text-white"
                          >Read more <i class="fa fa-arrow-right ms-2"></i
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
            
          </div>
        </div>
      </div>
    </div>

  

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
              <h4 class="mb-4 text-white">Get In Touch</h4>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/contact.html"
                ><i class="fa fa-building me-2"></i> Bhubaneswar, Odisha, India</a
              >
              <a href="mailto:touristvenues@gmail.com" 
                ><i class="fas fa-envelope me-2" ></i> touristvenues@gmail.com</a
              >
              <a href="mailto:touristvenues@support.com"
                ><i class="fa fa-question-circle me-2"></i> touristvenues@support.com</a
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
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/index.html"><i class="fas fa-angle-right me-2"></i> Home</a>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/about.html"><i class="fas fa-angle-right me-2"></i> About</a>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/tour.html"><i class="fas fa-angle-right me-2"></i> Explore Tour</a>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/booking.php"><i class="fas fa-angle-right me-2"></i> Book a Tour</a>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/guides.html"><i class="fas fa-angle-right me-2"></i> Book a Guide</a>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/gallery.html"><i class="fas fa-angle-right me-2"></i> Gallery</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
              <h4 class="mb-4 text-white">Support</h4>
              <a href="http://127.0.0.1/touristvenues/Travel_Planner/contact.html"><i class="fas fa-angle-right me-2"></i> Contact</a>
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Legal Notice</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Privacy Policy</a
              >
              <a href="index.html"
                ><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a
              >
              <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Sitemap</a>
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
                        <option value="1">INR</option>
                        
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
    <script src="static/lib/easing/easing.min.js"></script>
    <script src="static/lib/waypoints/waypoints.min.js"></script>
    <script src="static/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="static/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="static/js/main.js"></script>
  </body>
</html>
