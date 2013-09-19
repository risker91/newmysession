<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-23 20:13:52 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `answers` (`answer`, `mini`, `quest_id`, `author_id`) VALUES ('Последовательное соединение в структурной схеме надежности – это такое соединение, при котором отказ хотя бы одного элемента при- водит к отказу всей системы в цело', 'Последовательное соединение в структурной схеме надежности – это такое соединен', '79', '24415549') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-05-23 20:13:52 --- DEBUG: #0 Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `an...', false, Array)
#1 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\localhost\newmysession\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\localhost\newmysession\application\classes\Model\Item.php(46): Kohana_ORM->save()
#4 Z:\home\localhost\newmysession\application\classes\Controller\Ajax.php(90): Model_Item->addAnswer('79', '???????????????...', '24415549')
#5 Z:\home\localhost\newmysession\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 Z:\home\localhost\newmysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\newmysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\newmysession\index.php(124): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\newmysession\modules\database\classes\Kohana\Database\Query.php:251
2013-05-23 20:14:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Msession' not found ~ APPPATH\classes\Controller\Session.php [ 61 ] in :
2013-05-23 20:14:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :