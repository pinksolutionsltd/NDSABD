
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NDSABD Dashboard</title>
	<link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet">
	{{-- <link href="{{ asset(dashboard_assets/css/font-awesome.min.css) }}" rel="stylesheet"> --}}
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link href="{{ asset('dashboard_assets/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/css/styles.css') }}" rel="stylesheet">
	<!--Custom Font-->
	<link href="{{ asset('dashboard_assets/css/font.css') }}" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>NDSABD</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="@yield('dashboard-page')"><a href="{{ url('/home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			{{-- ----------------------------Index: Main Slider Start---------------------------------------------------- --}}
      <li class="@yield('mainslider-page') parent"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Main Slider <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{ url('/add/mainslider') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/mainslider/viewtable') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>
			{{-- ----------------------------Index: Main Slider End ---------------------------------------------------- --}}


			{{------------------------Start Index page Current Event------------------------}}

			<li class="@yield('indexcurrentevent-page') parent"><a data-toggle="collapse" href="sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> Index:Event <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="{{ url('/add/indexcurrentevent') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/indexcurrentevent') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>

			{{------------------------End Index page Current Event------------------------}}
			{{------------------------Start Index page Next Event------------------------}}

			<li class="@yield('indexnextevent-page') parent"><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Index:Next Event <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="{{ url('/add/indexnextevent') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/indexnextevent') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>

			{{------------------------End Index page Next Event------------------------}}

			{{------------------------Start Index page President------------------------}}

			<li class="@yield('presidentinfo-page') parent"><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> Index:presidentinfo <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="{{ url('/add/presidentinfo') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/presidentinfo') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>

			{{------------------------End Index page President------------------------}}

			{{------------------------Start Index page Secretary------------------------}}

			<li class="@yield('secretary-page') parent"><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em> Index:secretary <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="{{ url('/add/secretary') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/secretary') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>

			{{------------------------End Index page Secretary------------------------}}


			{{-- -----------------------------Working Committee-------------------------------------- --}}
			<li class="@yield('workingcommittee-page') parent"><a data-toggle="collapse" href="#sub-item-6">
				<em class="fa fa-navicon">&nbsp;</em> Committee <span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li><a class="" href="{{ url('/add/workingcommittee') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/workingcommittee') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>
			{{-- ---------------------------------Technical Member--------------------------------------- --}}
			<li class="@yield('technicalmember-page') parent"><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em> Technical Member <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="{{ url('/add/technicalmember') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/technicalmember') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>
			{{-- ------------------------Testimonial Part------------------------------------------ --}}
			{{-- ------------------------TestimonialOne Part ------------------------------------------ --}}
			<li class="@yield('testimonialone-page') parent"><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em> TestimonialOne <span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class="" href="{{ url('/add/testimonialone') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Item
					</a></li>
					<li><a class="" href="{{ url('/table/testimonialone') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> View Table
					</a></li>
				</ul>
			</li>
{{-- ------------------------TestimonialTwo Part ------------------------------------------ --}}

<li class="@yield('testimonialtwo-page') parent"><a data-toggle="collapse" href="#sub-item-8">
	<em class="fa fa-navicon">&nbsp;</em> Testimonial Two <span data-toggle="collapse" href="#sub-item-8" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-8">
		<li><a class="" href="{{ url('/add/testimonialtwo') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/testimonialtwo') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>


{{-- ------------------------clubsANDteams  Part ------------------------------------------ --}}

<li class="@yield('clubsANDteams-page') parent"><a data-toggle="collapse" href="#sub-item-9">
	<em class="fa fa-navicon">&nbsp;</em> Premier Clubs <span data-toggle="collapse" href="#sub-item-9" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-9">
		<li><a class="" href="{{ url('/add/clubsANDteams') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/clubsANDteams') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>
				{{-- --------------------First Division Club----------------------------- --}}
<li class="@yield('clubsANDteamstwo-page') parent"><a data-toggle="collapse" href="#sub-item-10">
	<em class="fa fa-navicon">&nbsp;</em> 1st Division Clubs <span data-toggle="collapse" href="#sub-item-10" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-10">
		<li><a class="" href="{{ url('/add/clubsANDteamstwo') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/clubsANDteamstwo') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>

				{{----------------------Second Division Club----------------------------- --}}
<li class="@yield('clubsANDteamsthree-page') parent"><a data-toggle="collapse" href="#sub-item-11">
	<em class="fa fa-navicon">&nbsp;</em> 2nd Division Clubs <span data-toggle="collapse" href="#sub-item-11" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-11">
		<li><a class="" href="{{ url('/add/clubsANDteamsthree') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/clubsANDteamsthree') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>

{{------------------------Start Contact Messages Page------------------------}}

<li class="@yield('contact-page') parent"><a data-toggle="collapse" href="#sub-item-12">
	<em class="fa fa-navicon">&nbsp;</em> Contact Messages <span data-toggle="collapse" href="#sub-item-12" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-12">
		<li><a class="" href="{{ url('/table/contact') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>


{{------------------------End Index Contact page------------------------}}
{{-- ----------------------------Index: Awesomeservice Left Start---------------------------------------------------- --}}
<li class="@yield('awesomeserviceleft-page') parent"><a data-toggle="collapse" href="#sub-item-13">
	<em class="fa fa-navicon">&nbsp;</em> Awesome(L) <span data-toggle="collapse" href="#sub-item-13" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-13">
		<li><a class="" href="{{ url('/add/awesomeserviceleft') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/awesomeserviceleft') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>
{{-- ----------------------------Index: Awesomeservice Left End ---------------------------------------------------- --}}
{{-- ----------------------------Index: Awesomeservice Right Start---------------------------------------------------- --}}
<li class="@yield('awesomeserviceright-page') parent"><a data-toggle="collapse" href="#sub-item-14">
	<em class="fa fa-navicon">&nbsp;</em> Awesome(R) <span data-toggle="collapse" href="#sub-item-14" class="icon pull-right"><em class="fa fa-plus"></em></span>
	</a>
	<ul class="children collapse" id="sub-item-14">
		<li><a class="" href="{{ url('/add/awesomeserviceright') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> Add Item
		</a></li>
		<li><a class="" href="{{ url('/table/awesomeserviceright') }}">
			<span class="fa fa-arrow-right">&nbsp;</span> View Table
		</a></li>
	</ul>
</li>
{{-- ----------------------------Index: Awesomeservice Right End ---------------------------------------------------- --}}






					{{-- ----------------------------Logout------------------------------------- --}}
			<li><a href="{{ route('logout') }}"
				 onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em> Logout</a>
			</li>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							 	@csrf
			</form>
			{{-- ------------------------Logout End------------------------------------- --}}

			@if (Route::has('register'))
					<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}"><em class="fa fa-power-off">&nbsp;</em>{{ __('Register') }}</a>
					</li>
			@endif

		</ul>
	</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

@yield('content')

</div>	<!--/.main-->

	<script src="{{ asset('dashboard_assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/custom.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.1/dist/sweetalert2.all.min.js"></script>

	<script>
	// window.onload = function () {
	// 	var chart1 = document.getElementById("line-chart").getContext("2d");
	// 	window.myLine = new Chart(chart1).Line(lineChartData, {
	// 		responsive: true,
	// 		scaleLineColor: "rgba(0,0,0,.2)",
	// 		scaleGridLineColor: "rgba(0,0,0,.05)",
	// 		scaleFontColor: "#c5c7cc"
	// 	});
	// };

	$(document).ready(function() {
// --------------------Script for Delete Item--------------//
			$('.delete_item').click(function() {
				var redirected_link = $(this).val();
				Swal.fire({
						title: 'Are you sure?',
						text: "You won't be able to revert this!",
						type: 'question',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Yes, delete it!'
					}).then((result) => {
						if (result.value) {
						window.location.href = redirected_link;
						swal(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
					}
			})
				// Swal.fire($(this).val());
		  } );

// --------------------Script for Data Bootstarp Table--------------//
	    $('.mytable').DataTable();
	} );


	</script>

</body>
</html>
