<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-22 14:20:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usr ~ APPPATH\views\profile-menu.php [ 16 ] in Z:\home\localhost\newmysession\application\views\profile-menu.php:16
2013-04-22 14:20:07 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\profile-menu.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(106): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Profile))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\profile-menu.php:16
2013-04-22 14:21:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_id ~ APPPATH\views\session-vision.php [ 203 ] in Z:\home\localhost\newmysession\application\views\session-vision.php:203
2013-04-22 14:21:11 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-vision.php(203): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 203, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(109): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-vision.php:203
2013-04-22 19:35:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usr ~ APPPATH\views\self-menu.php [ 31 ] in Z:\home\localhost\newmysession\application\views\self-menu.php:31
2013-04-22 19:35:11 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\self-menu.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 31, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(121): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Profile))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\self-menu.php:31
2013-04-22 20:00:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\wall.php [ 2 ] in Z:\home\localhost\newmysession\application\views\wall.php:2
2013-04-22 20:00:24 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\wall.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(109): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Profile))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\wall.php:2