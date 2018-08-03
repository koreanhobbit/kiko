<!DOCTYPE HTML>
<html>
	<head>
		<title>Kios Korea</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!, Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">
    	<meta name="keywords" content="The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!, Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">
    	<meta name="author" content="www.kioskorea.com">


		<!--  Essential META Tags -->

		<meta property="og:title" content="KiosKorea The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!">
		<meta property="og:description" content="Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">
		<meta property="og:image" content="{{ asset('frontend/images/pic2.png') }}">
		<meta property="og:url" content="https://www.kioskorea.com">
		<meta name="twitter:card" content="KiosKorea The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now! Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">


		<!--  Non-Essential, But Recommended -->

		<meta property="og:site_name" content="KiosKorea The best K-Pop, Korean Clothes, Korean Fashion, Korean Trends Distributor and Forwarder, contact us now!">
		<meta name="twitter:image:alt" content="Korean Clothes, Korean Shoes, Korean Cosmetic, Korean Product, Korean Fashion, Korean Style, Korean Language, K-Pop Clothes, K-Pop Shoes, K-Pop Cosmetic, K-Pop Product, K-Pop Fashion, K-Pop Style, Baju Korea, Sepatu Korea, Produk Korea, Kosmetik Korea, Fashion Korea, Bahasa Korea, Semua tentang Korea, Export Korea, Import Korea, Forwarder Korea, Kios, Korea, KiosKorea, www.kioskorea.com, kioskorea.com">


		<!--  Non-Essential, But Required for Analytics -->

		{{-- <meta property="fb:app_id" content="your_app_id" />
		<meta name="twitter:site" content="@website-username"> --}}


		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="icon" href="{{ asset('frontend/images/icon.png') }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
		<noscript><link rel="stylesheet" href="{{ asset('frontend/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				@include('frontend.layout.mainnav')
				@include('frontend.layout.flashmessage')
				@yield('section')

				<!-- Footer -->
				@include('frontend.layout.footer')
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="{{ asset('frontend/js/app.js') }}"></script>
			<script src="{{ asset('frontend/js/browser.min.js') }}"></script>
			<script src="{{ asset('frontend/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('frontend/js/util.js') }}"></script>
			<script src="{{ asset('frontend/js/main.js') }}"></script>
			<script src="{{ asset('frontend/js/accordion.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
			@yield('script')
			@yield('messenger')
	</body>
</html>
