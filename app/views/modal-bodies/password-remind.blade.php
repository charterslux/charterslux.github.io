<p>{{ trans('chunks.paragraphs.pass_remind') }}</p>
<!-- RememberEmail Form Input -->
<div class="form-group">
	{{ Form::label('rememberEmail', 'RememberEmail:', ['class' => 'sr-only']) }}
	{{ Form::text('email', NULL, ['id' => 'rememberEmail', 'class' => 'form-control']) }}
</div>