@extends('layouts.email')
@section('title')
	{{ trans('emails.titles.subscription') }}
@stop
@section('content')
	{{ trans('emails.messages.subscription') }}
@stop