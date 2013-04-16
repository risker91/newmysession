<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-13 19:42:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/Errors.php [ 32 ] in /var/www/isit/application/classes/Controller/Errors.php:32
2013-01-13 19:42:14 --- DEBUG: #0 /var/www/isit/application/classes/Controller/Errors.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/isit/a...', 32, Array)
#1 /var/www/isit/system/classes/Kohana/Controller.php(84): Controller_Errors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/isit/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Errors))
#4 /var/www/isit/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/isit/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/isit/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/isit/application/classes/Controller/Errors.php:32