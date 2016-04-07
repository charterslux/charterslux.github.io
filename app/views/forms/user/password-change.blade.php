@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.cabinet')
@stop

@section('content')
<section id="content">
	<!-- // NEWSLETTER // -->
	<section id="passwordChangeSection" class="page container-fluid">
		<header>
			<h1>{{ trans('chunks.headers.passwordChange') }}</h1>
			<hr>
		</header>
		<div class="body">
			<div class="row" id="passwordChange">
				<div class="col-sm-12">
					{{ Form::open(['url' => I18n::localizeUrl('api/user/change-password'), 'class' => 'form-horizontal']) }}

						<!-- Old Password Form Input -->
						<div class="form-group">
							{{ Form::label('old_password', trans('forms.labels.old_password'), ['class' => 'col-sm-3 control-label']) }}
							<div class="col-sm-7">
								{{ Form::password('old_password', [
									'class' => 'form-control input-lg',
									'placeholder' => trans('forms.placeholders.your_current_password'),
									'required' => true
									]) }}
							</div>
						</div>

						<!-- Password Form Input -->
						<div class="form-group">
							{{ Form::label('password', trans('forms.labels.new_password'), ['class' => 'col-sm-3 control-label']) }}
							<div class="col-sm-7">
								{{ Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.your_new_password'), 'required' => true]) }}
							</div>
						</div>

						<!-- Password Confirm Form Input -->
						<div class="form-group">
							{{ Form::label('password_confirmation', trans('forms.labels.new_password_confirmation'), ['class' => 'col-sm-3 control-label']) }}
							<div class="col-sm-7">
								{{ Form::password('password_confirmation', ['class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.your_new_password_confirm'), 'required' => true]) }}
							</div>
						</div>


						<!-- Form Button -->
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4 text-center">
								{{ Form::button(
								trans('forms.buttons.save'),
								[
								'type' => 'submit',
								'class' => 'btn btn-lg btn-block saveBtn',
								'data-loading-text' => trans('forms.buttons.saving'),
								]) }}
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</section>
	<!-- // END NEWSLETTER // -->

	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
</section>
@stop