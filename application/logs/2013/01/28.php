<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-28 13:51:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Ajax.php [ 27 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:27
2013-01-28 13:51:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 27, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_FindGroup()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:27
2013-01-28 18:26:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Mygroup' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in :
2013-01-28 18:26:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:27:27 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Files.php [ 10 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:10
2013-01-28 18:27:27 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 10, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:10
2013-01-28 18:27:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Mygroup' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in :
2013-01-28 18:27:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:28:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Mygroup' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in :
2013-01-28 18:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:29:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Session_Mygroup' not found ~ SYSPATH\classes\Kohana\Session.php [ 54 ] in :
2013-01-28 18:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:33:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: semestr ~ APPPATH\classes\Controller\Ajax.php [ 101 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:101
2013-01-28 18:33:19 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 101, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:101
2013-01-28 18:34:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 81 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:34:00 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 81, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(101): Model_Item->getItemsCourse('', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:34:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 81 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:34:01 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 81, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(101): Model_Item->getItemsCourse('', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:35:52 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(5, 6)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(5, 6)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:35:52 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '3')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:35:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(3, 4)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(3, 4)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:35:55 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '2')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:36:40 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(7, 8)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(7, 8)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:36:40 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:36:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(9, 10)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(9, 10)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:36:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '5')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(7, 8)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(7, 8)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:20 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(5, 6)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(5, 6)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:22 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '3')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:43 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(9, 10)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(9, 10)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '5')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:45 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(7, 8)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(7, 8)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(5, 6)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(5, 6)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:47 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '3')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(7, 8)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(7, 8)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:54 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(5, 6)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(5, 6)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:56 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '3')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(5, 6)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(5, 6)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:37:58 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '3')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:38:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(7, 8)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '' AND `semestr` IN '(7, 8)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:38:09 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:38:45 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(3, 4)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '22' AND `semestr` IN '(3, 4)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:38:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '2')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:41:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 81 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:41:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 81, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:81
2013-01-28 18:42:36 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,2)'' at line 1 [ SELECT `item`.`id` AS `id`, `item`.`title` AS `title`, `item`.`semestr` AS `semestr`, `item`.`group_id` AS `group_id`, `item`.`form` AS `form`, `item`.`prepod` AS `prepod` FROM `items` AS `item` WHERE `group_id` = '22' AND `semestr` IN '(1,2)' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:42:36 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `item`.`...', 'Model_Item', Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_ORM->find_all()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '4')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:45:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::execute() ~ APPPATH\classes\Model\Item.php [ 83 ] in :
2013-01-28 18:45:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:46:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::execute() ~ APPPATH\classes\Model\Item.php [ 83 ] in :
2013-01-28 18:46:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:47:46 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `users`.`active` IN (9, 10)' at line 1 [ SELECT `classmates`.`firstname`, `classmates`.`name`, `classmates`.`id` WHERE `users`.`active` IN (9, 10) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:47:46 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `classma...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(82): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '5')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:48:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::execute() ~ APPPATH\classes\Model\Item.php [ 83 ] in :
2013-01-28 18:48:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:49:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::execute() ~ APPPATH\classes\Model\Item.php [ 83 ] in :
2013-01-28 18:49:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:49:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\Item.php [ 92 ] in :
2013-01-28 18:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-28 18:49:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `group_id` = '22' AND `semestr` IN (9, 10)' at line 1 [ SELECT `title,id` WHERE `group_id` = '22' AND `semestr` IN (9, 10) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:49:39 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `title,i...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(91): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '5')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:50:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `group_id` = '22' AND `semestr` IN (1, 2)' at line 1 [ SELECT `title,id` WHERE `group_id` = '22' AND `semestr` IN (1, 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:50:26 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `title,i...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(91): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '5')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:50:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `group_id` = '22' AND `semestr` IN ('1', '2')' at line 1 [ SELECT `title,id` WHERE `group_id` = '22' AND `semestr` IN ('1', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:50:44 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `title,i...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(91): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '5')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:53:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `group_id` = '22' AND `semestr` IN (1, 2)' at line 1 [ SELECT `title,id` WHERE `group_id` = '22' AND `semestr` IN (1, 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 18:53:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `title,i...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(91): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(102): Model_Item->getItemsCourse('22', '5')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-28 19:33:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:33:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(122): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:47:05 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:47:05 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(103): Kohana_ORM->__get('title')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getFiles()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:47:55 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:47:55 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(103): Kohana_ORM->__get('title')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getFiles()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:49:22 --- CRITICAL: Kohana_Exception [ 0 ]: The desc property does not exist in the Model_File class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:49:22 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('desc')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(103): Kohana_ORM->__get('desc')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getFiles()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-28 19:49:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Ajax.php [ 107 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:107
2013-01-28 19:49:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 107, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:107
2013-01-28 19:50:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Ajax.php [ 107 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:107
2013-01-28 19:50:09 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 107, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getFiles()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php:107
2013-01-28 19:52:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:52:14 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(122): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:53:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:53:54 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(122): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:59:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-28 19:59:51 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(122): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84