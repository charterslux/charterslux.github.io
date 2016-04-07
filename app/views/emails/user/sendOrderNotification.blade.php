@extends('layouts.email')
@section('title')
	{{ trans('emails.titles.sendOrderNotification') }}
@stop
@section('content')
	{{ trans('emails.messages.sendOrderNotification') }}
@stop