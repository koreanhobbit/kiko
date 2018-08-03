@extends('frontend.layout.frame')

@section('section')
	<!-- Main -->
	<div id="main">
		{{-- intro section			 --}}
		@include('frontend.mainpage.section.howto')

		{{-- work section	 --}}
		@include('frontend.mainpage.section.shipping')

		{{-- about	 --}}
		@include('frontend.mainpage.section.about')

		{{-- contact section --}}
		@include('frontend.mainpage.section.contact')

		{{-- elements section --}}
		@include('frontend.mainpage.section.elements')

		{{-- faq section --}}
		@include('frontend.mainpage.section.faq')

		{{-- faq section --}}
		@include('frontend.mainpage.section.brands')

	</div>
@endsection

@section('script')
	@include('frontend.mainpage.script._brand')
@endsection