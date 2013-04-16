<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-16 10:18:26 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'riskernv86@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `profile_id`) VALUES ('XVeG1C', '52f409ab409803552b89c89ace2fd60a86697417fecaf1f7bfc219c2b66d211e', 'riskernv86@gmail.com', 2) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:18:26 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(85): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 2)
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:19:23 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1, 1), (1, 4) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:19:23 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(104): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 3)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: hostname ~ MODPATH\email\classes\Email\Core.php [ 37 ] in Z:\home\test1.ru\subdomain\modules\email\classes\Email\Core.php:37
2013-01-16 10:26:29 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\email\classes\Email\Core.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 37, Array)
#1 Z:\home\test1.ru\subdomain\modules\email\classes\Email\Core.php(80): Email_Core::connect()
#2 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(69): Email_Core::send('riskernv86@gmai...', 'isit_project@ma...', '???????? ??????...', '???? ??????????...', true)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\email\classes\Email\Core.php:37
2013-01-16 10:33:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\config\email.php [ 36 ] in :
2013-01-16 10:33:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-16 10:33:21 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'riskernv86@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `profile_id`) VALUES ('hDsReg', '163977b5bf5e3d8e5792c5d764fe6d2ca9f26d8ccb0bf5e16faab79ed4cdb6c7', 'riskernv86@gmail.com', 11) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:33:21 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\MyUser.php(85): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\application\classes\Model\Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 11)
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-16 10:49:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\email.php [ 43 ] in :
2013-01-16 10:49:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :