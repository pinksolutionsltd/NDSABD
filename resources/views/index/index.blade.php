@extends('layouts.frontend')

@section('content')



<!-- Content ---------------------------------------------------------------------------------------->
<div class="page-content">
  <!-- Slider -->
  <div class="main-slider style-two default-banner">
     <div class="tp-banner-container">
      <div class="tp-banner" >
        <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
            <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
              <ul>
                @foreach ($mainsliders as $mainslider)

								<!-- SLIDE 3-------------------------------------------------------------------------->
								<li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="">
									<!-- MAIN IMAGE -->
									<img src="{{ asset($mainslider->slider_image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

								</li>
								<!-- SLIDE 3-->

                @endforeach

              </ul>
          <div class="tp-bannertimer tp-bottom bg-primary"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
      </div>
     </div>
  </div>

  <!-- Slider END -->


    <!-- About The Sports -->
  	<div class="section-full bg-white p-t70 p-b40">
  		<div class="container">
  			<div class="section-head text-center ">
  				<h2 class="h1 text-uppercase" style="color:#FFA500; font-size:50px;">Current Event</h1>
  				<h2 class="h2 text-uppercase" style="color:#808000; font-size:30px;"> {{ $indexcurrentevents->indexcurrentevent_heading }} </h2>
  				  <div class="dez-separator-outer ">
              <div class="dez-separator bg-primary style-liner"></div>
            <h2 style="color:#808000; font-size:30px;">{{ $indexcurrentevents->indexcurrentevent_details }}<h2>
          </div>
  			</div>
  		</div>
  	</div>
  	<!-- About The Sports -->




	<!-- Next Match -->
	<div class="section-full bg-white p-t70 p-b40 bg-img-fix overlay-white-dark" style="background-image:url({{ asset('frontend_assets/images/background/bg5.jpg') }}); background-position:center; ">
		<div class="container">
			<div class="section-head text-center ">
				<h2 class="h2 text-uppercase"> Next Event </h2>
				<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
				{{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p> --}}
			</div>
			<div class="section-content">
				<div class="next-match owl-btn-center-lr">

@foreach ($indexnextevents as $indexnextevent)

					<div class="item p-t20">
						<div class="next-match-team clearfix m-b30">
							<div class="col-md-5 col-sm-5 col-xs-4">
								<a href="#" class="pull-right  m-t20">
									<span class="country"><img src="{{asset('frontend_assets/images/flag/flag1.jpg')}}"  alt=""/></span>
									<span>{{ $indexnextevent->indexnextevent_teamone }}</span>
								</a>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-4  ">
								<div class="vs-team bg-primary"><span>VS</span></div>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-4">
								<a href="#" class="pull-left m-t20">
									<span>{{ $indexnextevent->indexnextevent_teamtwo }}</span>
									<span class="country"><img src="{{asset('frontend_assets/images/flag/flag2.jpg')}}"  alt=""/></span>
								</a>
							</div>
						</div>
						<div class="m-t30 loction text-center">
							<strong>{{ $indexnextevent->indexnextevent_time }}</strong>
							<strong>{{ $indexnextevent->indexnextevent_place }}</strong>
						</div>
					</div>

@endforeach
					{{-- <div class="item p-t20">
						<div class="next-match-team clearfix m-b30">
							<div class="col-md-5 col-sm-5 col-xs-4">
								<a href="#" class="pull-right  m-t20">
									<span class="country"><img src="images/flag/flag1.jpg" alt=""/></span>
									<span>England</span>
								</a>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-4  ">
								<div class="vs-team bg-primary"><span>VS</span></div>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-4">
								<a href="#" class="pull-left m-t20">
									<span>The Africa</span>
									<span class="country"><img src="images/flag/flag2.jpg"  alt=""/></span>
								</a>
							</div>
						</div>
						<div class="m-t30 loction text-center">
							<strong>November 14, 2017 | 12:00 AM</strong>
							<strong>Cambridgeshire UK</strong>
						</div>
					</div> --}}

				</div>
			</div>
		</div>
	</div>
	<!-- Next Match End -->




  <!-- World Sport Template blog -->
  	<div class="section-full overlay-black-dark bg-img-fix p-t70 p-b70 dez-move-image" style="background-image:url({{ asset('/frontend_assets/s3.amazonaws.com/images/mamber.jpg') }});">

class="col-md-3 col-sm-6"

        <div class="container-fluid">
          	<div class="row">

              <div class="col-md-3 col-sm-6">
            		<img width="358" height="460" src="{{ asset('ImageBakup/Sheik Mujubur Rehman.png') }}"  class="img-responsive center-block" alt="Responsive image">
            	</div>
              <div class="col-md-6 col-sm-6 text-center">
                <h1 style="color:#cefbf8; font-weight: bold;">নারায়ণগঞ্জ জেলা ক্রীড়া সংস্থা</h1>
            		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            	</div>
              <div class="col-md-3 col-sm-6">
            		<img width="358" height="460" src="{{ asset('ImageBakup/SheckHasina3.jpg') }}"  class="img-responsive center-block" alt="Responsive image">
              </div>

          </div>
        </div>


  	</div>
  	<!-- World Sport Template END -->




  <!-- President Info Start-->
     <div class="section-full bg-white content-inner">
         <div class="container">
             <div class="section-head text-center ">
                 <h3 class="h3">Meet our Honorable Committee</h3>
                 <div class="dez-separator bg-primary"></div>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
             </div>
             <div class="section-content ">
                 <div class="row">


@foreach ($presidentinfos as $presidentinfo)

                     <div class="col-md-4 col-sm-4 m-b30">
                         <div class="dez-box">
                             <div class="dez-media"> <a href="#"><img src="{{ asset($presidentinfo->presidentinfo_image) }}" alt=""></a> </div>
                             <div class="dez-info p-a20 p-t40 border-1" style="color:#393333; text-align:center;">
                                 <h2 class="dez-title m-tb0"><a href="#">{{ $presidentinfo->presidentinfo_name }}</a></h2>
                                 <div class="bg-primary skew-content-box">
                                     <ul class="dez-social-icon">
                                         <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                         <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                         <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                         <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                         <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                         <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                     </ul>
                                 </div>
                                 <span>{{ $presidentinfo->presidentinfo_title }}</span>
                                 <p class="m-t2 m-b0">{{ $presidentinfo->presidentinfo_Details }}</p>
                             </div>
                         </div>
                     </div>


                      <div class="col-md-8 col-sm-4 m-b30">
                         <div class="dez-box myborder" style="border-style: solid;border-color: #ffc300;">
                           <div class="dez-box" style="margin: 25px 50px; text-align:center;">
                             <h3 style="color:#337ab7; font-weight: bold;"> Speech of President</h3>
                           </div>
                           <div class="dez-box" style="margin: 25px 50px;">
                             <p style="color:#393333; font-weight: bold;">{{ $presidentinfo->presidentinfo_Speech }}</p>
                           </div>
                         </div>
                     </div>

          @endforeach
                 </div>
             </div>
         </div>
     </div>
     <!-- President Info End-->


       <!-- Secretary Info Start-->
          <div class="section-full bg-white content-inner">
              <div class="container">
                  <div class="section-content ">
                      <div class="row">

     @foreach ($secretaries as $secretary)

                          <div class="col-md-4 col-sm-4 m-b30">
                              <div class="dez-box">
                                  <div class="dez-media"> <a href="#"><img src="{{ asset($secretary->secretary_image) }}" alt=""></a> </div>
                                  <div class="dez-info p-a20 p-t40 border-1" style="color:#393333; text-align:center;">
                                      <h2 class="dez-title m-tb0"><a href="#">{{ $secretary->secretary_name }}</a></h2>
                                      <div class="bg-primary skew-content-box">
                                          <ul class="dez-social-icon">
                                              <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                              <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                              <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                              <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                              <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                              <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                          </ul>
                                      </div>
                                      <span>{{ $secretary->secretary_title }}</span>
                                      <p class="m-t10 m-b0">{{ $secretary->secretary_Details }}</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-8 col-sm-4 m-b30">
                             <div class="dez-box myborder" style="border-style: solid;border-color: #ffc300;">
                               <div class="dez-box" style="margin: 25px 50px; text-align:center;">
                                 <h3 style="color:#337ab7; font-weight: bold;"> Speech of General Secretary </h3>
                               </div>
                               <div class="dez-box" style="margin: 25px 50px;">
                                 <p style="color:#393333; font-weight: bold;">{{ $secretary->secretary_Speech }}</p>
                               </div>
                             </div>
                         </div>

               @endforeach
                      </div>
                  </div>
              </div>
          </div>
          <!-- Secretary Info  End -->


     <!-- Our Awesome Services -->
                <div class="section-full bg-white content-inner">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12 text-center section-head">
    								<h3 class="h3">Our Awesome Services</h3>
    								<div class="dez-separator bg-primary"></div>
                                    <div class="clear"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">

                                  @foreach ($awesomeservicelefts as $awesomeserviceleft)

                                    {{-- <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                        <div class="icon-bx-md radius bg-primary"><i class="fa fa-futbol-o"></i></div>
                                        <div class="icon-content p-r40">
                                            <h5 class="dez-tilte">Full Day Session</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-2 m-b30 p-a20  right m-r50">
                                        <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-bell"></i></a> </div>
                                        <div class="icon-content p-r40">
                                            <h5 class="dez-tilte">Special Coach</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                        </div>
                                    </div> --}}
                                    <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                        <div class="icon-bx-md radius bg-primary"awesomeserviceleft_name> <a href="#" class="icon-cell"><i class="fa fa-users"></i></a> </div>
                                        <div class="icon-content p-r40">
                                            <h5 class="dez-tilte ">{{ $awesomeserviceleft->awesomeserviceleft_name }}</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>{{ $awesomeserviceleft->awesomeserviceleft_details }}</p>
                                        </div>
                                    </div>

                                  @endforeach
                                </div>
                                <div class="col-md-4 col-sm-4 text-center ">
                                    <div class="worker"> <img src="{{ asset('frontend_assets/s3.amazonaws.com/images/service-image.png') }}" alt=""/> </div>
                                </div>
                                <div class="col-md-4 col-sm-4">

                                  @foreach ($awesomeservicerights as $awesomeserviceright)

                                    <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                        <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-calendar"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="dez-tilte ">{{ $awesomeserviceright->awesomeserviceright_name }}</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>{{ $awesomeserviceright->awesomeserviceright_details }}</p>
                                        </div>
                                    </div>

                                  @endforeach

                                    {{-- <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                        <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                                        <div class="icon-content p-l40">
                                            <h5 class="dez-tilte ">Qualified Staf</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                        </div>
                                    </div>
                                    <div class="icon-bx-wraper bx-style-2 m-b10 p-a20 left m-l50">
                                        <div class="icon-bx-md radius bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-clock-o"></i></a></div>
                                        <div class="icon-content p-l40">
                                            <h5 class="dez-tilte ">Training Schedule</h5>
                                            <div class="dez-separator-outer ">
                                                <div class="dez-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Awesome Services END -->



	<!-- Our Sports  -->
	<div class="section-full bg-img-fix p-t70 p-b50 overlay-black-middle our-projects-galery" style="background-image:url({{ asset('frontend_assets/images/background/bg5.jpg') }}); background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 m-b30">
					<div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
						<div class="sports-icon ">
							<img src="images/sports/pic1.png"  alt=""/>
						</div>
						<h3>AMAZING EXPERIENCE</h3>
						<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
						<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 m-b30">
					<div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
						<div class="sports-icon ">
							<img src="images/sports/pic2.png"  alt=""/>
						</div>
						<h3>MEDALS WON</h3>
						<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
						<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 m-b30 ">
					<div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
						<div class="sports-icon ">
							<img src="images/sports/pic3.png"  alt=""/>
						</div>
						<h3>TALENTED STAFF</h3>
						<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
						<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6  m-b30 ">
					<div class="border-1 p-a15 text-center text-white skew-triangle left-top hvr-wobble-horizontal">
						<div class="sports-icon ">
							<img src="images/sports/pic4.png"  alt=""/>
						</div>
						<h3>ADVENTURE ZONE</h3>
						<div class="dez-separator-outer "><div class="dez-separator bg-primary style-liner"></div></div>
						<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Sports END -->

@endsection
