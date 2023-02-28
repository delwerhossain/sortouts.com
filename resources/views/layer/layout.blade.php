<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<!-- Meta tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SITE KEYWORDS HERE" />
	<meta name="description" content="">
	<meta name='copyright' content='codeglim'>

	<!-- Title Tag -->
	<title>Sort Services &minus; Let Us Search For You</title>

	<!-- Favicon -->
	<link rel="icon" type="fontend/image/png" href="fontend/images/favicon.png">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="fontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<!-- Tromas CSS -->
	<link rel="stylesheet" href="fontend/css/theme-plugins.css">
	<link rel="stylesheet" href="fontend/css/style.css">
	<link rel="stylesheet" href="fontend/css/responsive.css">

	<!-- Tromas Color -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin1.css"> -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin2.css"> -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin3.css"> -->
	<link rel="stylesheet" href="fontend/css/skin/skin4.css">
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin5.css"> -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin6.css"> -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin7.css"> -->
	<!-- <link rel="stylesheet" href="fontend/css/skin/skin8.css"> -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- <link rel="stylesheet" href="#" id="tromas"> -->


	<!-- Jquery -->
	<script src="fontend/js/jquery.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

</head>

<body id="bg">
	<div id="layout" class="">


		<!-- Start Header -->
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="/"><img src="fontend/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<!-- Header Widget -->
						<div class="header-widget">
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-clock-o"></i>
								<h4>Opening Time</h4>
								<p>Mon-Sat: 9.00-18.00</p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-envelope"></i>
								<h4>Email address</h4>
								<p><a href="mailto:info@sortinsurance.com">info@sortouts.com</a></p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-phone"></i>
								<h4>Phone</h4>
								<p> <a href="tel:0330 113 2041"> 0330 113 2041</a></p>
							</div>
							<!--/ End Single Widget -->
						</div>
						<!--/ End Header Widget -->
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="nav-area">
								<!-- Main Menu -->
								<nav class="mainmenu">
									<div class="collapse navbar-collapse">
										<ul class="nav navbar-nav" style="list-style: none;">
											<li class="{{ Request::path()==='/' ? 'active' : '' }}"><a href="/">Home</a></li>

											<li><a href="#">Searches<i class="fa fa-angle-down"></i></a>
												<ul class="drop-down">
													<li><a href="{{route('carinsurance')}}">Car Searches</a></li>
													<li><a href="{{route('vaninsurance')}}">Van Searches</a></li>
													<li><a href="bikeinsure">Bike Searches</a></li>
													<li><a href="foodinsure">Hot Food Searches</a></li>
													<!--<li><a href="{{route('motorinsurance')}}">Motor Searches</a></li>-->
													<li><a href="{{route('fleetinsurance')}}">Fleet Searches</a></li>
													<li><a href="{{route('accinsurance')}}">Accident Searches</a></li>
												</ul>
											</li>
											<li><a href="#">Quotation Forms<i class="fa fa-angle-down"></i></a>
												<ul class="drop-down">
													<li><a href="{{route('carquote.index')}}">Car Quotes Form</a></li>
													<li><a href="{{route('vanquote.index')}}">Van Quotes Form</a></li>
													<li><a href="{{route('bikequote.index')}}">Bike Quotes Form</a></li>
													<li><a href="{{route('foodquote.index')}}">Hot Food Quotes Form</a></li>
													<!--<li><a href="{{route('motorquote.index')}}">Motor Quotes Form</a></li>-->
													<li><a href="{{route('fleetquote.index')}}">Fleet Quotes Form</a></li>
													<li><a href="{{route('accquote.index')}}">Accident Quotes Form</a></li>
												</ul>
											</li>
											<li class="{{ Request::path()==='about' ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
											<li class="{{ Request::path()==='contact' ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
										</ul>
									</div>
								</nav>
								<!--/ End Main Menu -->
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
								<!--/ End Social -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->

		<div>
			@yield('content')
		</div>

		<!-- Start Footer -->
		<footer id="footer" class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="single-widget">
								<h2>Protected By</h2>
								<img src="fontend/images/brand-logo.png" alt="" style="text-align: center;">
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!-- Address Widget -->
							<div class="single-widget address">
								<h2>Head Office</h2>
								<p><strong></strong></p>
								<ul class="list" style="list-style: none;">
									<li><i class="fa fa-phone"></i>Phone: 0330 113 2041 </li>
									<li><i class="fa fa-envelope"></i>Email:<a href="mailto:info@sortouts.com"> info@sortouts.com</a></li>
									<li><i class="fa fa-map-o"></i>Address: 167c City Road, Cardiff, United Kingdom, CF24 3BQ.</li>
								</ul>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<!--/ End Address Widget -->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!-- Links Widget -->
							<div class="single-widget links">
								<h2>Quick Links</h2>
								<ul class="list" style="list-style: none;">
									<li><a href="{{route('carinsurance')}}"><i class="fa fa-angle-right"></i>Car Searches</a></li>
									<li><a href="{{route('vaninsurance')}}"><i class="fa fa-angle-right"></i>Van Searches</a></li>
									<li><a href="bikeinsure"><i class="fa fa-angle-right"></i>Bike Searches</a></li>
									<li><a href="foodinsure"><i class="fa fa-angle-right"></i>Hot Food Searches</a></li>
									<!--<li><a href="{{route('motorinsurance')}}"><i class="fa fa-angle-right"></i>Motor Searches</a></li>-->
									<li><a href="{{route('fleetinsurance')}}"><i class="fa fa-angle-right"></i>Fleet Searches</a></li>
									<li><a href="{{route('accinsurance')}}"><i class="fa fa-angle-right"></i>Accident Searches</a></li>
								</ul>
							</div>
							<!--/ End Links Widget -->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="single-widget links">
								<h2>Quotation Forms</h2>
								<ul class="list" style="list-style: none;">
									<li><a href="{{route('carquote.index')}}"><i class="fa fa-angle-right"></i>Car Quotes</a></li>
									<li><a href="{{route('vanquote.index')}}"><i class="fa fa-angle-right"></i>Van Quotes</a></li>
									<li><a href="{{route('bikequote.index')}}"><i class="fa fa-angle-right"></i>Bike Quotes</a></li>
									<li><a href="{{route('foodquote.index')}}"><i class="fa fa-angle-right"></i>Hot Food Quotes</a></li>
									<!--<li><a href="{{route('motorquote.index')}}"><i class="fa fa-angle-right"></i>Motor Quotes</a></li>-->
									<li><a href="{{route('fleetquote.index')}}"><i class="fa fa-angle-right"></i>Fleet Quotes</a></li>
									<li><a href="{{route('accquote.index')}}"><i class="fa fa-angle-right"></i>Accident Quotes</a></li>
								</ul>
							</div>
						</div>

					</div>
					<div class="row">
						<div style="margin-top: 30px;">
							<p style="text-align: center;">SORT OUTS - TRADING UNDER SORT SERVICES LTD, REGISTERED IN ENGLAND & WALES, COMPANY NUMBER: 13799418, REGISTERED OFFICE AT - 167c City Road, Cardiff, United Kingdom, CF24 3BQ.
								SORT OUTS IS REGISTERED WITH THE INFORMATION COMMISSIONER'S OFFICE (REG: NUMBER: ZA262723), AUTHORISED TO PROCESS PERSONAL DATA UNDER DATA PROTECTION ACT AS WELL AS GDPR 2018.</p>
						</div>
						<div style="margin-top: 10px;">
							<p style="text-align: center;"><a href="{{route('privacy')}}" target="_blank">Privacy Policy</a> | <a href="{{route('terms')}}" target="_blank">Terms & Conditions</a></p>
						</div>

					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- copyright -->
							<div class="copyright">
								<p><b>&copy; <?php echo date("Y"); ?> SORT SERVICES LTD</b> - All Right Reserved.</p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ End footer -->


		<!-- Bootstrap JS -->
		<script src="fontend/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Modernizer JS -->
		<script src="fontend/js/modernizr.min.js" type="text/javascript"></script>
		<!-- Tromas JS -->
		<script src="fontend/js/tromas.js" type="text/javascript"></script>
		<!-- Tromas Plugins -->
		<script src="fontend/js/theme-plugins.js" type="text/javascript"></script>
		<!-- Google Map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>
		<script src="fontend/js/gmap.min.js" type="text/javascript"></script>
		<!-- Main JS -->
		<script src="fontend/js/main.js" type="text/javascript"></script>
	</div>
</body>

</html>