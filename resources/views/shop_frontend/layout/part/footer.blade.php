<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>

			<div>
				<p class="s-text7 w-size27">
					Any questions? Let us know in Seoul City Mapo-gu Sinchon-ro 20 Gil 19 or call us on (+82) 10 2923 1379
				</p>

				<div class="flex-m p-t-30">
					@foreach($socialMedias as $socialMedia)
						@if($socialMedia->slug == 'email')
							<a href="mailto:{{ $socialMedia->link }}" class="fs-18 color1 p-r-20 fa {{ $socialMedia->icon }}" target="_blank"></a>
						@else
							<a href="{{ $socialMedia->link }}" class="fs-18 color1 p-r-20 fa {{ $socialMedia->icon }}" target="_blank"></a>
						@endif
					@endforeach
				</div>
			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Categories
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Men
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Women
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Dresses
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Sunglasses
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Links
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Search
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						About Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Contact Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Help
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Track Order
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Returns
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Shipping
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						FAQs
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Newsletter
			</h4>

			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
					<span class="effect1-line"></span>
				</div>

				<div class="w-size2 p-t-20">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
						Subscribe
					</button>
				</div>

			</form>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
	
		<img class="h-size2" src="{{ asset('shop_frontend/images/icons/paypal.png') }}" alt="IMG-PAYPAL">
	


		<img class="h-size2" src="{{ asset('shop_frontend/images/icons/visa.png') }}" alt="IMG-VISA">
	


		<img class="h-size2" src="{{ asset('shop_frontend/images/icons/mastercard.png') }}" alt="IMG-MASTERCARD">
	

	
		<img class="h-size2" src="{{ asset('shop_frontend/images/icons/express.png') }}" alt="IMG-EXPRESS">
	

	
		<img class="h-size2" src="{{ asset('shop_frontend/images/icons/discover.png') }}" alt="IMG-DISCOVER">
		

		<div class="t-center s-text8 p-t-20">
			Copyright © www.kioskorea.com <br> 
			{{ date('Y') }} <br>
			<a href="https://www.astrowebstudio.com" target="_blank">Astroweb Studio</a>&nbsp;&amp;&nbsp;<a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div>
	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>
