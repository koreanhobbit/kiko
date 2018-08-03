@extends('shop_frontend.layout.frame_sidebar')

@section('section')
	@include('shop_frontend.page.shoppage.part.title')
@endsection

@section('fullside')
	@include('shop_frontend.page.shoppage.part.featureditem')
@endsection

@section('end-section')
	@include('shop_frontend.page.shoppage.part.dropdown')
@endsection