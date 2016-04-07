@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.cabinet')
@stop

@section('content')
<section id="content">
	@include('layouts.chunks.orderShowSection', ['order' => $order, 'send_order_url' => $send_order_url])
	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
</section>
@stop

@section('modals')
	@parent

	@include('content.modal', [
    		'form_url'      => I18n::localizeURL('api/order/delete-jet'),
    		'modal_name'    => 'deleteJet',
    		'modal_title'   => trans('modals.headers.deleteJet'),
    		'save_btn_text' => trans('modals.buttons.deleteJet'),
    		'save_btn_loading_text' => trans('modals.buttons.deletingJet'),
    	])
@stop