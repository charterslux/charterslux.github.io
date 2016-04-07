@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.cabinet')
@stop

@section('scripts')
	@parent
	{{ Minify::javascript([
		'/js/plugins/crm-grid.js',
		'/js/order.js',
	]) }}
@stop

@section('content')
<!-- // CONTENT // -->
<section id="content">
	<section id="ordersList" class="page container-fluid">
		<header>
			<h1>{{ trans('chunks.headers.orders.'.$status) }}</h1>
			<hr>
		</header>
		<div class="body">
			<div class="row" id="leg_detail">
				<div class="paging paging-top"></div>
				<div class="clearfix"></div>
				<div class="table-responsive">
					<table class="table table-striped table-hover" data-ride="grid" data-grid-name="orders" id="orders" data-remote="{{ $remote }}" data-grid-template="#ordersTemplate" data-paging="true">
						<thead>
							<tr>
								<th>{{trans('forms.labels.order_id')}}</th>
								<th>{{trans('forms.labels.airport_from')}}</th>
								<th>{{trans('forms.labels.airport_to')}}</th>
								<th>{{trans('forms.labels.departure_date')}}</th>
								<th>{{trans('forms.labels.departure_time_interval')}}</th>
								<th>{{trans('forms.labels.passengers')}}</th>
								<th>{{trans('forms.labels.status')}}</th>
							</tr>
						</thead>
						<tbody><tr class="loading-tr"><td colspan="6" class="loading-td"><i class="fa fa-circle-o-notch fa-spin"></i> {{ trans('chunks.words.loading') }}...</td></tr></tbody>
					</table>
				</div>
				<div class="paging paging-bottom"></div>
			</div>

		</div>
	</section>
	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
</section>

@include('templates.orders', ['order_url' => $order_url])
@stop