@if($user)
	@include('menu.main.right.user.loggedin')
@else
	@include('menu.main.right.user.unknown')
@endif