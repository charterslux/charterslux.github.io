@extends('layouts.master')
@section('content')
<h1>Hello, {{ $client_name }}</h1>
<ul>
	<li>{{ HTML::link(I18n::localizeURL('auth/logout'), 'Выход') }}</li>
	<li>{{ HTML::link(I18n::localizeURL('user/edit'), 'Личные данные') }}</li>
	<li>{{ HTML::link(I18n::localizeURL('user/password-change'), 'Смена пароля') }}</li>
	<li>{{ HTML::link(I18n::localizeURL('order/list/active'), 'Активные Заявки') }}</li>
	<li>{{ HTML::link(I18n::localizeURL('order/list/closed'), 'Архивные Заявки') }}</li>
</ul>
@stop