<article id="brands">
	<h2 class="major">@lang('landingpage.t_brands_1')</h2>
	<p>@lang('landingpage.t_brands_2').</p>
	<div class="row logoSlick">
		
			@foreach($logoBrands as $logo)
				
				<div>
					<img src="{{ asset($logo->getMedia('image')->first()->getDiskPath()) }}" alt="" class="img-rounded img-thumbnail">
					<div class="text-center">
						<p>{{ strtoupper($logo->name) }}</p>
					</div>
				</div>
				
			@endforeach
		
	</div>
</article>