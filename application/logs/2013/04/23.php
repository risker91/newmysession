<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-23 20:53:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '24415549' for key 'PRIMARY' [ INSERT INTO `users` (`id`, `first_name`, `last_name`, `avatar_big`, `avatar_small`, `hash`) VALUES ('24415549', 'Руслан', 'Сабиров', 'http://cs312424.vk.me/v312424549/c04/muy1m0GTnMw.jpg', 'http://cs312424.vk.me/v312424549/c08/feQabFOnjv8.jpg', '1aba89d6ee95903d261420d7181cfcd4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 20:53:53 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\localhost\newmysession\application\classes\Model\User.php(15): Kohana_ORM->save()
#4 Z:\home\localhost\newmysession\application\classes\Controller\Auth.php(37): Model_User->RegUser('24415549', '????????????', '??????????????', 'http://cs312424...', 'http://cs312424...', '1aba89d6ee95903...')
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Auth->action_vk()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 21:17:16 --- CRITICAL: ErrorException [ 2 ]: filesize() expects parameter 1 to be string, resource given ~ APPPATH\classes\Controller\Session.php [ 176 ] in :
2013-04-23 21:17:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize() expe...', 'Z:\home\localho...', 176, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\Session.php(176): filesize(Resource id #105)
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_additem()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in :