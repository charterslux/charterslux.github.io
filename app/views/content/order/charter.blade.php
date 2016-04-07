@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.order')
@stop

@section('content')
<!-- // CONTENT // -->
<section id="content">
	@include('layouts.chunks.orderShowSection', ['order' => $order])
	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
</section>
@stop