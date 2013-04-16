<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-14 11:17:40 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-14 11:17:40 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('news')
#3 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\subdomain\application\classes\All.php(35): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(69): All->before()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#13 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL.php:171
2013-01-14 12:59:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-14 12:59:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:02:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-14 13:02:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:02:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-14 13:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:04:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-14 13:04:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:04:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-14 13:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:15:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\Controller\Zayavka.php [ 38 ] in :
2013-01-14 13:15:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-14 13:16:49 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '47-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (47, 1), (47, 4) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-14 13:16:49 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(104): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 50)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-14 13:17:22 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '48-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (48, 1), (48, 4) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-14 13:17:22 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(104): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 51)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-14 13:20:08 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'riskernv86@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `profile_id`) VALUES ('eybIjN', 'd87f571ac5a7d9846725ce3d5a787c872c34cb113608e36227deb808b987e528', 'riskernv86@gmail.com', 53) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-14 13:20:08 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(85): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 53)
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251