<!-- Header -->
<header id="header">
	<div class="logo">
		<a href="https://instagram.com/_u/kioskorea" target="_blank"><span><i class="fas fa-gem fa-3x"></i></span></a>
	</div>
	<div class="content">
		<div class="inner">
			@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
				<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><img src="{{ $properties['name'] == 'Indonesian' ? asset('frontend/images/flags/16/ID.png') : asset('frontend/images/flags/16/GB.png') }}" alt="" style="margin:0 5px;"></a>
			@endforeach
			<h1>KIOSKOREA</h1>

			<p>@lang('landingpage.kioskorea_is')</p>
			
			<a class="button primary" href="https://instagram.com/_u/kioskorea" target="_blank">@lang('landingpage.shop')</a>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="#howto">@lang('landingpage.nav_how_to')</a></li>
			<li><a href="#shipping">@lang('landingpage.nav_ship')</a></li>
			<li><a href="#faq">FAQ</a></li>
			<li><a href="#about">@lang('landingpage.nav_about')</a></li>
			<li><a href="#contact">@lang('landingpage.nav_contact')</a></li>
			<li><a href="#brands">@lang('landingpage.nav_brands')</a></li>
			{{-- <li><a href="#elements">Elements</a></li> --}}
		</ul>
	</nav>
</header>
