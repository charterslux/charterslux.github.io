@extends('layouts.master')

@section('main_menu_left_side')
	@include('menu.main.left.cabinet')
@stop

@section('content')
<section id="content">
	<!-- // NEWSLETTER // -->
	<section id="userEditSection" class="page container-fluid">
		<header>
			<h1>{{ trans('chunks.headers.editUserData') }}</h1>
			<hr>
		</header>
		<div class="body row">
			<div class="col-sm-8 col-sm-offset-2" id="userEdit">
				{{ Form::open(['url' => I18n::localizeUrl('api/user/edit'), 'class' => 'form-horizontal']) }}
				<fieldset>
					<legend>{{ trans('forms.legends.basic_info') }}</legend>
					<!-- Title Form Input -->
					<div class="form-group">
						{{ Form::label('suffix', trans('forms.labels.suffix'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-2">
							{{ Form::select(
							'suffix',
							$suffixes,
							$client->suffix_id,
							[
								'id' => 'registrationSuffix',
								'class' => 'form-control input-lg',
							]) }}
						</div>
					</div>

					<!-- Last name Form Input -->
					<div class="form-group">
						{{ Form::label('last_name', trans('forms.labels.last_name'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-9">
							{{ Form::text('last_name', $client->last_name, ['id' => 'last_name', 'class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.set_your_last_name')]) }}
						</div>
					</div>

					<!-- First Name Form Input -->
					<div class="form-group">
						{{ Form::label('first_name', trans('forms.labels.first_name'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-9">
							{{ Form::text('first_name', $client->first_name, ['id' => 'first_name', 'class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.set_your_first_name')]) }}
						</div>
					</div>

					<!-- Patronymic Form Input -->
					<!--				<div class="form-group">-->
					<!--					{{ Form::label('Patronymic', 'Patronymic:', ['class' => 'sr-only']) }}-->
					<!--					{{ Form::text('patronymic', $client->patronymic, ['id' => 'Patronymic', 'class' => 'form-control', 'placeholder' => trans('forms.placeholders.patronymic')]) }}-->
					<!--				</div>-->

					<!-- Borned at Form Input -->
					<div class="form-group">
						{{ Form::label('borned_at', trans('forms.labels.borned_at'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-4">
							{{ Form::text(
							'borned_at',
							$client->borned_at(),
							[
							'id' => 'borned_at',
							'class' => 'form-control input-lg',
							'data-provide' => "datepicker",
							'placeholder' => trans('forms.placeholders.set_your_borned_at'),
							'data-date-language' => I18n::getCurrentLocale(),
							'data-date-autoclose' => 'true',
							]) }}
						</div>
					</div>
					<legend>{{ trans('forms.legends.contact_info') }}</legend>
					<!-- Email Form Input -->
					<div class="form-group">
						{{ Form::label('email', trans('forms.labels.email'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-6">
							{{ Form::text('email', $client->user->email, ['id' => 'email', 'class' => 'form-control input-lg', 'readonly' => 'readonly', 'placeholder' => trans('forms.placeholders.set_your_email')]) }}
						</div>
					</div>
					<!-- Phone_number Form Input -->
					<div class="form-group">
						{{ Form::label('phone_number', trans('forms.labels.phone_number'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-5">
							{{ Form::text('phone_number', $client->phone_number, ['id' => 'phone_number', 'class' => 'form-control input-lg', 'placeholder' => trans('forms.placeholders.set_your_phone_number')]) }}
						</div>
					</div>
					<legend>{{ trans('forms.legends.additional_info') }}</legend>
					<!-- Preferred Language Form Input -->
					<div class="form-group">
						{{ Form::label('preferred_language', trans('forms.labels.preferred_language'), ['class' => 'col-sm-3 control-label']) }}
						<div class="col-sm-4">
							{{ Form::select(
							'preferred_language',
							$available_languages,
							$client->preferred_language,
							[
							'id' => 'preferredLanguage',
							'class' => 'form-control input-lg',
							]) }}
						</div>
					</div>
				</fieldset>

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
			</div>
			{{ Form::close() }}
		</div>
	</section>
	@include('layouts.chunks.contactsSection')
	@include('layouts.chunks.footerSection')
	<!-- // END NEWSLETTER // -->
</section>
@stop