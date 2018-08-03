<!-- Contact -->
<article id="contact">
	<h2 class="major">@lang('landingpage.nav_contact')</h2>
	<form method="post" action="{{ route('contactmessage.store') }}">
		{{ csrf_field() }}
		<div class="fields">
			<div class="field half">
				<div class="form-group contactchecker {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name">@lang('landingpage.t_contact_1')</label>
					<input type="text" name="name" id="name" value="{{ old('name') }}" />
					@if($errors->has('name'))
						<div class="help-block">
							<span>
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						</div>
					@endif
				</div>
			</div>
			<div class="field half">
				<div class="form-group contactchecker {{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email">@lang('landingpage.t_contact_2')</label>
					<input type="text" name="email" id="email" value="{{ old('email') }}" />
					@if($errors->has('email'))
						<div class="help-block">
							<span>
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						</div>
					@endif
				</div>
			</div>
			<div class="field">
				<div class="form-group contactchecker {{ $errors->has('subject') ? 'has-error' : '' }}">
					<label for="subject">@lang('landingpage.t_contact_3')</label>
					<input type="text" name="subject" id="subject" value="{{ old('subject') }}"/>
					@if($errors->has('subject'))
						<div class="help-block">
							<span>
								<strong>{{ $errors->first('subject') }}</strong>
							</span>
						</div>
					@endif
				</div>
			</div>
			<div class="field">
				<div class="form-group contactchecker {{ $errors->has('message') ? 'has-error' : '' }}">
					<label for="message">@lang('landingpage.t_contact_4')</label>
					<textarea name="message" id="message" rows="4">{{ old('message') }}</textarea>
					@if($errors->has('message'))
						<div class="help-block">
							<span>
								<strong>{{ $errors->first('message') }}</strong>
							</span>
						</div>
					@endif
				</div>
			</div>
		</div>
		<ul class="actions">
			<li><button type="submit">Send Message</button></li>
			<li><button type="reset">Reset</button></li>
		</ul>
	</form>
	@if(count($siteMediaSocials) > 0)
		<ul class="icons">
			@foreach($siteMediaSocials as $siteMediaSocial)
				@if($siteMediaSocial->slug == 'email')
					<li><a href="mailto:{{ $siteMediaSocial->link }}" target="_blank" title="{{ ucfirst($siteMediaSocial->name) }}"><span><i class="fa {{ $siteMediaSocial->icon }}"></i></span></a></li>
				@else 
					<li><a href="{{ $siteMediaSocial->link }}" target="_blank" title="{{ ucfirst($siteMediaSocial->name) }}"><span><i class="fa {{ $siteMediaSocial->icon }}"></i></span></a></li>
				@endif
			@endforeach
		</ul>
	@endif
</article>