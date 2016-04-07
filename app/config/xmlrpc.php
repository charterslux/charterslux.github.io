<?php

return array
(
	'server_url' => getenv('ERP_ADDRESS'),
	'dbname'     => getenv('ERP_DB'),
	'user'       => getenv('ERP_USER'),
	'password'   => getenv('ERP_PASSWORD'),
);
