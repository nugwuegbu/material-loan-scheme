<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Payhomes Nigeria Limited</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{ asset('css/bootstrap.css') }}">

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css')  }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset('css/et-line-font/et-line-font.css') }}">

<!-- Main Menu CSS -->
<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Prettyphoto-->
<link rel="stylesheet" href="{{ asset('css/prettyphoto.css') }}">

<!--Master slider-->
<link href="{{ asset('master-slider/style/masterslider.css') }}" rel="stylesheet">
<link href="{{ asset('master-slider/skins/default/style.css') }}" rel="stylesheet">

<!-- OWL STYLE CSS -->
<link rel="stylesheet" type="text/css"  href="{{ asset('css/owl.css') }}">

<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">

<!-- Responsive -->
<link rel="stylesheet" type="text/css"  href="{{ asset('css/responsive.css') }}">

<!-- Cubeportfolio -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/cubeportfolio.min.css') }}">
</head>

<body>

<!-- Preloader start-->

<!-- <div id="preloader">
  <div id="loader"></div>
</div> -->

<!-- Preloader end--> 

<!-- Nav Bar-->

<header>
  <div class="header-top-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="header-phone">
            <ul>
              <li><i class="fa fa-phone" aria-hidden="true"></i>( +234 ) 8037997777</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@payhomes.com.ng</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="header-address">
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>Abuja and Lagos, Nigeria</li>
              <li><i class="fa fa-globe" aria-hidden="true"></i>English</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header1-area header-two">
    <div class="header-top-area" id="sticker">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="logo-area"> <a href="{{ url('/') }}"><img class="img-responsive" src="{{ asset('img/logo2.png') }}" alt="Payhomes logo"></a> </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
            <div class="main-menu">
              <nav>
                <ul>
                  <li class="active"><a href="{{ url('/') }}">Home</a>
                   <!--  <ul class="menu-dropdown">
                      <li><a href="home_2.html">Home 2</a></li>
                      <li><a href="home_3.html">Home 3</a></li>
                      <li><a href="home_4.html">Home 4</a></li>
                    </ul> -->
                  </li>
                  <li><a href="{{ route('about-us') }}">About</a>
                    <!-- <ul class="menu-dropdown">
                      <li><a href="about_us.html">About Us</a></li>
                      <li><a href="company_overview.html">Company Overview</a></li>
                      <li><a href="company_history.html">Company History</a></li>
                      <li><a href="services.html">Services </a></li>
                      <li><a href="our_partners.html">Our partners</a></li>
                    </ul> -->
                  </li>
                   <li><a href="{{ route('contact-us') }}">Contact</a> </li>
                  <li><a id="join-btn" class="theme-btn btn-style-orange-b" href="{{ route('register') }}">Join</a>
                    <!-- <ul class="menu-dropdown">
                      <li><a href="product-case_1.html">Project Case 1</a></li>
                      <li><a href="product-case_2.html">Project Case 2</a></li>
                      <li><a href="product-case_3.html">Project Case 3</a></li>
                    </ul> -->
                  </li>
                  <li><a id="login-btn" class="theme-btn btn-style-black" href="{{ route('login') }}">Login</a>
                    <!-- <ul class="menu-dropdown">
                      <li><a href="events_1.html">Events 1</a></li>
                      <li><a href="events_2.html">Events 2</a></li>
                      <li><a href="events_3.html">Events3</a></li>
                    </ul> -->
                  </li>
                 <!--  <li><a href="#">Pages</a>
                    <ul class="menu-dropdown">
                      <li><a href="advisors.html">Our Advisors</a></li>
                      <li><a href="business_team.html">Business Team</a></li>
                      <li><a href="faq_1.html">Faq</a></li>
                      <li><a href="login.html"> Login</a></li>
                      <li><a href="login_register.html">Login Register</a></li>
                      <li><a href="gallery_1.html">Product Gallery 1</a></li>
                    </ul>
                  </li> -->
                  <!-- <li><a href="#">Blog</a>
                    <ul class="menu-dropdown">
                      <li><a href="blog_1.html"> Blog 1</a></li>
                      <li><a href="blog_2.html"> Blog 2</a></li>
                      <li><a href="blog_3.html"> Blog 3</a></li>
                      <li><a href="blog_4.html">Blog 4</a></li>
                    </ul>
                  </li> -->
                 
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <div class="header-top-right">
              <ul>
                <li>
                  <div class="header-top-search search-box">
                    <form>
                      <input class="search-text" type="text"  placeholder="Search Here..." >
                      <a class="search-button" href="index3.html#"> <i class="fa fa-search" aria-hidden="true"></i> </a>
                    </form>
                  </div>
                </li>
                <li>
                  <div class="additional-menu-area" id="additional-menu-area">
                    <div id="mySidenav" class="sidenav"> <a href="index3.html#" class="closebtn">×</a>
                      <div id="contact-innerr" class="text-center low-back-footer-w">
                        <div class="low-back-up">
                          <div class="col-md-10 col-sm-offset-1 c-2">
                            <div class="section-title center">
                              <h2>Leave<strong> message</strong></h2>
                            </div>
                            <form name="sentMessage" id="contactForms" novalidate>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="text" id="names" class="form-control" placeholder="Name" required="required">
                                    <p class="help-block text-danger"></p>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="email" id="emails" class="form-control" placeholder="Email" required="required">
                                    <p class="help-block text-danger"></p>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <textarea name="message" id="messages" class="form-control" rows="4" placeholder="Message" required></textarea>
                                <p class="help-block text-danger"></p>
                              </div>
                              <button type="submit" class="btn-download-send">Send Message</button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- times--> 
                    </div>
                    <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area start -->
  <div class="mobile-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="logo-area"> <a href="{{ url('/') }}"><img class="img-responsive" src="{{ asset('img/logo2.png') }}" alt="Payhomes logo"></a> </div>
        </div>
        <div class="col-md-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <!-- <li><a href="index2.html">Home 2</a></li>
                <li><a href="index3.html">Home 3</a></li>
                <li><a href="index4.html">Home 4</a></li> -->
                <li><a href="{{ route('about-us') }}">About</a>
                  <!-- <ul class="mega-menu-area">
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="company_overview.html">Company Overview</a></li>
                    <li><a href="company_history.html">Company History</a></li>
                    <li><a href="services.html">Services </a></li>
                    <li><a href="our_partners.html">Our partners</a></li>
                  </ul> -->
                </li>
                <li><a href="{{ route('contact-us') }}">Contact</a> </li>
                <li><a id="join-btn" class="theme-btn btn-style-orange-b" href="{{ route('register') }}">Join</a>
                  <!-- <ul class="mega-menu-area">
                    <li><a href="product-case_1.html">Project Case 1</a></li>
                    <li><a href="product-case_2.html">Project Case 2</a></li>
                    <li><a href="product-case_3.html">Project Case 3</a></li>
                  </ul> -->
                </li>
                <li><a id="login-btn" class="theme-btn btn-style-black" href="{{ route('login') }}">login</a>
                 <!--  <ul class="mega-menu-area">
                    <li><a href="events_1.html">Events 1</a></li>
                    <li><a href="events_2.html">Events 2</a></li>
                    <li><a href="events_3.html">Events3</a></li>
                  </ul> -->
                </li>
                <!-- <li><a href="#"> Pages</a>
                  <ul class="mega-menu-area">
                    <li><a href="advisors.html">Our Advisors</a></li>
                    <li><a href="business_team.html">Business Team</a></li>
                    <li><a href="faq_1.html">Faq</a></li>
                    <li><a href="login.html"> Login</a></li>
                    <li><a href="login_register.html">Login Register</a></li>
                    <li><a href="gallery_1.html">Product Gallery 1</a></li>
                  </ul>
                </li> -->
                <!-- <li><a href="#"> Blog</a>
                  <ul class="mega-menu-area">
                    <li><a href="blog_1.html"> Blog 1</a></li>
                    <li><a href="blog_2.html"> Blog 2</a></li>
                    <li><a href="blog_3.html"> Blog 3</a></li>
                    <li><a href="blog_4.html">Blog 4</a></li>
                  </ul>
                </li> -->
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mobile-menu-area end --> 
</header>

