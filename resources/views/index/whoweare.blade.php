@extends('layouts/frontend')

@section('aboutus-page')
  active
@endsection

@section('content')

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ asset('/frontend_assets/images/background/c.jpg') }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Who We Are</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Who We Are</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- who we are -->
            <div class="container">
                <div class="row">
                    <!-- Side Bar -->
                    <div class="col-md-9">
                        <div>
                            <h1 class="m-b20 m-t0">Implementing Perfection With Innovative Vision</h1>
                            <div class="dez-separator bg-primary"></div>
                            <p><strong>We have a great facility in Narayanganj, next door to Dhaka. You’ll find everything you need here – work out on your own, book a session with one of our coach, or check out our wide variety of classes. Whether you choose to work out in our sun-filled upper level indoor stadium, with its high ceilings, exposed and open atmosphere, or our open personal sport fields, you’ll look forward to walking through our doors every day.</strong></p>
                        </div>
                        <div>
                            <h2 class="m-t30 m-b10 ">Narayanganj Dstrict Sports Association</h2>
                            <p>Narayanganj District Sports Association is an independently-owned sports club located in Narayanganj, MD. We’re a friendly, neighborhood club that prides itself on giving members a personalized experience. We are obviously one of the best places to play in the Narayanganj area.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/our-work/pic1.jpg" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>We take your sports career personally, and we’re passionate about providing you with the tools you need to become stronger, faster, healthier, and more confident in your appearance and your abilities. Whether you’re an experienced professional athlete or you’re just starting to take an interest in your physical fitness, you’ll find a home here. We look forward to welcoming you.[...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/our-work/pic2.jpg" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="../../s3.ap-south-1.amazonaws.com/dzon-html/sportszone/xhtml/images/our-work/pic3.jpg" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Our Offerings</h3>
                            <ul class="list-check-circle primary">
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                                <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>Eorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Side Bar END -->
                    <!-- Right Bar -->
                    <div class="col-md-3">
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                            <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                            <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building-o"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
                            </div>
                        </div>
                        <div class="icon-bx-wraper bx-style-1 p-a20 left">
                            <div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell "><i class="fa fa-code"></i></a> </div>
                            <div class="icon-content">
                                <h5 class="dez-tilte text-uppercase">Content title</h5>
                                <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>
                            </div>
                        </div>
                    </div>
                    <!-- Right Bar END -->
                </div>
            </div>
            <!-- who we are END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->


@endsection
