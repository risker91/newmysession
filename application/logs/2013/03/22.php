<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-22 13:06:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH\classes\Model\Wall.php [ 54 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:54
2013-03-22 13:06:31 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 54, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:54
2013-03-22 13:07:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id_group ~ APPPATH\classes\Model\Wall.php [ 54 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:54
2013-03-22 13:07:37 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 54, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:54
2013-03-22 13:07:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'time,avatar,name,msg' in 'field list' [ SELECT `time,avatar,name,msg` FROM `classmates` JOIN `users` ON (`classmates`.`id` = `users`.`id`) WHERE `classmates`.`group_id` = '22' AND `users`.`logins` >= 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:07:52 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `time,av...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(56): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:11:57 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`name, msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` ' at line 1 [ SELECT `nwalls`.`time,classmates`.`avatar, classmates`.`name, msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `nwalls` ON (`nwalls`.`id` = `msgwalls`.`wall_id`) WHERE `nwalls`.`group_id` = '22' AND `users`.`logins` >= 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:11:57 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `nwalls`...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(57): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:12:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`name, msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` ' at line 1 [ SELECT `nwalls`.`time,classmates`.`avatar, classmates`.`name, msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `nwalls` ON (`nwalls`.`id` = `msgwalls`.`wall_id`) WHERE `nwalls`.`group_id` = '22' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:12:11 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `nwalls`...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(57): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:15:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'nwalls.time' in 'field list' [ SELECT `nwalls`.`time`, `classmates`.`avatar`, `classmates`.`name`, `msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `nwalls` ON (`nwalls`.`id` = `msgwalls`.`wall_id`) WHERE `nwalls`.`group_id` = '22' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:15:41 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `nwalls`...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(57): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:16:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'classmates.avatar' in 'field list' [ SELECT `msgwalls`.`time`, `classmates`.`avatar`, `classmates`.`name`, `msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `nwalls` ON (`nwalls`.`id` = `msgwalls`.`wall_id`) WHERE `nwalls`.`group_id` = '22' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:16:57 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `msgwall...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(56): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-22 13:19:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\views\risk.php [ 42 ] in Z:\home\localhost\subdomain\application\views\risk.php:42
2013-03-22 13:19:56 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 42, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:42
2013-03-22 13:22:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH\views\risk.php [ 42 ] in Z:\home\localhost\subdomain\application\views\risk.php:42
2013-03-22 13:22:41 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(42): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 42, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:42
2013-03-22 16:00:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\Wall.php [ 11 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:00:12 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(22): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('werwer', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:02:21 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-03-22 16:02:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #99, 'id')
#2 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(22): Model_Wall->getIdWall('22')
#5 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('gdfg', '20', '22')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#12 {main} in :
2013-03-22 16:02:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Model\Wall.php [ 11 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:02:36 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(22): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('gdfg', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:03:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Wall.php [ 11 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:03:03 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(22): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('gdfg', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:03:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\Wall.php [ 11 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:03:17 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(22): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('gdfg', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-22 16:06:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Model\Wall.php [ 14 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:14
2013-03-22 16:06:05 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 14, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(27): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('sdfsdf', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:14
2013-03-22 16:06:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Model\Wall.php [ 15 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:15
2013-03-22 16:06:17 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 15, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(27): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('sdfsdf', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:15
2013-03-22 16:06:59 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Wall.php [ 12 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:12
2013-03-22 16:06:59 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\localho...', 12, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(27): Model_Wall->getIdWall('22')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('sdfsdf', '20', '22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:12
2013-03-22 16:37:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Classmate as array ~ APPPATH\classes\Model\Wall.php [ 34 ] in :
2013-03-22 16:37:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-22 16:41:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Classmate.php [ 223 ] in :
2013-03-22 16:41:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-22 16:41:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Classmate.php [ 223 ] in :
2013-03-22 16:41:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-22 18:13:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-22 18:13:51 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(158): Model_Item->getItemsCourse('22', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83