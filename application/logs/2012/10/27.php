<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-27 01:18:11 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'riskernv86@gmail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `profile_id`) VALUES ('tjPiPY', '7e5146285f30ef650945a0047073cfe17490fb81c9f8c63cee770ba33e4f3be7', 'riskernv86@gmail.ru', 25) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2012-10-27 01:18:11 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\myuser.php(85): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\application\classes\Model\adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 25)
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\adminius.php(42): Model_Adminius->AcceptNewGroup('8')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Adminius->action_AcceptGroup()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminius))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2012-10-27 01:32:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2012-10-27 01:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-10-27 01:34:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_SmtpTransport' not found ~ MODPATH\email\classes\Email\Core.php [ 37 ] in :
2012-10-27 01:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-10-27 01:40:42 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 01:40:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\test1.r...', 4, Array)
#1 Z:\home\test1.ru\subdomain\modules\email\init.php(4): include()
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Core.php(602): require_once('Z:\home\test1.r...')
#3 Z:\home\test1.ru\subdomain\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\test1.ru\subdomain\index.php(102): require('Z:\home\test1.r...')
#5 {main} in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 01:40:43 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 01:40:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\test1.r...', 4, Array)
#1 Z:\home\test1.ru\subdomain\modules\email\init.php(4): include()
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Core.php(602): require_once('Z:\home\test1.r...')
#3 Z:\home\test1.ru\subdomain\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\test1.ru\subdomain\index.php(102): require('Z:\home\test1.r...')
#5 {main} in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 01:40:43 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 01:40:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\test1.r...', 4, Array)
#1 Z:\home\test1.ru\subdomain\modules\email\init.php(4): include()
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Core.php(602): require_once('Z:\home\test1.r...')
#3 Z:\home\test1.ru\subdomain\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\test1.ru\subdomain\index.php(102): require('Z:\home\test1.r...')
#5 {main} in Z:\home\test1.ru\subdomain\modules\email\init.php:4
2012-10-27 02:49:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\elder.php [ 141 ] in :
2012-10-27 02:49:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :