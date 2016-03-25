<html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from vasterad.com/themes/reneva/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2016 12:13:29 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Reneva</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('/assets/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/front/css/colors/blue.css')}}" id="colors">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<div id="wrapper">

    <!-- Header
    ================================================== -->

    <div class="container">

        <div class="row">
            <div class="header">

                <div class="col-md-3 col-sm-12">
                    <div id="logo">
                        <a href="index-2.html"><img src="{{asset('/assets/front/images/logo.png')}}" alt=""></a>
                    </div>
                </div>

                <div class="col-md-9 col-sm-12">
                    <ul class="header-widget">
                        <li>
                            <i class="sl sl-icon-call-in"></i>
                            <div class="widget-content">
                                <span class="title">Questions?</span>
                                <span class="data">(123) 123-456 </span>
                            </div>
                        </li>

                        <li>
                            <i class="sl sl-icon-location"></i>
                            <div class="widget-content">
                                <span class="title">Our Office</span>
                                <span class="data">45 Park Avenue, NY</span>
                            </div>
                        </li>

                        <li class="with-btn"><a href="{{ url('/auth') }}" class="button border medium">Login/Register</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>


    <!-- Navigation
    ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Mobile Navigation -->
                <div class="menu-responsive">
                    <i class="fa fa-reorder menu-trigger"></i>
                    <i class="fa fa-search search-trigger"></i>
                    <form action="#" method="get" class="responsive-search">
                        <input type="text" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
                    </form>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">

                    <!-- Search Form -->
                    <div class="search-container">
                        <form action="#" method="get">
                            <input type="text" name="s" id="s" onblur="if(this.value=='')this.value='to search type and hit enter';" onfocus="if(this.value=='to search type and hit enter')this.value='';" value="to search type and hit enter" />
                        </form>
                        <div class="close-search"><a class="fa fa-times" href="#"></a></div>
                    </div>

                    <ul class="menu" id="responsive">

                        <li class="dropdown" >
                            <a href="index-2.html" class="current">Home</a>
                            <ul>
                                <li><a href="index-2.html">Home 1</a></li>
                                <li><a href="index-3.html">Home 2</a></li>
                                <li><a href="index-4.html">Home 3</a></li>
                                <li><a href="index-5.html">Home 4</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">Projects</a>
                            <ul>
                                <li><a href="project-categories.html">Categories</a></li>
                                <li><a href="all-projects.html">All Projects</a></li>
                                <li><a href="all-projects-full-width.html">All Projects Full-Width</a></li>
                                <li><a href="#">Single Project Page</a>
                                    <ul>
                                        <li><a href="single-project-content-right.html">Content Right</a></li>
                                        <li><a href="single-project-content-left.html">Content Left</a></li>
                                        <li><a href="single-project-content-bottom.html">Content Bottom With Slider</a></li>
                                        <li><a href="single-project-before-after.html">Before & After Slider</a></li>
                                        <li><a href="single-project-photo-grid.html">Photo Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="all-projects-before-after.html">Before & After</a></li>
                                <li><a href="single-category.html">Single Category</a></li>
                                <li><a href="single-category-full-width.html">Single Category Full-Width</a></li>
                            </ul>
                        </li>

                        <li class="dropdown" >
                            <a href="#">Services</a>
                            <ul>
                                <li><a href="services-1.html">Services List 1</a></li>
                                <li><a href="services-2.html">Services List 2</a></li>
                                <li><a href="single-service-1.html">Single Service Page 1</a></li>
                                <li><a href="single-service-2.html">Single Service Page 2</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Pages</a>
                            <div class="mega two-cols">

                                <div class="mega-section">
                                    <ul>
                                        <li><span class="mega-headline">Elements</span></li>
                                        <li><a href="shortcodes.html">Shortcodes</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                    </ul>
                                </div>

                                <div class="mega-section">
                                    <ul>
                                        <li><span class="mega-headline">Example Pages</span></li>
                                        <li><a href="all-projects-full-width.html">Projects</a></li>
                                        <li><a href="services-1.html">Services List</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>


                            </div>
                        </li>

                        <li class="dropdown" >
                            <a href="#">Shop</a>
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-product-page.html">Product Page</a></li>
                                <li><a href="shopping-cart.html">Cart</a></li>
                            </ul>
                        </li>

                        <li class="dropdown" >
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-post-page.html">Post Page</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>


                        <!-- Search Icon-->
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>

                        <!-- Cart Icon -->
                        <li class="cart-icon"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i><span class="cart-counter">1</span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

