<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-20 00:02:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Answer' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-20 00:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 00:03:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'question_id' in 'where clause' [ SELECT `answer`.`id` AS `id`, `answer`.`answer` AS `answer`, `answer`.`quest_id` AS `quest_id`, `answer`.`author_id` AS `author_id` FROM `answers` AS `answer` WHERE `question_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 00:03:38 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `answer`...', 'Model_Answer', Array)
#1 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\localhost\newmysession\application\classes\Model\Item.php(34): Kohana_ORM->find_all()
#4 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(101): Model_Item->show_answers('1')
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_GetAns()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-04-20 00:05:19 --- CRITICAL: Kohana_Exception [ 0 ]: The desc property does not exist in the Model_Answer class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php:600
2013-04-20 00:05:19 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('desc')
#1 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(105): Kohana_ORM->__get('desc')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_GetAns()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php:600
2013-04-20 00:21:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Msession' not found ~ APPPATH\classes\Controller\session.php [ 46 ] in :
2013-04-20 00:21:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 00:21:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Msession' not found ~ APPPATH\classes\Controller\session.php [ 46 ] in :
2013-04-20 00:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 00:22:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Msession' not found ~ APPPATH\classes\Controller\session.php [ 46 ] in :
2013-04-20 00:22:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 10:43:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Msession' not found ~ APPPATH\classes\Controller\session.php [ 46 ] in :
2013-04-20 10:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 17:52:35 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Model\Item.php [ 41 ] in Z:\home\localhost\newmysession\application\classes\Model\Item.php:41
2013-04-20 17:52:35 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Item.php(41): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\localho...', 41, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(59): Model_Item->addAnswer('1', '???? ??????????...', '24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Item.php:41
2013-04-20 17:53:41 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Model\Item.php [ 42 ] in Z:\home\localhost\newmysession\application\classes\Model\Item.php:42
2013-04-20 17:53:41 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Model\Item.php(42): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\localho...', 42, Array)
#1 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(59): Model_Item->addAnswer('1', '???? ???????? ?...', '24415549')
#2 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\newmysession\application\classes\Model\Item.php:42
2013-04-20 17:54:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::idquest() ~ APPPATH\classes\Controller\Ajax.php [ 64 ] in :
2013-04-20 17:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-20 17:55:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\classes\Controller\Ajax.php [ 65 ] in Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php:65
2013-04-20 17:55:32 --- DEBUG: #0 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 65, Array)
#1 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php:65
2013-04-20 20:32:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: curr_uid ~ APPPATH\views\session-vision.php [ 186 ] in Z:\home\localhost\newmysession\application\views\session-vision.php:186
2013-04-20 20:32:12 --- DEBUG: #0 Z:\home\localhost\newmysession\application\views\session-vision.php(186): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 186, Array)
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