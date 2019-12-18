<!DOCTYPE html>
<!--
	Template Name: SportsZone: Sports Club, New & Game Magazine Mobile Responsive Bootstrap Html Template
	Version: 1.0
	Author: DexignZone
	Website: http://www.dexignzone.com/
	Contact: dexignexpert@gmail.com
	Follow: www.twitter.com/dexignzones
	Like: www.facebook.com/dexignzone

-->
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">


<head>

<!-- Favicons Icon -->
<link rel="icon" href="{{ asset('frontend_assets/images/favicon.ico') }}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/images/Drawing-1.png') }}" />
<!-- Page Title Here -->
<title>NDSABD</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/style.css') }}">
<link class="skin"  rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/skin/skin-1.css') }}">
<!-- <link  rel="stylesheet" type="text/css" href="frontend_assets/css/templete.css">  -->
<link  rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/templete.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/switcher.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/fontawesome/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google fonts -->
<link href="{{ asset('frontend_assets/fonts.googleapis.com/css2c07.css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Oswald:300,400,700|Roboto:100,300,400,500,700,900') }}" rel="stylesheet"><link rel="stylesheet" type="text/css" href="{{ asset('../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/css/hover.min.css') }}">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/plugins/revolution/revolution/css/settings.min.css') }}">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/plugins/revolution/revolution/css/navigation.min.css') }}">
<!-- Google fonts -->
<link href="{{ asset('frontend_assets/fonts.googleapis.com/css2c07.css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Oswald:300,400,700|Roboto:100,300,400,500,700,900') }}" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
	<!-- header -->

		<!-- header -->
<header class="site-header header-style-6 dark">
	<!-- main header -->
	<div class="sticky-header main-bar-wraper">
		<!-- Main Bar Start -->
			<div class="main-bar clearfix ">


			<div class="header-bar">
				<div class="container clearfix">

					<!-- website logo -->
<div class="logo-header mostion"><a href="index-2.html"><img src="{{ asset('frontend_assets/images/Drawing-1.png') }}" width="293" height="189" alt=""></a></div>

					<!-- nav toggle button -->
					<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>							</button>

					<!-- main nav -->



				<div class="header-nav navbar-collapse collapse">
					<ul class=" nav navbar-nav">
						<li class="active"> <a href="{{ url('/') }}">Home<i class="fa fa-chevron-down"></i></a>
						</li>

						<li> <a href="javascript:;">ABOUT US<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ url('/index/whoweare') }}">Who we are</a></li>
								<li> <a href="{{ url('/index/workingcommittee') }}">WORKING COMMITTEE</a></li>
								<li> <a href="{{ url('/index/technicalmember') }}">TECHNICAL MEMBERS</a>	</li>
								<li> <a href="javascript:;">ASSOCIATIVE MEMBERS</a>	</li>
								<li> <a href="{{ url('/index/eventschedule') }}">Event Schedu</a></li>
							</ul>

						</li>



						<li> <a href="javascript:;">Activities<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li> <a href="javascript:;">Current Event</a></li>
								<li><a href="#">Upcoming Event</a></li>
								<li> <a href="javascript:;">Events Gallery</a></li>
								<li> <a href="javascript:;">Photo Galley</a></li>
								<li> <a href="javascript:;">Error</a></li>
								<li> <a href="javascript:;">Login Page</a>
									<ul class="sub-menu">
										<li><a href="#">Login 1</a></li>
										<li><a href="#">Login 2</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li> <a href="{{ url('/index/clubsANDteams') }}">Clubs & Teams<i class="fa fa-chevron-down"></i></a>
							 	<!-- <ul class="sub-menu">
								<li> <a href="javascript:;">Default</a>
									<ul class="sub-menu">
										<li><a href="#">Half image</a></li>
										<li><a href="#">Half image sidebar</a></li>
										<li><a href="#">Half image sidebar left</a></li>
										<li><a href="#">Large image</a></li>
										<li><a href="#">Large image sidebar</a></li>
										<li><a href="#">Large image sidebar left</a></li>
									</ul>
								</li>  -->
						</li>
						<li class="has-mega-menu ">
							<a href="{{ url('/index/testimonial') }}">Testimonial<i class="fa fa-chevron-down"></i></a>
						</li>


						<li> <a href="{{ url('/index/contact') }}">Contact us <i class="fa fa-chevron-down"></i></a>
							{{-- <ul class="sub-menu">
								<li><a href="#">Contact us 1</a></li>
								<li><a href="#">Contact us 2</a></li>
								<li><a href="{{ url('/login') }}">Login</a></li>
								<li><a href="#">Contact us 4</a></li>
							</ul> --}}
						</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
		<!-- Main Bar End -->
	</div>

</header>

<!--- main header END ------------------------------------------------------------------------------->





@yield('content');

