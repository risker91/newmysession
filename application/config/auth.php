<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'Auth_ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '2, 4, 6, 8, 9, 11, 14, 16, 18, 22',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
