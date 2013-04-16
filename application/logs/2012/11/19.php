<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-19 07:50:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/All.php [ 6 ] in :
2012-11-19 07:50:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:51:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/All.php [ 8 ] in :
2012-11-19 07:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:52:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/All.php [ 8 ] in :
2012-11-19 07:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:52:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/All.php [ 8 ] in :
2012-11-19 07:52:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:53:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/All.php [ 7 ] in :
2012-11-19 07:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:54:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/All.php [ 9 ] in :
2012-11-19 07:54:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:54:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/All.php [ 9 ] in :
2012-11-19 07:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:55:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/Risk.php [ 17 ] in :
2012-11-19 07:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:55:56 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Risk.php [ 17 ] in :
2012-11-19 07:55:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:56:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: all ~ APPPATH/classes/Controller/Risk.php [ 17 ] in /var/www/application/classes/Controller/Risk.php:17
2012-11-19 07:56:16 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:17
2012-11-19 07:56:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: all ~ APPPATH/classes/Controller/Risk.php [ 17 ] in /var/www/application/classes/Controller/Risk.php:17
2012-11-19 07:56:18 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 17, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:17
2012-11-19 07:57:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Risk::logged_in() ~ APPPATH/classes/Controller/Risk.php [ 17 ] in :
2012-11-19 07:57:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:57:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/Risk.php [ 17 ] in :
2012-11-19 07:57:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:58:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function logged_in() on a non-object ~ APPPATH/classes/Controller/Risk.php [ 17 ] in :
2012-11-19 07:58:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:00:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Risk.php [ 43 ] in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:00:57 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 43, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:01:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Risk.php [ 43 ] in :
2012-11-19 08:01:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:01:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: student_count ~ APPPATH/views/risk.php [ 1 ] in /var/www/application/views/risk.php:1
2012-11-19 08:01:38 --- DEBUG: #0 /var/www/application/views/risk.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(64): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/risk.php:1
2012-11-19 08:41:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_Wall() ~ APPPATH/classes/Controller/Risk.php [ 41 ] in :
2012-11-19 08:41:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:42:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_Wall() ~ APPPATH/classes/Controller/Risk.php [ 41 ] in :
2012-11-19 08:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:42:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_wall() ~ APPPATH/classes/Controller/Risk.php [ 41 ] in :
2012-11-19 08:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:42:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Model_Wall() ~ APPPATH/classes/Controller/Risk.php [ 41 ] in :
2012-11-19 08:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:42:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Risk::$group_id ~ APPPATH/classes/Controller/Risk.php [ 43 ] in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:42:43 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 43, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: group_id ~ APPPATH/classes/Controller/Risk.php [ 43 ] in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:30 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 43, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/Controller/Risk.php [ 43 ] in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:54 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 43, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/Controller/Risk.php [ 43 ] in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:44:56 --- DEBUG: #0 /var/www/application/classes/Controller/Risk.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 43, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Risk.php:43
2012-11-19 08:45:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: mas ~ APPPATH/classes/Model/Wall.php [ 26 ] in /var/www/application/classes/Model/Wall.php:26
2012-11-19 08:45:06 --- DEBUG: #0 /var/www/application/classes/Model/Wall.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 26, Array)
#1 /var/www/application/classes/Controller/Risk.php(43): Model_Wall->showAction(NULL)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Wall.php:26
2012-11-19 08:49:30 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Model/Wall.php [ 22 ] in /var/www/application/classes/Model/Wall.php:22
2012-11-19 08:49:30 --- DEBUG: #0 /var/www/application/classes/Model/Wall.php(22): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/applic...', 22, Array)
#1 /var/www/application/classes/Controller/Risk.php(43): Model_Wall->showAction(1)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Wall.php:22
2012-11-19 08:53:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_Wall::showAction(), called in /var/www/application/classes/Controller/Risk.php on line 43 and defined ~ APPPATH/classes/Model/Wall.php [ 17 ] in /var/www/application/classes/Model/Wall.php:17
2012-11-19 08:53:26 --- DEBUG: #0 /var/www/application/classes/Model/Wall.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 17, Array)
#1 /var/www/application/classes/Controller/Risk.php(43): Model_Wall->showAction()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Risk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Wall.php:17
2012-11-19 08:56:01 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/classes/Controller/Risk.php [ 45 ] in :
2012-11-19 08:56:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 08:58:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/All.php [ 47 ] in /var/www/application/classes/All.php:47
2012-11-19 08:58:00 --- DEBUG: #0 /var/www/application/classes/All.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 47, Array)
#1 /var/www/application/classes/Controller/Risk.php(8): All->before()
#2 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/All.php:47
2012-11-19 08:58:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/All.php [ 47 ] in /var/www/application/classes/All.php:47
2012-11-19 08:58:19 --- DEBUG: #0 /var/www/application/classes/All.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 47, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): All->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/All.php:47
2012-11-19 08:58:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/All.php [ 57 ] in /var/www/application/classes/All.php:57
2012-11-19 08:58:33 --- DEBUG: #0 /var/www/application/classes/All.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 57, Array)
#1 /var/www/application/classes/Controller/Risk.php(8): All->before()
#2 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/All.php:57
2012-11-19 08:58:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH/classes/All.php [ 60 ] in /var/www/application/classes/All.php:60
2012-11-19 08:58:46 --- DEBUG: #0 /var/www/application/classes/All.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 60, Array)
#1 /var/www/application/classes/Controller/Risk.php(8): All->before()
#2 /var/www/system/classes/Kohana/Controller.php(69): Controller_Risk->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/All.php:60
2012-11-19 09:01:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: action ~ APPPATH/views/risk.php [ 2 ] in /var/www/application/views/risk.php:2
2012-11-19 09:01:03 --- DEBUG: #0 /var/www/application/views/risk.php(2): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 2, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(64): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/risk.php:2
2012-11-19 09:05:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/views/risk.php [ 5 ] in /var/www/application/views/risk.php:5
2012-11-19 09:05:01 --- DEBUG: #0 /var/www/application/views/risk.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(64): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/risk.php:5
2012-11-19 09:18:59 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Controller_Ajax could not be converted to string ~ APPPATH/classes/Controller/Ajax.php [ 19 ] in /var/www/application/classes/Controller/Ajax.php:19
2012-11-19 09:18:59 --- DEBUG: #0 /var/www/application/classes/Controller/Ajax.php(19): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 19, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_SendAns()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Ajax.php:19
2012-11-19 09:22:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-19 09:22:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 09:23:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-19 09:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 09:28:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Sess::$auto_render ~ APPPATH/classes/All.php [ 21 ] in /var/www/application/classes/All.php:21
2012-11-19 09:28:17 --- DEBUG: #0 /var/www/application/classes/All.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 21, Array)
#1 /var/www/system/classes/Kohana/Controller.php(69): All->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Sess))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/All.php:21
2012-11-19 09:32:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-19 09:32:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 09:33:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-19 09:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 09:35:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/risk.php [ 5 ] in /var/www/application/views/risk.php:5
2012-11-19 09:35:35 --- DEBUG: #0 /var/www/application/views/risk.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 5, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(64): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/risk.php:5
2012-11-19 09:39:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/views/risk.php [ 6 ] in /var/www/application/views/risk.php:6
2012-11-19 09:39:52 --- DEBUG: #0 /var/www/application/views/risk.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 6, Array)
#1 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/application/views/basic.php(64): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(61): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(122): Kohana_Request->execute()
#14 {main} in /var/www/application/views/risk.php:6