<!---footer Part Start-------------------------------------------------------------------------------->
<footer class="site-footer footer-overlay bg-img-fix footer-skew" style="background-image: url({{ asset('frontend_assets/images/background/bg5.jpg') }}); background-position: center bottom; background-size: cover; display: block;">
<div class="footer-top">
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-6 footer-col-4">
      <form class="bg-primary p-a20 text-white m-t15">
        <h2 class="m-tb0 font-40">Address</h2>
        <p>Narayanganj District Sports Association.</br>
					Osmani Pouro Stadium</br>
					Isdaeer-Narayanganj</p>
        <div class="m-tb15">
          <ul class="dez-social-icon border dez-social-icon-lg">
            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
          </ul>
        </div>
        <div class="m-b15">
          <input name="first_name" required="" class="form-control" placeholder="Email Subscribe" type="text">
        </div>
        <div class="">
          <input type="button" class="site-button button-3d gray btn-block" value="Submit" name="Submit">
        </div>

      </form>
    </div>
    <div class="col-md-3 col-sm-6 footer-col-4">
      <div class="widget recent-posts-entry">
        <h4 class="m-b15 text-uppercase">Resent Post</h4>
        <div class="dez-separator bg-primary"></div>
        <div class="widget-post-bx">
          <div class="widget-post clearfix">
            <div class="dez-post-media"> <img src="{{ asset('frontend_assets/images/blog/recent-blog/pic1.jpg') }}" alt="" width="200" height="143"> </div>
            <div class="dez-post-info">
              <div class="dez-post-header">
                <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
              </div>
              <div class="dez-post-meta">
                <ul>
                  <li class="post-author">By Admin</li>
                  <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="widget-post clearfix">
            <div class="dez-post-media"> <img src="{{ asset('frontend_assets/images/blog/recent-blog/pic2.jpg') }}" alt="" width="200" height="160"> </div>
            <div class="dez-post-info">
              <div class="dez-post-header">
                <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
              </div>
              <div class="dez-post-meta">
                <ul>
                  <li class="post-author">By Admin</li>
                  <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="widget-post clearfix">
            <div class="dez-post-media"> <img src="{{ asset('frontend_assets/images/blog/recent-blog/pic3.jpg') }}" alt="" width="200" height="160"> </div>
            <div class="dez-post-info">
              <div class="dez-post-header">
                <h6 class="post-title  text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
              </div>
              <div class="dez-post-meta">
                <ul>
                  <li class="post-author">By Admin</li>
                  <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 footer-col-4">
      <div class="widget widget_services">
        <h4 class="m-b15 text-uppercase">Our services</h4>
        <div class="dez-separator bg-primary"></div>
        <ul>
          <li><a href="#">Membership Offers</a></li>
          <li><a href="#">Training Schedule</a></li>
          <li><a href="#">Inter Competitions</a></li>
          <li><a href="#">Awards & Trophies</a></li>
          <li><a href="#">Additional Help</a></li>
          <li><a href="#">Training Schedule</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 footer-col-4">
      <div class="widget widget_gallery">
        <h4 class="m-b15 text-uppercase">PHOTOS FROM FLICKR</h4>
        <div class="dez-separator bg-primary"></div>
        <ul>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/football.jpg') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/cricket.png') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/Batminton.jpg') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/Chess.jpg') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/swiming.png') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/Tennis.jpg') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/Vollyball.png') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/shooting.png') }}" alt=""></a> </li>
          <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('frontend_assets/images/gallery/pic9.jpg') }}" alt=""></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<!-- footer bottom part -->
<div class="footer-bottom">
<div class="container">
  <div class="row">
    <div class="col-md-4 text-left"> <span>© Copyright 2019</span> </div>
    <div class="col-md-4 text-center"> <span> Design and Development By <i class="fa fa-heart text-red heart"></i> Asad uz zaman </span> </div>
    <div class="col-md-4 text-right "> <a href="about-2.html"> About</a> <a href="help.html"> Help Desk</a> <a href="privacy-policy.html"> Privacy Policy</a> </div>
  </div>
</div>
</div>
</footer>
<!-- Footer END-->	<!-- Footer END-->
<!-- scroll top button -->
<button class="scroltop fa fa-caret-up" ></button>
</div>
{{-- <div id="loading-area"></div> --}}
<!-- JavaScript  files ========================================= -->
<!-- JavaScript  files ========================================= -->


<script src="{{ asset('frontend_assets/js/combine.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
<!-- google map  -->
<script src="{{ asset('plugins/scroll/scrollbar.min.js') }}"></script>
<!-- Scroll bar --><script type="text/javascript"  src="{{ asset('frontend_assets/js/jquery.countdown.js') }}"></script>
<!-- jquery countdown -->
<script type="text/javascript"  src="{{ asset('frontend_assets/js/dz.ajax.js') }}"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<!-- revolution JS FILES -->
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend_assets/js/rev.slider.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
'use strict';
dz_rev_slider_1();
});	/*ready*/
</script>

</body>

</html>
