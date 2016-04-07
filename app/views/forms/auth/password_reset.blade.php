@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.cabinet')
@stop

@section('content')
<section id="content">
	<!-- // NEWSLETTER // -->
	<section id="passwordResetSection" class="page container-fluid">
		<header>
			<h1>{{ trans('chunks.headers.passwordReset') }}</h1>
			<hr>
		</header>
		<div class="body row">
			<div class="col-sm-12" id="passwordReset">
				{{ Form::open(array('url' => I18n::localizeURL('api/auth/password-reset'), 'method' => 'post', 'class' => 'form-horizontal')) }}
					{{ Form::hidden('token', $token) }}
					<div class="form-group">
						{{ Form::label('passwordResetEmail', trans('forms.labels.email'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-7">
							{{ Form::email('email', null, ['id' => 'passwordResetEmail', 'placeholder' => trans('forms.placeholders.your_email'), 'class' => 'form-control input-lg', 'required' => 'required']) }}
						</div>
					</div>
					<hr/>
					<div class="form-group">
						{{ Form::label('passwordResetPassword', trans('forms.labels.new_password'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-7">
							{{ Form::password('password', ['id' => 'passwordResetPassword', 'class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.new_password'), 'required' => 'required']) }}
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('passwordResetPasswordConfirmation', trans('forms.labels.new_password_confirmation'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-7">
							{{ Form::password('password_confirmation', ['id' => 'passwordResetPasswordConfirmation', 'class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.new_password_confirmation'), 'required' => 'required']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4 text-center">
							{{ Form::button(trans('forms.buttons.reset_password'), ['class' => 'btn btn-lg btn-block saveBtn', 'type' => 'submit', 'data-loading-text' => trans('forms.buttons.resetting_password')]) }}
						</div>
					</div>
				{{ Form::close() }}
			</div>
		</div>
	</section>
	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
	<!-- // END NEWSLETTER // -->
</section>
@stop