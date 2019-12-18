@extends('layouts/frontend')
@section('content')



  <!-- Content -->
  <div class="page-content">
      <!-- inner page banner -->
      <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend_assets/images/background/bg4.jpg') }});">
          <div class="container">
              <div class="dez-bnr-inr-entry">
                  <h1 class="text-white">Contact Us</h1>
              </div>
          </div>
      </div>
      <!-- inner page banner END -->
      <!-- Breadcrumb row -->
      <div class="breadcrumb-row">
          <div class="container">
              <ul class="list-inline">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li>Contact us</li>
              </ul>
          </div>
      </div>
      <!-- Breadcrumb row END -->


<!-- contact area -->
 <div class="content-area">
     <div class="container">
         <div class="row">
             <!-- Map part start -->
             <div class="col-md-12">
                 <h4>Our Location</h4>
                 <iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.348499495092!2d90.49096741429443!3d23.62768729937141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1047195987d%3A0x25063ff334709ccd!2sOsmani+Powro+Stadium!5e0!3m2!1sen!2sbd!4v1555484288460!5m2!1sen!2sbd') }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
             <!-- Map part END -->
         </div>
         <div class="row p-t50">
             <!-- Left part start -->
             <div class="col-md-9">
                 <h4>Contact form</h4>
             <div class="dzFormMsg"></div>

                 <!-- Contact Section -->
                 @if(session('success'))
                 <div class="alert alert-success">
                   <h3>{{session('success')}}</h3>
                 </div>
                 @endif
                 <div class="p-a30 bg-white clearfix m-b30">
                                             <form method="post" action="{{ url('/contact/insert') }}">
                                                 @csrf
                                                 <div class="row">
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                 <input id="contact_name" name="contact_name" type="text" required class="form-control ">
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                 <input id="contact_email" name="contact_email" type="email" class="form-control" required >
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                                 <textarea id="contact_text" name="contact_message" rows="4" class="form-control" required ></textarea>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                                         <button name="Resat" type="reset" value="Reset"  class="site-button  m-l30"> <span>Reset</span> </button>
                                                     </div>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                     <!-- Left part END -->

             <!-- right part start -->
             <div class="col-md-3">
                 {{-- <h4>Contact Info</h4> --}}
                 <div class="p-a30 bg-white m-b30">
                     <ul class="no-margin">
                         <li class="icon-bx-wraper left m-b30">
                             <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                             <div class="icon-content">
                                 <h6 class="text-uppercase m-b0 dez-tilte" style="font-size:20px;">Address</h6>
                                 <p>Narayanganj District Sports Association.<br>
                                    Osmani Pouro Stadium.<br>
                                    Isdaeer-Narayanganj</p>
                             </div>
                         </li>
                         <li class="icon-bx-wraper left  m-b30">
                             <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                             <div class="icon-content">
                                 <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                 <p>info@ndsabd.com</p>
                             </div>
                         </li>
                         <li class="icon-bx-wraper left">
                             <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                             <div class="icon-content">
                                 <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                 <p></p>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- right part END -->
         </div>
     </div>
 </div>
 <!-- contact area  END -->
</div>
<!-- Content END-->

@endsection
