@if(session()->has('contactmessage'))
	<div class="alert alert-info" id="flashMessage">
		{{ session()->get('contactmessage') }}
	</div>
@endif