<ul id="main-menu-sections-nav" class="nav navbar-nav">
	<li><a href="{{I18n::localizeURL('/')}}">{{ trans('chunks.menu.home') }}</a></li>
	@if($user)
	<li>
		<a href="{{I18n::localizeURL('user/edit')}}">{{trans('chunks.menu.personal_data')}}</a>
	</li>
	<li>
		<a href="{{I18n::localizeURL('user/password-change')}}">{{trans('chunks.menu.password_change')}}</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="{{I18n::localizeURL('order/list/active')}}">{{trans('chunks.menu.orders.active')}} {{ ($orders['active']) ? '<span class="label label-danger">'.$orders['active'].'</span>' : NULL }}</a>
	</li>
	@endif
</ul>