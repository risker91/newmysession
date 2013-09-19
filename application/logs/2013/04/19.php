<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-19 00:09:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\Session.php [ 29 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:29
2013-04-19 00:09:28 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 29, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:29
2013-04-19 00:12:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `sessions`.`id`, `sessions`.`descr`, `sessions`.`create_user`, `1` FROM `sessions` JOIN `followers` ON (`sessions`.`id` = `followers`.`session_id`) JOIN `users` ON (`users`.`id` = `followers`.`user_id`) WHERE `users`.`id` = '24415549' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:12:12 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `session...', false, Array)
#1 Z:\home\localhost\newmysession\application\classes\Model\Session.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:12:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'count(*) as cd' in 'field list' [ SELECT `sessions`.`id`, `sessions`.`descr`, `sessions`.`create_user`, `count(*) as cd` FROM `sessions` JOIN `followers` ON (`sessions`.`id` = `followers`.`session_id`) JOIN `users` ON (`users`.`id` = `followers`.`user_id`) WHERE `users`.`id` = '24415549' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:12:43 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `session...', false, Array)
#1 Z:\home\localhost\newmysession\application\classes\Model\Session.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:12:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'count(*)' in 'field list' [ SELECT `sessions`.`id`, `sessions`.`descr`, `sessions`.`create_user`, `count(*)` FROM `sessions` JOIN `followers` ON (`sessions`.`id` = `followers`.`session_id`) JOIN `users` ON (`users`.`id` = `followers`.`user_id`) WHERE `users`.`id` = '24415549' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:12:58 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `session...', false, Array)
#1 Z:\home\localhost\newmysession\application\classes\Model\Session.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:13:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\Session.php [ 22 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:22
2013-04-19 00:13:13 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:22
2013-04-19 00:13:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `sessions`.`id`, `sessions`.`descr`, `sessions`.`create_user`, `1` FROM `sessions` JOIN `followers` ON (`sessions`.`id` = `followers`.`session_id`) JOIN `users` ON (`users`.`id` = `followers`.`user_id`) WHERE `users`.`id` = '24415549' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:13:31 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `session...', false, Array)
#1 Z:\home\localhost\newmysession\application\classes\Model\Session.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-19 00:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: index ~ APPPATH\classes\Model\Session.php [ 31 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:31
2013-04-19 00:15:53 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 31, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:31
2013-04-19 00:16:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\Session.php [ 32 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:32
2013-04-19 00:16:02 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 32, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:32
2013-04-19 00:17:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Model\Session.php [ 33 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:33
2013-04-19 00:17:02 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:33
2013-04-19 00:17:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\classes\Model\Session.php [ 33 ] in Z:\home\localhost\newmysession\application\classes\Model\Session.php:33
2013-04-19 00:17:36 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Session.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\session.php(18): Model_Session->loadSess('24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Session.php:33
2013-04-19 14:22:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: val ~ APPPATH\views\session-list.php [ 16 ] in Z:\home\localhost\newmysession\application\views\session-list.php:16
2013-04-19 14:22:32 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-list.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(115): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-list.php:16
2013-04-19 15:12:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-listitem.php [ 1 ] in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 15:12:53 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-listitem.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(115): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 15:13:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-listitem.php [ 1 ] in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 15:13:50 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-listitem.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(115): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 16:37:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH\classes\Controller\session.php [ 112 ] in Z:\home\localhost\newmysession\application\classes\Controller\session.php:112
2013-04-19 16:37:58 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Controller\session.php(112): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 112, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_additem()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\newmysession\application\classes\Controller\session.php:112
2013-04-19 19:31:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-listitem.php [ 1 ] in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 19:31:09 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-listitem.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 1, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(118): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-listitem.php:1
2013-04-19 19:33:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-additem.php [ 10 ] in Z:\home\localhost\newmysession\application\views\session-additem.php:10
2013-04-19 19:33:42 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-additem.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(118): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-additem.php:10
2013-04-19 19:34:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-additem.php [ 10 ] in Z:\home\localhost\newmysession\application\views\session-additem.php:10
2013-04-19 19:34:29 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-additem.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(118): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-additem.php:10
2013-04-19 22:38:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::getItemsCourse() ~ APPPATH\classes\Controller\Ajax.php [ 168 ] in :
2013-04-19 22:38:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 22:38:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::getItemsCourse() ~ APPPATH\classes\Controller\Ajax.php [ 168 ] in :
2013-04-19 22:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:01:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\session-vision.php [ 186 ] in Z:\home\localhost\newmysession\application\views\session-vision.php:186
2013-04-19 23:01:20 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-vision.php(186): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 186, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\newmysession\application\views\basic.php(118): Kohana_View->__toString()
#5 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\newmysession\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#11 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\newmysession\application\views\session-vision.php:186
2013-04-19 23:21:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::getItemsCourse() ~ APPPATH\classes\Controller\Ajax.php [ 168 ] in :
2013-04-19 23:21:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:45:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:45:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:45:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:45:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:45:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:45:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:45:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:45:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:45:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:46:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:46:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:46:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:46:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:47:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:47:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:47:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-19 23:53:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::show_answers() ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in :
2013-04-19 23:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :