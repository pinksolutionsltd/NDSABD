@extends('layouts/frontend')
@section('content')

<!-- Content -->
   <div class="page-content">
       <!-- inner page banner -->
       <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend_assets/s3.amazonaws.com/images/background/ng1.jpg') }});">
           <div class="container">
               <div class="dez-bnr-inr-entry">
                   <h1 class="text-white">Testimonials</h1>
               </div>
           </div>
       </div>
       <!-- inner page banner END -->
       <!-- Breadcrumb row -->
       <div class="breadcrumb-row">
           <div class="container">
               <ul class="list-inline">
                   <li><a href="{{ url('/') }}">Home</a></li>
                   <li>Testimonials</li>
               </ul>
           </div>
       </div>
       <!-- Breadcrumb row END -->
       <div class="section-full">
           <!-- content start -->


           <!-- World Sport Template blog -->
           	<div class="section-full overlay-white bg-light-fix p-t70 p-b70 " style="background:white;">
           		<div class="container">
           			<div class="row">
           				<div class="col-md-12 text-primary">
           					<h2 class="m-auto font-40 m-b40 text-left">" Champions Keep Playing until they get it right "
           						<span class="pull-right font-16 m-t20"><i> -Billie Jean King</i></span>
           					</h2>
           					<div class="text-center"><a href="#" class="site-button">Join NDSABD</a></div>
           				</div>
           			</div>
           		</div>
           	</div>
           	<!-- World Sport Template END -->



           <!-- What peolpe are saying style 1 -->
           <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url({{ asset('frontend_assets/s3.amazonaws.com/images/background/bg1.jpg') }});">
           {{-- <div class="section-full bg-white bg-img-fix content-inner"> --}}
               <div class="container">
                   <div class="section-head text-center">
                       <h2 class="text-uppercase text-white">What peolpe are saying style 1</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-one text-white">
                         @foreach ($testimonialones as $testimonialone)
                           <div class="item">
                               <div class="testimonial-1">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset($testimonialone->testimonialone_image) }}" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text text-white">
                                       <p>{{ $testimonialone->testimonialone_comments }}</p>
                                   </div>
                                   <div class="testimonial-detail text-white"> <strong class="testimonial-name">{{ $testimonialone->testimonialone_name }}</strong> <span class="testimonial-position">{{ $testimonialone->testimonialone_details }}</span> </div>
                               </div>
                           </div>
                            @endforeach

                           {{-- <div class="item">
                               <div class="testimonial-1">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">A.K.M Shamim Osman</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div> --}}
                           {{-- <div class="item">
                               <div class="testimonial-1">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">I.V Rahman</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div> --}}
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 1 END -->


           <!-- What peolpe are saying style 2 -->

           <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url({{ asset('frontend_assets/s3.amazonaws.com/images/background/bg1.jpg') }});">
               <div class="container">
                   <div class="section-head text-center text-white">
                       <h2 class="text-uppercase">What peolpe are saying style 2</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-one">

                         @foreach ($testimonialtwos as $testimonialtwo)

                           <div class="item">
                               <div class="testimonial-1 testimonial-bg">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset($testimonialtwo->testimonialtwo_image) }}" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>{{ $testimonialtwo->testimonialtwo_comments }}</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">{{ $testimonialtwo->testimonialtwo_name }}</strong> <span class="testimonial-position">{{ $testimonialtwo->testimonialtwo_details }}</span> </div>
                               </div>
                           </div>

                         @endforeach
                           {{-- <div class="item">
                               <div class="testimonial-1 testimonial-bg">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-1 testimonial-bg">
                                   <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets conta</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div> --}}
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 2 END -->


           <!-- What peolpe are saying style 3 -->
{{--         <div class="section-full bg-white bg-img-fix content-inner">
               <div class="container">
                   <div class="section-head text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 3</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-two">
                           <div class="item">
                               <div class="testimonial-2">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-2">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-2">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 3 END -->
           <!-- What peolpe are saying style 4 -->
           <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/background/bg2.jpg);">
               <div class="container">
                   <div class="section-head text-white text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 4</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-two">
                           <div class="item">
                               <div class="testimonial-2 testimonial-bg">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-2 testimonial-bg">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-2 testimonial-bg">
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix">
                                       <div class="testimonial-pic quote-left radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                       <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 4 END -->
           <!-- What peolpe are saying style 5 -->
           <div class="section-full bg-white bg-img-fix content-inner">
               <div class="container">
                   <div class="section-head text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 5</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-three">
                           <div class="item">
                               <div class="testimonial-3">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-3">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-3">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 5 END -->
           <!-- What peolpe are saying style 6 -->
           <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/background/bg3.jpg);">
               <div class="container">
                   <div class="section-head text-white text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 6</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-three">
                           <div class="item">
                               <div class="testimonial-3 testimonial-bg">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-3 testimonial-bg">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-3 testimonial-bg">
                                   <div class="quote-left"></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="testimonial-pic radius shadow"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 6 END -->
           <!-- What peolpe are saying style 7 -->
           <div class="section-full bg-white bg-img-fix content-inner">
               <div class="container">
                   <div class="section-head text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 7</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-four">
                           <div class="item">
                               <div class="testimonial-4 ">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text text-white">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name text-white">David Matin</strong> <span class="testimonial-position ">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-4">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text text-white">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name text-white">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-4">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text text-white">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name text-white">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 7 END -->
           <!-- What peolpe are saying style 8 -->
           <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url(../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/background/bg4.jpg);">
               <div class="container">
                   <div class="section-head text-white text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 8</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-four">
                           <div class="item">
                               <div class="testimonial-4 testimonial-bg">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-4 testimonial-bg">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-4 testimonial-bg">
                                   <div class="testimonial-pic"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                   <div class="testimonial-text">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the standard dummy text ever since the when printer. [...]</p>
                                   </div>
                                   <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                   <div class="quote-right"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 8 END -->
           <!-- What peolpe are saying style 9 -->
           <div class="section-full  bg-gray bg-img-fix content-inner testimonials">
               <div class="container">
                   <div class="section-head text-center">
                       <h2 class="text-uppercase">What peolpe are saying style 9</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-five">
                           <div class="item">
                               <div class="testimonial-6">
                                   <div class="testimonial-text bg-white quote-left quote-right">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix bg-primary text-white">
                                       <h4 class="testimonial-name m-tb0">David Matin</h4>
                                       <span class="testimonial-position">Student</span>
                                       <div class="testimonial-pic radius"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-6">
                                   <div class="testimonial-text bg-white quote-left quote-right">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix bg-primary text-white">
                                       <h4 class="testimonial-name m-tb0">David Matin</h4>
                                       <span class="testimonial-position">Student</span>
                                       <div class="testimonial-pic radius"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- What peolpe are saying style 9 END -->
           <!-- What peolpe are saying style 10 -->
           <div class="section-full overlay-black-middle bg-img-fix content-inner testimonials " style="background-image:url(../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/background/bg5.jpg);">
               <div class="container">
                   <div class="section-head text-white text-center text-white">
                       <h2 class="text-uppercase">What peolpe are saying style 10</h2>
                       <div class="dez-separator bg-primary"></div>
                   </div>
                   <div class="section-content">
                       <div class="testimonial-five">
                           <div class="item">
                               <div class="testimonial-6">
                                   <div class="testimonial-text bg-white quote-left quote-right">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix bg-primary text-white">
                                       <h4 class="testimonial-name m-tb0">David Matin</h4>
                                       <span class="testimonial-position">Student</span>
                                       <div class="testimonial-pic radius"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                   </div>
                               </div>
                           </div>
                           <div class="item">
                               <div class="testimonial-6">
                                   <div class="testimonial-text bg-white quote-left quote-right">
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                   </div>
                                   <div class="testimonial-detail clearfix bg-primary text-white">
                                       <h4 class="testimonial-name m-tb0">David Matin</h4>
                                       <span class="testimonial-position">Student</span>
                                       <div class="testimonial-pic radius"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>--}}
           <!-- What peolpe are saying style 10 END -->
           <!-- content  END -->
       </div>
   </div>
   <!-- Content END-->


@endsection
