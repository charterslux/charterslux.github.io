@extends('layouts.master')
@section('modals')


	@include('content.modal', [
		'form_url' => I18n::localizeURL('api/auth/password-remind'),
		'modal_name' => 'passwordRemind',
		'modal_title' => trans('chunks.headers.passwordRemind'),
		'save_btn_text' => trans('forms.buttons.remind'),
	])

	@parent
@stop

@section('content')
<section id="content">
	<!-- // NEWSLETTER // -->
	<section id="loginSection" class="page image" style="background-image: url(/images/subcribe-background-new.jpg)">
		<div class="wrapper align-center pattern color-layout" data-color="rgba(85, 85, 92, 0.3)">

			<h3>{{ trans('chunks.headers.login') }}<br/></h3>
			<hr style="width: 110px">
			<section id="login">
				{{ Form::open(array('url' => I18n::localizeURL('api/auth/login'), 'method' => 'post', 'class' => 'flat form-inline')) }}
					<div class="form-group">
						{{ Form::label('loginEmail', 'Email:', ['class' => 'sr-only']) }}
						{{ Form::email('email', null, ['id' => 'loginEmail', 'placeholder' => trans('chunks.placeholders.your_email'), 'class' => 'form-control input-lg']) }}
					</div>
					<div class="form-group">
						{{ Form::label('loginPassword', 'Password:', ['class' => 'sr-only']) }}
						{{ Form::password('password', ['id' => 'loginPassword', 'class' => 'form-control input-lg', 'placeholder' => trans('chunks.placeholders.your_password'),]) }}
					</div>
					<div class="form-group">
						{{ Form::button(trans('forms.buttons.enter'), ['class' => 'btn saveBtn btn-lg', 'type' => 'submit', 'data-loading-text' => trans('forms.buttons.entering')]) }}
					</div>
				{{ Form::close() }}
			</section>
			<section id="login_extra">
				{{ HTML::link('#', 'Забыли пароль?', [
					'data-toggle' => 'modal',
					'data-target' => '#passwordRemindModal',
					'data-remote' => I18n::localizeUrl('api/modal-body/remember'),
				]) }}
			</section>
		</div>
	</section>
	<!-- // END NEWSLETTER // -->
</section>
@stop