@yield('content')
    <div class="margin-top-35"></div>

    <div id="footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h4>About</h4>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                    <a href="#" class="button social-btn"><i class="fa fa-facebook-official"></i> Like Us on Facebook</a>
                </div>

                <div class="col-md-4  col-sm-6">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">In the News</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        Fax: <span>(123) 123-456</span> <br>
                        E-Mail:<span> office@example.com </span><br>
                    </div>
                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">©  Copyright 2016 by <a href="#">Reneva</a>. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery-2.2.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/superfish.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/hoverIntent.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.sticky-kit.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.twentytwenty.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.event.move.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.photogrid.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.tooltips.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.pricefilter.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.stacktable.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.contact-form.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/jquery.jpanelmenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/custom.js')}}"></script>


    <!-- REVOLUTION SLIDER SCRIPT -->
    <script type="text/javascript">
        var tpj=jQuery;
        var revapi4;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_4_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            }else{
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"scripts/",
                    sliderLayout:"auto",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"zeus",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:600,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'<div class="tp-title-wrap"></div>',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:00,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:00,
                                v_offset:0
                            }
                        }
                        ,
                        bullets: {
                            enable:true,
                            hide_onmobile:true,
                            hide_under:600,
                            style:"hermes",
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            direction:"horizontal",
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:0,
                            v_offset:32,
                            space:5,
                            tmp:''
                        }
                    },
                    viewPort: {
                        enable:true,
                        outof:"pause",
                        visible_area:"80%"
                    },
                    responsiveLevels:[1200,992,768,480],
                    visibilityLevels:[1200,992,768,480],
                    gridwidth:[1180,1024,778,480],
                    gridheight:[590,500,400,300],
                    lazyType:"none",
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
                        type:"mouse",
                    },
                    shadow:0,
                    spinner:"off",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });	/*ready*/
    </script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
        (Load Extensions only on Local File Systems !
        The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/front/scripts/extensions/revolution.extension.video.min.js')}}"></script>


    <!-- Style Switcher
    ================================================== -->
    <script src="{{asset('/assets/front/scripts/switcher.js')}}"></script>

    <div id="style-switcher">
        <h2>Style Switcher <a href="#"></a></h2>

        <div>
            <h3>Predefined Colors</h3>
            <ul class="colors" id="color1">
                <li><a href="#" class="blue" title="Blue"></a></li>
                <li><a href="#" class="green" title="Green"></a></li>
                <li><a href="#" class="orange" title="Orange"></a></li>
                <li><a href="#" class="navy" title="Navy"></a></li>
                <li><a href="#" class="yellow" title="Yellow"></a></li>
                <li><a href="#" class="peach" title="Peach"></a></li>
                <li><a href="#" class="beige" title="Beige"></a></li>
                <li><a href="#" class="purple" title="Purple"></a></li>
                <li><a href="#" class="celadon" title="Celadon"></a></li>
                <li><a href="#" class="pink" title="Pink"></a></li>
                <li><a href="#" class="red" title="Red"></a></li>
                <li><a href="#" class="brown" title="Brown"></a></li>
                <li><a href="#" class="cherry" title="Cherry"></a></li>
                <li><a href="#" class="cyan" title="Cyan"></a></li>
                <li><a href="#" class="gray" title="Gray"></a></li>
                <li><a href="#" class="olive" title="Olive"></a></li>
            </ul>

            <h3>Layout Style</h3>
            <div class="layout-style">
                <select id="layout-style">
                    <option value="2">Wide</option>
                    <option value="1">Boxed</option>
                </select>
            </div>

            <h3>Background Image</h3>
            <ul class="colors bg" id="bg">
                <li><a href="#" class="bg1"></a></li>
                <li><a href="#" class="bg2"></a></li>
                <li><a href="#" class="bg3"></a></li>
                <li><a href="#" class="bg4"></a></li>
                <li><a href="#" class="bg5"></a></li>
                <li><a href="#" class="bg6"></a></li>
                <li><a href="#" class="bg7"></a></li>
                <li><a href="#" class="bg8"></a></li>
                <li><a href="#" class="bg9"></a></li>
                <li><a href="#" class="bg10"></a></li>
                <li><a href="#" class="bg11"></a></li>
                <li><a href="#" class="bg12"></a></li>
                <li><a href="#" class="bg13"></a></li>
                <li><a href="#" class="bg14"></a></li>
                <li><a href="#" class="bg15"></a></li>
                <li><a href="#" class="bg16"></a></li>
            </ul>

            <h3>Background Color</h3>
            <ul class="colors bgsolid" id="bgsolid">
                <li><a href="#" class="green-bg" title="Green"></a></li>
                <li><a href="#" class="blue-bg" title="Blue"></a></li>
                <li><a href="#" class="orange-bg" title="Orange"></a></li>
                <li><a href="#" class="navy-bg" title="Navy"></a></li>
                <li><a href="#" class="yellow-bg" title="Yellow"></a></li>
                <li><a href="#" class="peach-bg" title="Peach"></a></li>
                <li><a href="#" class="beige-bg" title="Beige"></a></li>
                <li><a href="#" class="purple-bg" title="Purple"></a></li>
                <li><a href="#" class="red-bg" title="Red"></a></li>
                <li><a href="#" class="pink-bg" title="Pink"></a></li>
                <li><a href="#" class="celadon-bg" title="Celadon"></a></li>
                <li><a href="#" class="brown-bg" title="Brown"></a></li>
                <li><a href="#" class="cherry-bg" title="Cherry"></a></li>
                <li><a href="#" class="cyan-bg" title="Cyan"></a></li>
                <li><a href="#" class="gray-bg" title="Gray"></a></li>
                <li><a href="#" class="olive-bg" title="Olive"></a></li>
            </ul>
        </div>

        <div id="reset"><a href="#" class="button color">Reset</a></div>

    </div>
    <!-- Style Switcher / End -->


</div>
<!-- Wrapper / End -->

</body>

<!-- Mirrored from vasterad.com/themes/reneva/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2016 12:14:46 GMT -->
</html>
