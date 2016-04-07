@extends('layouts.email')
@section('title')
	{{ trans('emails.titles.resetPassword') }}
@stop
@section('content')
	<p>{{ trans('emails.messages.resetPassword', array('link' => HTML::link(URL::to(I18n::localizeUrl('auth/password-reset'), array($token))))) }}</p>
@stop