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
        <div class="tab-pane active" id="company">
          <div class="main-content">
            <div class="row">
              <div class="page-content col-lg-8 col-md-8 col-sm-8">
                <div class="company-page-info">
                  <div class="company-preamble clearfix">
                    <div class="company-thumbnail">
                      <img src="img/logo-advert4.jpg" alt="">
                      <ul class="social custom-list">
                        <li><a href ="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href ="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href ="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>
                    <div class="company-preamble-content">
                      <h5 class="company-title"><a href="#">{{$service["title"]}}</a></h5>
                    </div>
                  </div>
                  <div class="company-profile-description">
                    <h5 class="title">{{$service["getcat"]["name"]}} / {{$service["get_sub_cat"]["name"]}}</h5>
                    <p class="lead">
                      <strong>
                        {{$service["description"]}}
                      </strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="sidebar-content col-lg-4 col-md-4 col-sm-4">
                <div class="contact-details">
                  <h5 class="title">Contact Details</h5>
                  <div class="row">
                    <ul class="custom-list">
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Name</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          {{$service["get_user"]["firstname"]." ".$service["get_user"]["lastname"]}}
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Address</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          {{$service["get_user"]["address"]}}
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Mobile Phone</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           {{$service["get_user"]["mobile_phone"]}}
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>Home Phone</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           {{$service["get_user"]["home_phone"]}}
                        </div>
                      </li>
                      <li class="clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <strong>E-mail</strong>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <a href="#">{{$service["get_user"]["email"]}}</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="map_canvas_wrapper">
                  <div id="map_canvas_sidebar"></div>
                </div>
                <div class="banner">
                  <a href="#">
                    <img src="{{asset('/assets/front/img/sidebar_banner.png')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
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
                <div class="address-details row col-sm-6 col-xs-12">
                  <h5 class="title">Address Details</h5>
                  <ul class="custom-list">
                    <li class="clearfix">
                      <i class="fa fa-map-marker"></i>
                      <span>{{$service["get_user"]["address"]}}</span>
                    </li>
                    <li class="clearfix">
                      <i class="fa fa-phone"></i>
                      <span><strong>Home Phone:</strong> {{$service["get_user"]["home_phone"]}}</span>
                      <span><strong>Mobile Phone:</strong>{{$service["get_user"]["mobile_phone"]}}</span>
                    </li>
                    <li class="clearfix">
                      <i class="fa fa-envelope-o"></i>
                      <span>
                        <strong>E-mail:</strong> <a href="#">{{$service["get_user"]["email"]}}</a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sidebar-content col-lg-4 col-md-4 col-sm-4">
                <div class="banner">
                  <a href="#">
                    <img src="{{asset('/assets/front/img/sidebar_banner.png')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection