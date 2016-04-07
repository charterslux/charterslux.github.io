<p>{{ trans('chunks.paragraphs.register') }}</p>
<div class="row">
	<div class="col-sm-12">
		<!-- login email Form Input -->
		<div class="form-group">
			{{ Form::label('registerEmail', 'registerEmail:', ['class' => 'sr-only']) }}
			{{ Form::text(
				'email',
				NULL,
				[
					'id' => 'registerEmail',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.set_your_email')
			]) }}
		</div>
	</div>
	<div class="col-sm-6">
		<!-- Password Form Input -->
		<div class="form-group">
			{{ Form::label('registerPassword', 'Password:', ['class' => 'sr-only']) }}
			{{ Form::password(
				'password',
				[
					'id' => 'registerPassword',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.set_your_password')
			]) }}
		</div>
	</div>
	<div class="col-sm-6">
		<!-- Password_confirm Form Password Input -->
		<div class="form-group">
			{{ Form::label('registerPasswordConfirm', 'Password_confirmation:', ['class' => 'sr-only']) }}
			{{ Form::password(
				'password_confirmation',
				[
					'id' => 'registerPasswordConfirm',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.password_confirmation')
			]) }}
		</div>
	</div>
	<hr />
	<div class="col-sm-12">
		<!-- Phone Form Input -->
		<div class="form-group">
			{{ Form::label('registerPhoneNumber', 'Phone:', ['class' => 'sr-only'] ) }}
			{{ Form::text(
				'client[phone_number]',
				NULL,
				[
					'id' => 'registerPhoneNumber',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.set_your_phone')
			]) }}
		</div>
	</div>
	<div class="col-sm-2">
		<!-- First_name Form Input -->
		<div class="form-group">
			{{ Form::label('registrationSuffix', 'First_name:', ['class' => 'sr-only']) }}
			{{ Form::select(
				'client[suffix_id]',
				$suffixes,
				NULL,
				[
					'id' => 'registrationSuffix',
					'class' => 'form-control',
			]) }}
		</div>
	</div>
	<div class="col-sm-5">
		<!-- First_name Form Input -->
		<div class="form-group">
			{{ Form::label('first_name', 'First_name:', ['class' => 'sr-only']) }}
			{{ Form::text(
				'client[first_name]',
				NULL,
				[
					'id' => 'first_name',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.set_your_first_name')
			]) }}
		</div>
	</div>
	<div class="col-sm-5">
		<!-- last_name Form Input -->
		<div class="form-group">
			{{ Form::label('last_name', 'First_name:', ['class' => 'sr-only']) }}
			{{ Form::text(
				'client[last_name]',
				NULL,
				[
					'id' => 'last_name',
					'class' => 'form-control',
					'placeholder' => trans('forms.placeholders.set_your_last_name')
			]) }}
		</div>
	</div>
	<hr />
	<div class="col-sm-12 form-horizontal">
		<!-- Preferred language Form Input -->
		<div class="form-group">
			{{ Form::label('preferred_language', trans('forms.labels.preferred_language'), ['class' => 'col-sm-7 control-label']) }}
			<div class="col-sm-5">
				{{ Form::select(
					'client[preferred_language]',
					$preferred_languages,
					I18n::getCurrentLocale(),
					[
						'id' => 'preferred_language',
						'class' => 'form-control',
						'placeholder' => trans('forms.placeholders.your_preferred_language')
					]) }}
			</div>
		</div>
	</div>
</div>