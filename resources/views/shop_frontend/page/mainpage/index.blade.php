@extends('shop_frontend.layout.frame_full')

@section('fullside')
	{{-- slider --}}
	@if($sliders->count())
		@include('shop_frontend.page.mainpage.part.slider')
	@endif
	
	@include('shop_frontend.page.mainpage.part.banner1')
	
	{{-- latest product --}}
	@if($featuredProducts->count())
		@include('shop_frontend.page.mainpage.part.featuredproduct')
	@endif

	@include('shop_frontend.page.mainpage.part.banner2')

	@include('shop_frontend.page.mainpage.part.blog')

	@include('shop_frontend.page.mainpage.part.instagram')

	@include('shop_frontend.page.mainpage.part.shipping')
@endsection

@section('end-section')
	@include('shop_frontend.page.mainpage.part.dropdown')
@endsection

