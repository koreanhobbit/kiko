@extends('shop_frontend.layout.master')

@section('main-section')
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					@include('shop_frontend.layout.part.sidebar')
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					@yield('fullside')
				</div>
			</div>
		</div>
	</section>
@endsection

