<p>{{ trans('chunks.paragraphs.login') }}</p>
<!-- login email Form Input -->
<div class="form-group">
	{{ Form::label('loginEmail', 'LoginEmail:', ['class' => 'sr-only']) }}
	{{ Form::text(
		'email',
		NULL,
		[
			'id' => 'loginEmail',
			'class' => 'form-control',
			'placeholder' => trans('forms.placeholders.your_email')
		]) }}
</div>
<!-- Password Form Input -->
<div class="form-group">
	{{ Form::label('loginPassword', 'Password:', ['class' => 'sr-only']) }}
	{{ Form::password(
		'password',
		[
			'id' => 'loginPassword',
			'class' => 'form-control',
			'placeholder' => trans('forms.placeholders.your_password')
		]) }}
</div>
<div class="text-right">
{{ HTML::link('#', trans('chunks.words.forgot_password'), [
	    'data-dismiss' => 'modal',
	    'data-toggle'  => 'modal',
	    'data-target'  => '#passwordRemindModal',
        'data-remote'  => I18n::localizeUrl('api/modal-body/password-remind'),
	]) }}
</div>