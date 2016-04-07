<li>
	{{ HTML::link('#', trans('forms.buttons.signUp'), [
	'data-toggle' => 'modal',
	'data-target' => '#registerModal',
	'data-remote' => I18n::localizeUrl('api/modal-body/register'),
	]) }}
</li>
<li>
	{{ HTML::link('#', trans('forms.buttons.signIn'), [
	'data-toggle' => 'modal',
	'data-target' => '#loginModal',
	'data-remote' => I18n::localizeUrl('api/modal-body/login'),
	]) }}
</li>