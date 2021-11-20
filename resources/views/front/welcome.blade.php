<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>	
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/animate.css') }}  ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('front/assets/css/font-awesome.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('front/assets/css/bootstrap.min.css ') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('front/assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset('front/assets/css/chosen.min.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset('front/assets/css/color-01.css') }} ">
	@stack('css')
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	@include('front.includes.header')

	<main id="main">
		@yield('content')

	</main>

	@include('front.includes.footer')
	

</body>
</html>