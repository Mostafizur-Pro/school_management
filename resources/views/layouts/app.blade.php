<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
	<!-- metas -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="School Responsive HTML5 Template">

	<!-- Title -->
    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend')}}/assets/images/favicon.png" />
	<!-- Stylesheet -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/fontawesome.min.css">
	<!-- normalize -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/normalize.css">
	<!-- Jquery Ul -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.min.css">
	<!-- Jquery Ui Theme -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.theme.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/owl.carousel.min.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/responsive.css">
</head>

<body>
	<!--[if IE]>
    		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  		<![endif]-->

	<!-- Start header Area -->
	@include('layouts/share/header')
	<!-- End Header Area -->

    @yield('content')



	<!-- Start Footer Area -->
	@include('layouts/share/footer')
	<!-- End Footer Area -->

	<!-- Js Files -->
	<!-- modernizr -->
	<script src="{{asset('fontend')}}/assets/js/vendor/modernizr-3.8.0.min.js"></script>
	<!-- jQuery -->
	<script src="{{asset('fontend')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap Popper -->
	<script src="{{asset('fontend')}}/assets/js/popper.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('fontend')}}/assets/js/bootstrap.min.js"></script>
	<!-- jquery ui -->
	<script src="{{asset('fontend')}}/assets/js/jquery-ui.min.js"></script>
	<!-- tickerNews -->
	<script src="{{asset('fontend')}}/assets/js/jquery.tickerNews.min.js"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('fontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel -->
	<script src="{{asset('fontend')}}/assets/js/owl.carousel.min.js"></script>

	<!-- Custom Scripts -->
	<script src="{{asset('fontend')}}/assets/js/custom.js"></script>
</body>

</html>