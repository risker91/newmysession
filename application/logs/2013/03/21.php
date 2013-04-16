<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-21 16:20:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-21 16:20:54 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(140): Model_Item->getItemsCourse('22', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-21 18:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\classes\Controller\Ajax.php [ 35 ] in :
2013-03-21 18:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-21 18:48:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\Model\Wall.php [ 11 ] in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-21 18:48:16 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(43): Model_Wall->AddPost('????????????', '20', '22')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendMsgWall()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Wall.php:11
2013-03-21 19:01:05 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Risk.php [ 44 ] in Z:\home\localhost\subdomain\application\classes\Controller\Risk.php:44
2013-03-21 19:01:05 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(44): Kohana_Core::error_handler(2048, 'Only variables ...', 'Z:\home\localho...', 44, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\subdomain\application\classes\Controller\Risk.php:44
2013-03-21 19:04:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESK' at line 1 [ SELECT `wall`.`id` AS `id`, `wall`.`group_id` AS `group_id`, `wall`.`classmate_id` AS `classmate_id`, `wall`.`text` AS `text`, `wall`.`time` AS `time` FROM `walls` AS `wall` WHERE `group_id` = '22' ORDER BY `id` DESK ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 19:04:44 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `wall`.`...', 'Model_Wall', Array)
#1 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(31): Kohana_ORM->find_all()
#4 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(44): Model_Wall->showWall('22')
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 19:05:41 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASK' at line 1 [ SELECT `wall`.`id` AS `id`, `wall`.`group_id` AS `group_id`, `wall`.`classmate_id` AS `classmate_id`, `wall`.`text` AS `text`, `wall`.`time` AS `time` FROM `walls` AS `wall` WHERE `group_id` = '22' ORDER BY `id` ASK ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 19:05:41 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `wall`.`...', 'Model_Wall', Array)
#1 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(31): Kohana_ORM->find_all()
#4 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(44): Model_Wall->showWall('22')
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 19:06:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASK' at line 1 [ SELECT `wall`.`id` AS `id`, `wall`.`group_id` AS `group_id`, `wall`.`classmate_id` AS `classmate_id`, `wall`.`text` AS `text`, `wall`.`time` AS `time` FROM `walls` AS `wall` WHERE `group_id` = '22' ORDER BY `id` ASK ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-21 19:06:07 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `wall`.`...', 'Model_Wall', Array)
#1 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(31): Kohana_ORM->find_all()
#4 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(44): Model_Wall->showWall('22')
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251