@extends('layouts/frontend')
@section('content')


  <!-- Content -->
      <div class="page-content">
          <!-- inner page banner -->
          <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('/frontend_assets/images/background/j.jpg') }});">
          {{-- <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(frontend_assets/workingcommittee/images/background/bg4.jpg);"> --}}
              <div class="container">
                  <div class="dez-bnr-inr-entry">
                      <h1 class="text-white">Technical Member</h1>
                  </div>
              </div>
          </div>
          <!-- inner page banner END -->
          <!-- Breadcrumb row -->
          <div class="breadcrumb-row">
              <div class="container">
                  <ul class="list-inline">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Technical Member</li>
                  </ul>
              </div>
          </div>
          <!-- Breadcrumb row END -->
          <div class="content-area">
              <!-- Left & right section start -->
              <div class="container">

                  <!-- Team Section Style 1 -->

                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Technical Member</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                            @foreach ($technicalmembers as $technicalmember)

                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset($technicalmember->technicalmember_image) }}" alt=""> </a>
                                          <div class="dez-info-has skew-has  bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">{{$technicalmember->technicalmember_name}}</a></h4>
                                          <span class="dez-member-position">{{$technicalmember->technicalmember_Details}}</span> </div>
                                  </div>
                              </div>

                            @endforeach


                          </div>
                      </div>
                  </div>

                </div>
                <!-- Left & right section  END -->
            </div>
        </div>
        <!-- Left & right section END -->



@endsection