<!-- END Nav Bar --> 

<!-- MasterSlider -->
@yield('content')

<div class="main-area top-download text-center ">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p class="top-btn-text">The most convenient low income loan and housing facility! </p>
      </div>
      <div class="col-md-4 "> <a href="{{ route('about-us') }}" class="theme-btn btn-style-white"><i class="fa fa-pencil-square-o"></i> More Info...</a> </div>
    </div>
  </div>
</div>

<!-- END Demo Heading --> 

<!-- Footer Start  -->

<div class="footer-section-area padding-top-bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        
        <div class="title">
          <h4>Contact Us</h4>
        </div>
        <ul>
          <li><a href="#"> <i class="fa fa-map-marker fa-2x"></i> Abuja and Lagos, Nigeria </a></li>
          <li><a href="#"><i class="fa fa-envelope-o fa-2x"></i>info@payhomes.com.ng</a></li>
          <li><a href="#"><i class="fa fa-phone fa-2x"></i>08037997777</a></li>
          <!-- <li><a href="#"><i class="fa fa-phone fa-2x"></i>Skype: thhsdsd25</a></li> -->
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="title">
          <h4>Quick Links</h4>
        </div>
        <div class="information">
          <ul>
            <!-- <li><a href=""> Service</a></li> -->
            <li><a href="">FAQ</a></li>
            <li><a href="{{ route('about-us') }}"> About Us</a></li>
            <li><a href=""> Privacy policy</a></li>
            <!-- <li><a href=""> Support</a></li> -->
            <!-- <li><a href="{{ route('contact-us') }}"> Contact Us</a></li> -->
            <!-- <li><a href=""> Join Us</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="title">
          <h4>Support Links</h4>
        </div>
        <div class="our-service">
          <ul>
            <!-- <li><a href=""> Service</a></li> -->
            <li><a href="">FAQ</a></li>
            <li><a href="{{ route('contact-us') }}"> Contact Us</a></li>
            <!-- <li><a href=""> Privacy policy</a></li> -->
            <li><a href=""> Support</a></li>
            <!-- <li><a href="{{ route('contact-us') }}"> Contact Us</a></li> -->
            <!-- <li><a href="{{ route('register') }}"> Join Us</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="title">
          <h4>latest tweets</h4>
        </div>
        <div class="popular-post">
          <ul>
            <li> <a href="">70% loan facilities in form of material and labour. </a> 
              <!-- <span class="post-date">26 Sep, 2019</span>  -->
            </li>
            <li> <a href="">Feasible payment model for 30% equity contribution. </a>
             <!-- <span class="post-date">12 Oct, 2019</span> -->
              </li>
            <!-- <li> <a href="">Opportunity to choose any location provided the land has document, </a><span class="post-date">02 Nov, 2019</span> </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Footer --> 

