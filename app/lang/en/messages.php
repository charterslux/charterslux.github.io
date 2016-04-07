<?php

return array(
	'auth' => array(
		'can_not_auth' => 'Wrong auth params',
		'email_or_pass_empty' => 'Email or Password in not defined',
		'user_already_logged_in' => 'User is already logged in',
		'logout_success' => 'You successfully quitted',
		'need_auth' => 'Authentication is needed to proceed',
		'already_logged_in' => 'You already logged in',
		'registration_success' => 'Registration succeeded',
		'user_not_found' => 'User not found',
		'token_error' => 'Bad Request Token',
		'loginSuccess' => 'You successfully signed in',
	),

	'user' => array(
		'edit' => array(
			'empty' => 'No data to change',
			'success' => 'User data successfully saved',
		),
		'pass' => array(
			'pass_changed' => 'Password was successfully changed',
			'old_pass_error' => 'Old password is incorrect',
		),
		'change_pass' => 'Установка/напоминание пароля'
	),
	'order_status' => array(
		'created' => 'Created',
		'send' => 'Send',
		'confirmed' => 'Confirmed',
	),
	'order' => array(
		'send' => 'Request was sent to a detailed calculation to the air company. In about 6 hours, you will receive information on the calculation of the cost.',
		'already_send' => 'Your request is being processed by our managers',
		'not_defined' => 'No available request',
		'not_found' => 'Request not found',
		'not_owned' => 'The request is owned by another user',
		'send_error' => 'There was an error while request sending!',
		'new_order' => 'New request',
		'tail_deleted' => 'Aircraft was removed from you order',
	),

	'jet' => array(
		'class' => array(
			'small' => 'Small',
			'average' => 'Average',
			'large' => 'Large',
			'long-haul' => 'Long-Haul',
		)
	),

	'subscription' => array(
		'success' => 'Subscription is successfully registered!'
	),

	'reminders' => [
		'sent' => 'На Ваш почтовый ящик были отправлены инструкции по восстановлению пароля'
	]
);