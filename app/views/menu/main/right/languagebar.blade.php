<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="flag-icon flag-icon-{{ I18n::getCurrentLocale() }}"></span> <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-header">{{ trans('chunks.menu.set_language') }}</li>
	@foreach(I18n::getSupportedLocales() as $localeCode => $properties)
		@if($localeCode == I18n::getCurrentLocale())
			<li class="disabled">
				<a rel="alternate" hreflang="{{$localeCode}}" href="#">
					<span class="flag-icon flag-icon-{{$localeCode}}"></span> {{{ !empty($abbr) ? $localeCode : $properties['native'] }}}
				</a>
			</li>
		@elseif($url = I18n::getLocalizedURL($localeCode))
			<li>
				<a rel="alternate" hreflang="{{$localeCode}}" href="{{$url}}">
					<span class="flag-icon flag-icon-{{$localeCode}}"></span> {{{ !empty($abbr) ? $localeCode : $properties['native'] }}}
				</a>
			</li>
		@endif
	@endforeach
	</ul>
</li>