<!-- Copyright Start  -->

<div class="copy-right-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="copy-right">
          <p>Payhomes Nigeria Ltd © 2019-20 Design </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="social-media">
          <ul>
            <li><a href="index2.html#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="index2.html#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="index2.html#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="index2.html#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="index2.html#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            <li><a href="index2.html#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Copyright --> 

<!-- Back to Top --> 
<a href="#" id="back-to-top" title="Back to top"><img src="{{ asset('img/top-arrow.png') }}" alt=""></a> 

<!-- js file  --> 
<script src="{{ asset('js/theme/jquery-1.12.5.min.js') }}"></script> 

<!-- Bootstrap JS  --> 
<script src="{{ asset('js/theme/bootstrap.js') }}"></script> 

<!-- load cubeportfolio  --> 
<script src="{{ asset('js/theme/jquery-latest.min.js') }}"></script> 
<script src="{{ asset('js/theme/jquery.cubeportfolio.min.js') }}"></script> 
<script src="{{ asset('js/theme/main-portfolio.js') }}"></script> 

<!-- Prettyphoto JS  --> 
<script src="{{ asset('js/theme/jquery.prettyphoto.js') }}"></script> 

<!-- Meanmenu Js --> 
<script src="{{ asset('js/theme/jquery.meanmenu.min.js') }}" ></script> 

<!-- OWL JS  --> 
<script src="{{ asset('js/theme/owl.js') }}"></script> 

<!--jqBootstrapValidation js file--> 
<script src="{{ asset('js/theme/jqBootstrapValidation.js') }}"></script> 

<!--contact js file--> 
<script src="{{ asset('js/theme/contact_me.js') }}"></script> 

<!--master slider--> 
<script src="{{ asset('master-slider/js/masterslider.min.js') }}"></script> 

<!-- Easypiechart JS  --> 
<script src="{{ asset('js/theme/easypiechart.js') }}"></script> 

<!-- main js --> 
<script src="{{ asset('js/theme/main.js') }}"></script> 
<script>
					var masterslider = new MasterSlider();

			// slider controls
			masterslider.control('timebar'    ,{ autohide:true, overVideo:true, align:'bottom', color:'#e5e5e5'  , width:3 });
			// slider setup
			masterslider.setup("masterslider", {
				width           : 1300,
				height          : 768,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : true,
				swipe           : true,
				mouse           : true,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : true,
				instantStartLayers:true,
				loop            : true,
				shuffle         : true,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : true,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : true,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : true,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
			});

						MSScrollParallax.setup( masterslider, 30, 50, false );		</script>
</body>
</html>
