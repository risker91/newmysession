<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-27 19:34:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'service.SESSION_NOT_EXIST' doesn't exist [ INSERT INTO `followers` (`user_id`, `session_id`) VALUES ('24415549', '14') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-05-27 19:34:03 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fo...', false, Array)
#1 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\localhost\newmysession\application\classes\Model\Session.php(26): Kohana_ORM->save()
#4 Z:\home\localhost\newmysession\application\classes\Controller\Session.php(128): Model_Session->enter_in('24415549', '14')
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_enter()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-05-27 19:34:10 --- CRITICAL: Database_Exception [ 1146 ]: Table 'service.SESSION_NOT_EXIST' doesn't exist [ INSERT INTO `followers` (`user_id`, `session_id`) VALUES ('24415549', '14') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-05-27 19:34:10 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fo...', false, Array)
#1 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\localhost\newmysession\application\classes\Model\Session.php(26): Kohana_ORM->save()
#4 Z:\home\localhost\newmysession\application\classes\Controller\Session.php(128): Model_Session->enter_in('24415549', '14')
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Session->action_enter()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Session))
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251