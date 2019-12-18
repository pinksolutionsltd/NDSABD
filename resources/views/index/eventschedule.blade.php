@extends('layouts/frontend')
@section('content')


  <div class="page-content">
      <!-- inner page banner -->
      <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend_assets/images/background/bg2.jpg') }});">
          <div class="container">
              <div class="dez-bnr-inr-entry">
                  <h1 class="text-white">NDSABD EVENTS SCHEDULES</h1>
              </div>
          </div>
      </div>

    <!-- inner page banner -->
  <!-- Breadcrumb row -->
  <div class="breadcrumb-row">
      <div class="container">
          <ul class="list-inline">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>EVENTS SCHEDULES / NOTICE</li>
          </ul>
      </div>
  </div>
</div>
  <!-- Breadcrumb row END -->

{{-- --------------Video Youtube View------------------------------------------------------------------- --}}


{{-- <div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="//www.youtube.com/embed/wMuNjnNyaiA" allowfullscreen></iframe>
</div> --}}


{{-- ---------------------------Video Youtube View----------------------------------------------------------------- --}}



  <div class="section-full bg-white p-t70 p-b40">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-12>
            <object type="application/pdf"  data="{{ url('/frontend_assets/images/notice.pdf') }}">
              <embed src="{{ url('/frontend_assets/images/notice.pdf') }}" type="application/pdf" style="width: 100%; height: 600px;" />
            </object>
          </div>
        </div>
      </div>
  </div>

  {{-- <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="panel panel-success">
              <div class="panel-heading">Next Event List</div> --}}

{{-- <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>


<object type="application/pdf"  data="https://www.itu.int/en/ITU-D/Regional-Presence/AsiaPacific/SiteAssets/Pages/Events/2017/Nov_IOT/NBTC%E2%80%93ITU-IoT/Session%201%20IntroIoTMZ-new%20template.pdf">
   <embed src="https://www.itu.int/en/ITU-D/Regional-Presence/AsiaPacific/SiteAssets/Pages/Events/2017/Nov_IOT/NBTC%E2%80%93ITU-IoT/Session%201%20IntroIoTMZ-new%20template.pdf" type="application/pdf" />
</object>

</body>
</html> --}}

{{--
              </div>
            </div>
          </div>
        </div> --}}
@endsection()
