<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-15 06:10:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Reg' not found ~ APPPATH/classes/Controller/Zayavka.php [ 9 ] in :
2012-11-15 06:10:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:13:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Http_Exception_408' not found ~ MODPATH/email/classes/Email/Core.php [ 143 ] in :
2012-11-15 06:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:18:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'print' (T_PRINT), expecting function (T_FUNCTION) ~ APPPATH/classes/All.php [ 6 ] in :
2012-11-15 06:18:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:18:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pas' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/All.php [ 6 ] in :
2012-11-15 06:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:18:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pas' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/All.php [ 6 ] in :
2012-11-15 06:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:20:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$pas' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/All.php [ 6 ] in :
2012-11-15 06:20:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:21:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_classmate' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-15 06:21:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:23:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Group' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-15 06:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:24:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/vfloat-cabinet.php [ 6 ] in /var/www/application/views/vfloat-cabinet.php:6
2012-11-15 06:24:27 --- DEBUG: #0 /var/www/application/views/vfloat-cabinet.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 6, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(23): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/vfloat-cabinet.php:6
2012-11-15 06:25:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/vfloat-cabinet.php [ 6 ] in /var/www/application/views/vfloat-cabinet.php:6
2012-11-15 06:25:14 --- DEBUG: #0 /var/www/application/views/vfloat-cabinet.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 6, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(23): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/vfloat-cabinet.php:6
2012-11-15 06:51:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/All.php [ 73 ] in :
2012-11-15 06:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:51:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/All.php [ 73 ] in :
2012-11-15 06:51:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 06:55:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: fac ~ APPPATH/classes/Controller/Risk.php [ 19 ] in /var/www/application/classes/Controller/Risk.php:19
2012-11-15 06:55:57 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 19, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:19
2012-11-15 06:58:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: fac ~ APPPATH/classes/All.php [ 67 ] in /var/www/application/classes/All.php:67
2012-11-15 06:58:17 --- DEBUG: #0 /var/www/application/classes/All.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 67, Array)
#1 /var/www/application/classes/Controller/Risk.php(16): All->before()
#2 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/All.php:67
2012-11-15 07:10:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logined ~ APPPATH/views/block.php [ 6 ] in /var/www/application/views/block.php:6
2012-11-15 07:10:01 --- DEBUG: #0 /var/www/application/views/block.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 6, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/errors.php(4): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Errors))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/block.php:6
2012-11-15 07:12:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/Risk.php [ 13 ] in :
2012-11-15 07:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-15 07:26:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: fac ~ APPPATH/classes/Controller/Risk.php [ 19 ] in /var/www/application/classes/Controller/Risk.php:19
2012-11-15 07:26:02 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 19, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:19
2012-11-15 07:27:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/Controller/Risk.php [ 11 ] in /var/www/application/classes/Controller/Risk.php:11
2012-11-15 07:27:02 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 11, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:11
2012-11-15 07:50:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: empty ~ APPPATH/classes/Controller/Zayavka.php [ 27 ] in /var/www/application/classes/Controller/Zayavka.php:27
2012-11-15 07:50:58 --- DEBUG: #0 /var/www/application/classes/Controller/Zayavka.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 27, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Zayavka->action_addzayavka()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Zayavka))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Zayavka.php:27
2012-11-15 09:04:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: logined ~ APPPATH/views/block.php [ 6 ] in /var/www/application/views/block.php:6
2012-11-15 09:04:47 --- DEBUG: #0 /var/www/application/views/block.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 6, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/errors.php(4): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Errors))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/block.php:6