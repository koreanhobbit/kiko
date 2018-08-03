<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Shop | KiosKorea</title>
    <link rel="icon" href="{{ asset('frontend/images/icon.png') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/css/app.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/fonts/themify/themify-icons.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/fonts/elegant-font/html-css/style.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/vendor/lightbox2/css/lightbox.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop_frontend/css/main.css') }}">
<!--===============================================================================================-->
    @yield('style')
</head><!--/head-->

<body class="animsition">

	@include('shop_frontend.layout.part.header')

    @yield('section')
	@yield('main-section')
    @yield('end-section')
    
	@include('shop_frontend.layout.part.footer')
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/js/app.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/select2/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('shop_frontend/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('shop_frontend/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

<!--===============================================================================================-->
    <script src="{{ asset('shop_frontend/js/main.js') }}"></script>
    @yield('script')
</body>
</html>