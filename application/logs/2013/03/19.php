<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 18:12:47 --- CRITICAL: Kohana_Exception [ 0 ]: The action property does not exist in the Model_Wall class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-03-19 18:12:47 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('action')
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(23): Kohana_ORM->__get('action')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Risk.php(43): Model_Wall->showAction('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Risk->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-03-19 18:15:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\views\risk.php [ 10 ] in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:15:47 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:16:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: text ~ APPPATH\views\risk.php [ 10 ] in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:16:38 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:17:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: msg ~ APPPATH\views\risk.php [ 10 ] in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:17:16 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:17:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: msg ~ APPPATH\views\risk.php [ 10 ] in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 18:17:46 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\risk.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 10, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Risk))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\risk.php:10
2013-03-19 22:51:31 --- CRITICAL: Kohana_Exception [ 0 ]: The action property does not exist in the Model_Wall class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-03-19 22:51:31 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('action', '???????????????...')
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(10): Kohana_ORM->__set('action', '???????????????...')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(8): Model_Wall->saveAction('???????????????...', '22:51 19-03-13', '22')
#3 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(57): Controller_Ajax->goLog1('???????????????...', '22:51 19-03-13', '22')
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-03-19 22:52:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 83 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-19 22:52:32 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 83, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(140): Model_Item->getItemsCourse('22', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:83
2013-03-19 23:00:37 --- CRITICAL: Kohana_Exception [ 0 ]: The action property does not exist in the Model_Wall class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-03-19 23:00:37 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('action', '???????????????...')
#1 Z:\home\localhost\subdomain\application\classes\Model\Wall.php(10): Kohana_ORM->__set('action', '???????????????...')
#2 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(8): Model_Wall->saveAction('???????????????...', '23:00 19-03-13', '22')
#3 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(57): Controller_Ajax->goLog1('???????????????...', '23:00 19-03-13', '22')
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_SendAns()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\subdomain\modules\orm\classes\Kohana\ORM.php:699