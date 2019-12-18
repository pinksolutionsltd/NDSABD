@extends('layouts/frontend')
@section('content')
  <!-- Content -->
      <div class="page-content">
          <!-- inner page banner -->
          <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('/frontend_assets/images/background/j.jpg') }});">
          {{-- <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(frontend_assets/workingcommittee/images/background/bg4.jpg);"> --}}
              <div class="container">
                  <div class="dez-bnr-inr-entry">
                      <h1 class="text-white">Team</h1>
                  </div>
              </div>
          </div>
          <!-- inner page banner END -->
          <!-- Breadcrumb row -->
          <div class="breadcrumb-row">
              <div class="container">
                  <ul class="list-inline">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li>Team</li>
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
                          <h2 class="text-uppercase">Working Committee</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                            @foreach ($workingcommittees as $workingcommittee)

                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset($workingcommittee->committee_image) }}" alt=""> </a>
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
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">{{$workingcommittee->committee_name}}</a></h4>
                                          <span class="dez-member-position">{{$workingcommittee->committee_Details}}</span> </div>
                                  </div>
                              </div>

                            @endforeach

                              {{-- <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic2.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has skew-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic3.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has skew-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic4.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has skew-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div> --}}
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 1 END -->
                  {{-- <!-- Team Section Style 2 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 2</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic5.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic6.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic7.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic8.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has bg-primary">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 2 END -->
                  <!-- Team Section Style 3 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 3</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic3.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class=" dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic4.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic1.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic2.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has">
                                              <ul class="dez-social-icon border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 3 END -->
                  <!-- Team Section Style 4 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 4</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic8.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class=" dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic7.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic6.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border dez-social-icon-lg">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic5.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 4 END -->
                  <!-- Team Section Style 5 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 5</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-top dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic5.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class=" dez-media dez-media-top dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic6.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-top dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic7.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border dez-social-icon-lg">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-top dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic8.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 5 END -->
                  <!-- Team Section Style 6 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 6</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-left dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic1.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class=" dez-media dez-media-left dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic2.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-left dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic3.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border dez-social-icon-lg">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-left dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic4.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 6 END -->
                  <!-- Team Section Style 7 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 7</h2>
                      </div>
                      <div class="section-content text-center ">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-right dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic5.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Nashid Martines</a></h4>
                                          <span class="dez-member-position">Director</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class=" dez-media dez-media-right dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic6.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">Hackson Willingham</a></h4>
                                          <span class="dez-member-position">Developer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-right dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic7.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has ">
                                              <ul class="dez-social-icon border dez-social-icon-lg">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10 bg-white">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Designer</span> </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="dez-box m-b30">
                                      <div class="dez-media dez-media-right dez-img-overlay2 dez-img-effect zoom"> <a href="javascript:;"> <img width="358" height="460" src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic8.jpg') }}" alt=""> </a>
                                          <div class="dez-info-has">
                                              <ul class="dez-social-icon dez-social-icon-lg border">
                                                  <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                                                  <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="p-a10">
                                          <h4 class="dez-title text-uppercase"><a href="javascript:;">konne Backfield</a></h4>
                                          <span class="dez-member-position">Manager</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 7 END -->
                  <!-- Team Section Style 7 -->
                  <div class="p-a30 bg-white m-b30">
                      <div class="section-head">
                          <h2 class="text-uppercase">Team Section Style 7</h2>
                      </div>
                      <div class="section-content">
                          <div class="row">
                              <div class="col-md-4 col-sm-4 m-b30">
                                  <div class="dez-box">
                                      <div class="dez-media"> <a href="#"><img src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic1.jpg') }}" alt=""></a> </div>
                                      <div class="dez-info p-a20 p-t40 border-1">
                                          <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
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
                                          <span>Senor Vice President</span>
                                          <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 m-b30">
                                  <div class="dez-box">
                                      <div class="dez-media"> <a href="#"><img src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic2.jpg') }}" alt=""></a> </div>
                                      <div class="dez-info p-a20 p-t40 border-1">
                                          <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
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
                                          <span>Senor Vice President</span>
                                          <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 m-b30">
                                  <div class="dez-box">
                                      <div class="dez-media"> <a href="#"><img src="{{ asset('frontend_assets/workingcommittee/images/our-team/pic3.jpg') }}" alt=""></a> </div>
                                      <div class="dez-info p-a20 p-t40 border-1">
                                          <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
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
                                          <span>Senor Vice President</span>
                                          <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Team Section Style 7 END --> --}}
              </div>
              <!-- Left & right section  END -->
          </div>
      </div>
      <!-- Left & right section END -->




@endsection
