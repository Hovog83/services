@extends('front.layout.main')
@section('content')
<div class="main-content">

  <!-- Start Tabs -->
  <div class="tabs custom-tabs clearfix">
    <div class="container">
      <ul class="nav nav-tabs responsive-tabs">
        <li class="active"><a href="#company">Company</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a id="map" href="#contact">Contact</a></li>
      </ul>
      <div class="tab-content">
        <!-- Start Company Tab -->
        <div class="tab-pane active" id="company">
          <!-- Start Main-Content -->
          <div class="main-content">
            <div class="row">
              <div class="page-content col-lg-8 col-md-8 col-sm-8">
                <div class="company-page-info">
                  <div class="company-preamble clearfix">
                    <div class="company-thumbnail">
                      <img src="img/logo-advert4.jpg" alt="">
                      <ul class="social custom-list">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>
                    <div class="company-preamble-content">
                      <h5 class="company-title"><a href="#">Industrie LLC</a></h5>
                      <ul class="company-tags custom-list">
                        <li><a href="#">Cars, </a></li>
                        <li><a href="#">Education, </a></li>
                        <li><a href="#">Industry</a></li>
                      </ul>
                      <p class="lead"><strong>Hello this is a restaurant</strong></p>
                      <p class="no-bottom">This is a restaurant that exists since 1890. Glocal is a responsive Directory Template that offers a wide range of features that enables to create a listing of companies and illustrate them per category on a map.</p>
                    </div>
                  </div>
                  <div class="company-profile-description">
                    <h5 class="title">Profile Description</h5>
                    <p class="lead">
                      <strong>
                        desc
                      </strong>
                    </p>
                  </div>
                </div>
              </div>

              <div class="sidebar-content col-lg-4 col-md-4 col-sm-4">
                <!-- Start Map Canvas -->
                <div id="map_canvas_wrapper">
                  <div id="map_canvas_sidebar"></div>
                </div>
                <!-- End Map Canvas -->
                
                <!-- Start Claim Company -->
                <div class="claim-company">
                  <a class="btn btn-secondary full-width claim-company">
                    <span><i class="fa fa-chevron-circle-down"></i>Own This Company?</span>
                  </a>
                  <div class="claim-company-form">
                    <h5 class="title">Claim Us</h5>
                    <form action="http://188.226.173.21/metrodirhtml/index.html" class="default-form">
                      <p class="form-row">
                        <input type="text" placeholder="Name/Company Name*">
                      </p>
                      <p class="form-row">
                        <input type="text" placeholder="Your E-mail*">
                      </p>
                      <p class="form-row">
                        <input type="text" placeholder="Subject">
                      </p>
                      <p class="form-row">
                        <textarea placeholder="How we can help you?"></textarea>
                      </p>
                      <button class="btn btn-secondary full-width">
                        <i class="fa fa-arrow-circle-right"></i>
                        Send Message
                      </button>
                    </form>
                  </div>
                </div>
                <!-- End Claim Company-->

                <!-- Start Contact-Details -->
                <div class="contact-details">
                  <h5 class="title">Contact Details</h5>
                  <div class="row">
                    <ul class="custom-list">
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Name</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          Restaurant Lucia
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Founded</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          2011
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Legal Entity</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          Corportation
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Turnover</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          $35 000 000
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Number of Employees</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          50 000
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Full Address</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          France, avenue roger salengro, villeurbanne 69100
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Phone</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          ****************
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Fax</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          ****************
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Website</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <a href="#">www.company.com</a>
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>E-mail</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <a href="#">info@company.com</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Contact-Details -->

                <!-- Start Opening Hours -->
                <div class="opening-hours">
                  <h5 class="title">Opening Hours</h5>
                  <div class="row">
                    <ul class="custom-list">
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Monday-Friday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          9am-5
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Saturday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          10am-3pm
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Saturday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          Closed
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Opening Hours -->

                <!-- Start Message Us -->
                <div class="message-us">
                  <h5 class="title">Message Us</h5>
                  <form action="http://188.226.173.21/metrodirhtml/index.html" class="default-form">
                    <p class="form-row">
                      <input type="text" placeholder="Name/Company Name*">
                    </p>
                    <p class="form-row">
                      <input type="text" placeholder="Your E-mail*">
                    </p>
                    <p class="form-row">
                      <input type="text" placeholder="Subject">
                    </p>
                    <p class="form-row">
                      <textarea placeholder="How we can help you?"></textarea>
                    </p>
                    <button class="btn btn-secondary full-width">
                      <i class="fa fa-arrow-circle-right"></i>
                      Send Message
                    </button>
                  </form>
                </div>
                <!-- End Message Us -->
               
                <!-- Start Banner -->
                <div class="banner">
                  <a href="#">
                    <img src="img/sidebar_banner.png" alt="">
                  </a>
                </div>
                <!-- End Banner -->

              </div>
              <!-- End Sidebar-Content -->

            </div>
          </div>
          <!-- End Main-Content -->

        </div>
        <div class="tab-pane" id="portfolio">
          <!-- Start Main-Content -->
          <div class="main-content">
            <div class="row">
              <div class="single-portfolio col-lg-6 col-md-6 col-sm-12">
                <div class="main-photo">
                  <img src="img/portfolio1.jpg" alt="">
                </div>
                <div class="single-portfolio-description">
                  <h6 class="title">Industrie LLC</h6>
                  <span class="zoom"><i class="fa fa-search-plus"></i></span>
                  <span class="link">
                    <a href="../../uouapps.com/wp/metrodir/wp-content/uploads/2014/03/005-800x460.html" target="_blank">
                      <i class="fa fa-link"></i>
                    </a>
                  </span>
                </div>
              </div>
              <div class="single-portfolio col-lg-6 col-md-6 col-sm-12">
                <div class="main-photo">
                  <img src="img/portfolio2.jpg" alt="">
                </div>
                <div class="single-portfolio-description">
                  <h6 class="title">Industrie LLC</h6>
                  <span class="zoom"><i class="fa fa-search-plus"></i></span>
                  <span class="link">
                    <a href="../../uouapps.com/wp/metrodir/wp-content/uploads/2014/03/005-800x460.html" target="_blank">
                      <i class="fa fa-link"></i>
                    </a>
                  </span>
                </div>
              </div>
              <div class="single-portfolio col-lg-6 col-md-6 col-sm-12">
                <div class="main-photo">
                  <img src="img/portfolio3.jpg" alt="">
                </div>
                <div class="single-portfolio-description">
                  <h6 class="title">Industrie LLC</h6>
                  <span class="zoom"><i class="fa fa-search-plus"></i></span>
                  <span class="link">
                    <a href="../../uouapps.com/wp/metrodir/wp-content/uploads/2014/03/005-800x460.html" target="_blank">
                      <i class="fa fa-link"></i>
                    </a>
                  </span>
                </div>
              </div>
              <div class="single-portfolio col-lg-6 col-md-6 col-sm-12">
                <div class="main-photo">
                  <img src="img/portfolio4.jpg" alt="">
                </div>
                <div class="single-portfolio-description">
                  <h6 class="title">Industrie LLC</h6>
                  <span class="zoom"><i class="fa fa-search-plus"></i></span>
                  <span class="link">
                    <a href="../../uouapps.com/wp/metrodir/wp-content/uploads/2014/03/005-800x460.html" target="_blank">
                      <i class="fa fa-link"></i>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="contact">
          <!-- Start Main-Content -->
          <div class="main-content">
            <div class="row">

              <!-- Start Page-Content -->
              <div class="page-content col-lg-8 col-md-8 col-sm-8 clearfix">
                
                <!-- Start Find-us -->
                <div class="find-us">
                  <h5 class="title">Find Us On Map</h5>
                  <div id="map_canvas_contact"></div>
                </div>
                <!-- End Find-Us -->
                
                <!-- Start Conctact-Form -->
                <div class="contact-form">
                  <h5 class="title">Send Us a Message</h5>
                  <div class="contact-form-box clearfix">
                    <form action="http://188.226.173.21/metrodirhtml/index.html" class="default-form">
                      <div class="col-lg-6 col-md-6">
                        <p class="form-row">
                          <input type="text" placeholder="Name*">
                        </p>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <p class="form-row">
                          <input type="text" placeholder="E-mail*">
                        </p>
                      </div>
                      <div class="col-lg-12">
                        <p class="form-row">
                          <input type="text" placeholder="website">
                        </p>
                      </div>
                      <div class="col-lg-12">
                        <p class="form-row">
                          <textarea placeholder="How we can help you"></textarea>
                        </p>
                      </div>
                      <div class="col-lg-12">
                        <button class="btn btn-secondary">
                          <i class="fa fa-sign-out"></i>
                          Send Message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Contact-Form -->
                
                <!-- Start Address Details -->
                <div class="address-details row col-sm-6 col-xs-12">
                  <h5 class="title">Address Details</h5>
                  <ul class="custom-list">
                    <li class="clearfix">
                      <i class="fa fa-map-marker"></i>
                      <span>1234 Street Mountain View, CA 94043</span>
                    </li>
                    <li class="clearfix">
                      <i class="fa fa-phone"></i>
                      <span><strong>Fax:</strong> +1 123-456-7890</span>
                      <span><strong>Phone:</strong> +1 123-456-7890</span>
                    </li>
                    <li class="clearfix">
                      <i class="fa fa-envelope-o"></i>
                      <span>
                        <strong>E-mail:</strong> <a href="#">email@example.com</a>
                      </span>
                      <span>
                        <strong>Website:</strong> <a href="#">www.example.com</a>
                      </span>
                    </li>
                  </ul>
                </div>
                <!-- End Address-Details -->

                <!-- Start Opening-Hours -->
                <div class="opening-hours row col-sm-6 col-xs-12">
                  <h5 class="title">Opening Hours</h5>
                  <div class="row">
                    <ul class="custom-list">
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Monday-Friday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          9am-5
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Saturday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          10am-3pm
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Saturday</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          Closed
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Opening-Hours -->

              </div>
              <!-- End Page-Content -->

              <!-- Start Sidebar-Content -->
              <div class="sidebar-content col-lg-4 col-md-4 col-sm-4">

                <!-- Start Featured -->
                <div class="featured">
                  <h5 class="title">Featured</h5>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/logo-advert1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                      <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/logo-advert2.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                      <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Featured -->

                <!-- Start Recently -->
                <div class="recently">
                  <h5 class="title">Recently added</h5>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/logo-advert1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                      <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/logo-advert2.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                      <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Recently -->

                <!-- Start Adverts -->
                <div class="adverts">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <a href="#"><img src="img/sidebar_advert.png" alt=""></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <a href="#"><img src="img/sidebar_advert.png" alt=""></a>
                    </div>
                  </div>
                </div>
                <!-- End Adverts -->
                
                <!-- Start Latest -->
                <div class="latest">
                  <h5 class="title">Latest</h5>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/latest_post.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Blog title goes here</a></h6>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="post-thumb">
                      <a href="#"><img src="img/latest_post2.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                      <h6 class="post-title"><a href="#">Blog title goes here</a></h6>
                      <a href="#" class="read_more">
                        <i class="fa fa-arrow-circle-right"></i>Read More
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Latest -->

                <!-- Start Banner -->
                <div class="banner">
                  <a href="#">
                    <img src="img/sidebar_banner.png" alt="">
                  </a>
                </div>
                <!-- End Banner -->

              </div>
              <!-- End Sidebar-Content -->

            </div>
          </div>
          <!-- End Main-Content -->

      </div>
    </div>
  </div>
  <!-- End Tabs -->

</div>

@endsection