
@extends('layouts.master')
@section('content')
<section id="content">
	<!-- // NEWSLETTER // -->
	<section id="registerSection" class="page image" style="background-image: url(/images/subcribe-background-new.jpg)">
		<div class="wrapper align-center pattern color-layout" data-color="rgba(85, 85, 92, 0.3)">

			<h3>{{ trans('chunks.headers.registration') }}<br/></h3>
			<hr style="width: 110px">
			<section id="register">
				{{ Form::open(array('url' => App::getLocale().'/api/auth/register', 'method' => 'post', 'class' => 'flat form-inline')) }}
					<div class="form-group">
						{{ Form::label('email', 'Email:', ['class' => 'sr-only']) }}
						{{ Form::email('email', null, ['placeholder' => trans('chunks.placeholders.set_your_email'), 'class' => 'form-control input-lg col-sm-4']) }}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password:', ['class' => 'sr-only']) }}
						{{ Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => trans('chunks.placeholders.your_password_create'),]) }}
					</div>
					<div class="form-group">
						{{ Form::button(trans('forms.buttons.register'), ['class' => 'btn saveBtn btn-lg', 'type' => 'submit', 'data-loading-text' => trans('forms.buttons.registering')]) }}
					</div>
				{{ Form::close() }}
			</section>
		</div>
	<!-- // END NEWSLETTER // -->
</section>
@stop