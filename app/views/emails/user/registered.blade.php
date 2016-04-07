@extends('layouts.email')
@section('title')
	{{ trans('emails.titles.registered') }}
@stop
@section('content')
	{{ trans('emails.messages.registered') }}
@stop