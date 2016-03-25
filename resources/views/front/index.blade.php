@extends('layout.front_main')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered">Featured Services</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-1.html" class="featured-service">
                    <i class="reneva icon-37"></i>
                    <h4>Painting</h4>
                    <p>A fresh coat of paint can breathe life into any room.</p>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-2.html" class="featured-service">
                    <i class="reneva icon-7"></i>
                    <h4>Repair</h4>
                    <p>If something is broken in your home, we can fix it.</p>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-1.html" class="featured-service">
                    <i class="reneva icon-12"></i>
                    <h4>Carpentry</h4>
                    <p>We build, construct and install all you need.</p>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-2.html" class="featured-service">
                    <i class="reneva icon-21"></i>
                    <h4>Plumbing</h4>
                    <p>Toilet replacement, pipe insulation and more.</p>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-1.html" class="featured-service">
                    <i class="reneva icon-5"></i>
                    <h4>Remodeling</h4>
                    <p>Upgrade your home with a few finishing touches.</p>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- Service -->
                <a href="single-service-2.html" class="featured-service">
                    <i class="reneva icon-30"></i>
                    <h4>Electrical</h4>
                    <p>We professionally install electric appliances.</p>
                </a>
            </div>
        </div>

    </div>
    <!-- Featured Services / End -->


    <!-- Latest Projects -->
    <div class="full-width projects-container">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Headline -->
                    <h3 class="headline centered">Our Latest Projects</h3>

                    <!-- Filters -->
                    <div id="filters">
                        <ul class="option-set alt">
                            <li><a href="#filter" class="selected" data-filter="*">All</a></li>
                            <li><a href="#filter" data-filter=".kitchens">Kitchens</a></li>
                            <li><a href="#filter" data-filter=".bathrooms">Bathrooms</a></li>
                            <li><a href="#filter" data-filter=".bedrooms">Bedrooms</a></li>
                            <li><a href="#filter" data-filter=".living-rooms">Living Rooms</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class="full-width projects">

            <!-- Item -->
            <a href="single-project-content-right.html" class="kitchens clickable">
                <img src="{{asset('/assets/front/images/latest-project-01.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Kitchenette</h4>
                        <span>March 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-before-after.html" class="bathrooms clickable">
                <img src="{{asset('/assets/front/images/latest-project-02.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Bathroom</h4>
                        <span>February 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-content-right.html" class="kitchens clickable">
                <img src="{{asset('/assets/front/images/latest-project-03.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Kitchen</h4>
                        <span>January 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>


            <!-- Item -->
            <a href="single-project-before-after.html" class="bathrooms clickable">
                <img src="{{asset('/assets/front/images/latest-project-04.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Bathroom</h4>
                        <span>December 2016</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-content-right.html" class="bedrooms clickable">
                <img src="{{asset('/assets/front/images/latest-project-05.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Living Room</h4>
                        <span>November 2015</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-content-bottom.html" class="bedrooms living-rooms clickable">
                <img src="{{asset('/assets/front/images/latest-project-06.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Living Room</h4>
                        <span>November 2015</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-content-right.html" class="living-rooms clickable">
                <img src="{{asset('/assets/front/images/latest-project-07.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Living Room</h4>
                        <span>September 2015</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

            <!-- Item -->
            <a href="single-project-content-bottom.html" class="living-rooms kitchens clickable">
                <img src="{{asset('/assets/front/images/latest-project-08.jpg')}}" alt="">
                <div class="overlay">
                    <div class="overlay-content">
                        <h4>Kitchenette</h4>
                        <span>September 2015</span>
                    </div>
                </div>
                <div class="plus-icon"></div>
            </a>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="all-projects.html" class="button medium border">View All Projects</a>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <!-- Latest Projects / End -->


    <!-- Stages -->
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered with-border margin-bottom-0">All Stages of The Renovation</h3>
            </div>
        </div>

        <div class="row">

            <!-- Stage -->
            <div class="col-md-3 col-sm-6">
                <div class="stage">
                    <i class="reneva icon-18"></i>
                    <span>Initial Stage</span>
                    <h4>Customer Idea</h4>
                    <p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-3 col-sm-6">
                <div class="stage">
                    <i class="reneva icon-44"></i>
                    <span>Second Stage</span>
                    <h4>Free Quotation</h4>
                    <p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-3 col-sm-6">
                <div class="stage">
                    <i class="reneva icon-45"></i>
                    <span>Third Stage</span>
                    <h4>Cunstruction</h4>
                    <p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-3 col-sm-6">
                <div class="stage">
                    <i class="reneva icon-16"></i>
                    <span>Final Stage</span>
                    <h4>Warranty Beyond</h4>
                    <p>Curabitur sodales massa velit, id dapibus nunc efficitur at. Quisque elementum magna quis ante suscipit, quis fermentum augue viverra.</p>
                </div>
            </div>

        </div>

    </div>
    <!-- Stages / End -->


    <!-- Testimonials -->
    <div id="testimonials">
        <!-- Slider -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-slider">
                        <ul class="slides">
                            <li>
                                <p>I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.
                                    <span>Collis Ta’eed, Envato</span></p>
                            </li>

                            <li>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat. Donec dapibus efficitur arcu, a rhoncus lectus egestas elementum.
                                    <span>John Doe</span></p>
                            </li>

                            <li>
                                <p>Maecenas congue sed massa et porttitor. Duis placerat commodo ex, ut faucibus est facilisis ac. Donec eleifend arcu sed sem posuere aliquet. Etiam lorem metus, suscipit vel tortor vitae.
                                    <span>Tom Smith</span></p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials / End -->


    <!-- Logo Carousel -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered with-border margin-bottom-30">Just some of our happy clients</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <!-- Carousel -->
                <div class="logo-carousel">
                    <div class="item"><img src="{{asset('/assets/front/images/logo-01.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-02.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-03.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-04.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-05.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-06.png')}}" alt="" /></div>
                    <div class="item"><img src="{{asset('/assets/front/images/logo-07.png')}}" alt="" /></div>
                </div>

            </div>
        </div>
    </div>
    <!-- Logo Carousel / End -->

@endsection
