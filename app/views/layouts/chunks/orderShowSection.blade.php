<!-- // ORDER // -->
<section id="orderRequest" class="page container-fluid">
	<header>
		<h1>{{ trans('chunks.headers.order') }}</h1>
		<hr>
	</header>
	<div class="body">
		<div class="row" id="leg_detail">
			<div class="col-sm-6 separator-right order-info two-lines-padding">
				<strong>{{trans('chunks.words.from')}}:</strong> {{$order['legs'][0]['airport_from']['airport_name']}}, {{$order['legs'][0]['airport_from']['city']}}, {{$order['legs'][0]['airport_from']['country']}} ({{$order['legs'][0]['airport_from']['iata_code']}})<br />
				<strong>{{trans('chunks.words.to')}}:</strong> {{$order['legs'][0]['airport_to']['airport_name']}}, {{$order['legs'][0]['airport_to']['city']}}, {{$order['legs'][0]['airport_to']['country']}} ({{$order['legs'][0]['airport_to']['iata_code']}})
			</div>
			<div class="col-sm-6 order-info">
				<strong>{{trans('chunks.words.pax')}}:</strong> {{$order['legs'][0]['passengers']}} {{Lang::choice('chunks.words.passengers', $order['legs'][0]['passengers'])}}<br/>
				<strong>{{trans('chunks.words.departure_date')}}:</strong> {{ $order['legs'][0]['departure_date'] }}<br/>
				<strong>{{trans('chunks.words.time_interval')}}:</strong> {{$order['legs'][0]['time_interval']}}
			</div>
			<div class="clearfix bottom-margin-1"></div>
			<div class="col-sm-6 separator-right order-info text-center">
				@if($order['classes'])
					<i class="fa fa-check-circle-o"></i> {{implode(', <i class="fa fa-check-circle-o"></i> ', array_pluck(array_get($order, 'classes', []), 'name'))}}
				@else
					{{ trans('chunks.words.class_not_set') }}
				@endif
			</div>
			<div class="col-sm-6 order-info text-center">
				@if($order['makers'])
					<i class="fa fa-check-circle-o"></i> {{implode(', <i class="fa fa-check-circle-o"></i> ', array_pluck(array_get($order, 'makers', []), 'name'))}}
				@else
					{{ trans('chunks.words.maker_not_set') }}
				@endif
			</div>
			<div class="clearfix bottom-margin-1"></div>
			<div class="col-sm-12">
				@include('content.order.jetsTable', ['remote' => $remote])
			</div>
			<div class="clearfix bottom-margin-1"></div>
			@if($order['status_id'] == 1)
				@if($user)
					<div class="col-xs-12">
						<div class="col-md-offset-3 col-md-3 bottom-margin-1">
							{{Form::open(['url' => $delete_order_url, 'id' => 'orderDelete']) }}
								{{Form::hidden('id', $order['id'])}}
								{{Form::submit(trans('forms.buttons.delete_order'), ['class' => 'btn btn-block btn-default btn-lg saveBtn', 'data-loading-text' => trans('forms.buttons.deleting_order')])}}
							{{Form::close()}}
						</div>
						<div class="col-md-4">
							{{Form::open(['url' => $send_order_url, 'id' => 'orderSendUpdate']) }}
								{{Form::hidden('id', $order['id'])}}
								{{Form::submit(trans('forms.buttons.send_order'), ['class' => 'btn btn-block btn-lg saveBtn', 'data-loading-text' => trans('forms.buttons.sending_order')])}}
							{{Form::close()}}
						</div>
					</div>
				@else
					<div class="col-sm-12 text-center">
						<p>{{trans('chunks.paragraphs.signup_or_in_to_procees')}}</p>

						{{ HTML::link('#', trans('forms.buttons.signUp'), [
							'class' => 'btn btn-lg',
							'data-toggle' => 'modal',
							'data-target' => '#registerModal',
							'data-remote' => I18n::localizeUrl('api/modal-body/register'),
						]) }}

						{{ HTML::link('#', trans('forms.buttons.signIn'), [
							'class' => 'btn btn-lg',
							'data-toggle' => 'modal',
							'data-target' => '#loginModal',
							'data-remote' => I18n::localizeUrl('api/modal-body/login'),
						]) }}
					</div>
				@endif

			@endif
		</div>
	</div>
</section>
<!-- // \ ORDER // -->