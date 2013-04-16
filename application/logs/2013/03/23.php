<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-23 11:15:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'isit.group' doesn't exist [ SELECT `msgwalls`.`time`, `classmates`.`avatar_url`, `classmates`.`name`, `msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `group` ON (`group`.`id` = `msgwalls`.`group_id`) WHERE `group`.`group_id` = '22' ORDER BY `msgwalls`.`id` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-23 11:15:45 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `msgwall...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(74): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-23 11:16:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'isit.group' doesn't exist [ SELECT `msgwalls`.`time`, `classmates`.`avatar_url`, `classmates`.`name`, `msgwalls`.`msg` FROM `classmates` JOIN `msgwalls` ON (`classmates`.`id` = `msgwalls`.`classmate_id`) JOIN `group` ON (`group`.`id` = `msgwalls`.`group_id`) WHERE `group`.`id` = '22' ORDER BY `msgwalls`.`id` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-23 11:16:03 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `msgwall...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(74): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(45): Model_Wall->showWall('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-03-23 11:36:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:36:09 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(156): Model_Item->getItemsCourse('', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:36:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:36:13 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(156): Model_Item->getItemsCourse('', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:38:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:38:36 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(156): Model_Item->getItemsCourse('', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:39:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:39:55 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(156): Model_Item->getItemsCourse('22', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-23 11:41:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\update-index.php [ 15 ] in Z:\home\localhost\subdomain\application\views\update-index.php:15
2013-03-23 11:41:37 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\update-index.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 15, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Updates))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(124): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\update-index.php:15