@extends('shop_frontend.layout.frame_full')

@section('section')
	@include('shop_frontend.page.detailpage.part.breadcrumb')
@endsection

@section('main-section')
	@include('shop_frontend.page.detailpage.part.product_detail')

	@include('shop_frontend.page.detailpage.part.relatedproduct')
@endsection