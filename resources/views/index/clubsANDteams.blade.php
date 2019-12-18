@extends('layouts/frontend')
@section('content')
<!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('frontend_assets/images/background/y.jpg') }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">AFFILIATED CLUB LIST OF NARAYANGANJ DISTRICT SPORTS ASSOCIATION</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Clubs AND Teams</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <!-- Left & right section start -->
            <div class="container">
                <!-- Alert box -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head inner-haed">
                        <h2 class="text-uppercase">Premier Cricket League Clubs</h2>
                    </div>

                    @foreach ($clubsANDteamss as $clubsANDteams)

                    <div class="section-content">
                        <div class="alert alert-info" style="font-size:20px;"> <strong>{{ $clubsANDteams->clubsANDteams_name }}</strong></div>
                    </div>

                  @endforeach

                </div>
                <!-- Alert box END -->
            </div>
            <!-- Left & right section  END -->
            <div class="container">
                <!-- Alert box -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head inner-haed">
                        <h2 class="text-uppercase">First Division Cricket League Clubs</h2>
                    </div>

                    @foreach ($clubsANDteamstwos as $clubsANDteamstwo)

                    <div class="section-content">
                        <div class="alert alert-info"> <strong>{{ $clubsANDteamstwo->clubsANDteamstwo_name }}</strong></div>
                    </div>

                  @endforeach

                </div>
                <!-- Alert box END -->
            </div>
            <!-- Left & right section  END -->
            <div class="container">
                <!-- Alert box -->
                <div class="p-a30 bg-white m-b30">
                    <div class="section-head inner-haed">
                        <h2 class="text-uppercase">Second Division Cricket League Clubs</h2>
                    </div>

                    @foreach ($clubsANDteamsthrees as $clubsANDteamsthree)

                    <div class="section-content">
                        <div class="alert alert-info"> <strong>{{ $clubsANDteamsthree->clubsANDteamsthree_name }}</strong></div>
                    </div>

                  @endforeach

                </div>
                <!-- Alert box END -->
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
