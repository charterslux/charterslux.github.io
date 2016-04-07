<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $user->cabinetLink()}} <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
		<li>
			<a href="{{I18n::localizeURL('user/edit')}}"><i class="fa fa-clipboard fa-fw"></i> {{trans('forms.buttons.personal_data')}}</a>
		</li>
		<li>
			<a href="{{I18n::localizeURL('user/password-change')}}"><i class="fa fa-lock fa-fw"></i> {{trans('forms.buttons.password_change')}}</a>
		</li>
		<li class="divider"></li>
		<li>
			<a href="{{I18n::localizeURL('order/list/active')}}"><i class="fa fa-file-text-o fa-fw"></i> {{trans('forms.buttons.orders.active')}} {{ ($orders['active']) ? '<span class="badge">'.$orders['active'].'</span>' : NULL }}</a>
		</li>
		<!--							<li>-->
		<!--								<a href="{{I18n::localizeURL('order/list/closed')}}"><i class="fa fa-file-text fa-fw"></i> {{trans('chunks.buttons.orders.closed')}} {{ ($orders['closed']) ? '<span class="badge">'.$orders['closed'].'</span>' : NULL }}</a>-->
		<!--							</li>-->
		<li class="divider"></li>
		<li>
			<a href="{{I18n::localizeURL('auth/logout')}}"><i class="fa fa-power-off fa-fw"></i> {{trans('forms.buttons.exit')}}</a>
		</li>
	</ul>
</li>