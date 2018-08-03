<!-- Work -->
<article id="shipping">
	<h2 class="major">@lang('landingpage.t_shipping')</h2>
	@if(count($deliveryProviders) > 0)
		<button class="accordion">@lang('landingpage.t_provider')</button>
		<div class="panel">
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>@lang('landingpage.t_provider_1')</th>
							<th>@lang('landingpage.t_provider_2')</th>
							<th>@lang('landingpage.t_provider_3')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($deliveryProviders as $deliveryProvider)
							<tr>
								<td>
									{{ ucfirst($deliveryProvider->name) }}
								</td>
								<td>
									{{ ucfirst($deliveryProvider->scope) }}
								</td>
								<td>
									{{ ucfirst($deliveryProvider->time)  }} @lang('landingpage.t_provider_4')
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
	<button class="accordion">@lang('landingpage.t_fee')</button>
	<div class="panel">
		<p>@lang('landingpage.t_fee_1').</p>
	</div>
	
	<button class="accordion">@lang('landingpage.t_payment')</button>
	<div class="panel">
		<div class="table-wrapper">
			<table>
				<thead>
					<tr>
						<th>@lang('landingpage.t_payment_1')</th>
						<th>@lang('landingpage.t_payment_2')</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							PayPal
						</td>
						<td>
							All Customers
						</td>
					</tr>
					<tr>
						<td>
							Direct Transfer
						</td>
						<td>
							Indonesian Customers
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</article>