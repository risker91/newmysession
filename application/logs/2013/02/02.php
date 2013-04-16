<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-02 10:18:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 10:18:06 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 10:26:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\views\session-choose-semestr.php [ 50 ] in Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php:50
2013-02-02 10:26:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 50, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Sess))
#11 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php:50
2013-02-02 10:26:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\views\session-choose-semestr.php [ 50 ] in Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php:50
2013-02-02 10:26:59 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 50, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Sess))
#11 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\subdomain\application\views\session-choose-semestr.php:50
2013-02-02 10:37:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 10:37:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 10:59:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 10:59:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:00:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:00:14 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:00:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:00:32 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:02:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 11:02:21 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 14:42:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 14:42:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 14:42:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 14:42:57 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 15:48:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 15:48:18 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 15:48:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 15:48:22 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 18:23:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 18:23:26 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 18:23:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 18:23:29 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 21:13:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 21:13:08 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 21:13:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-02 21:13:14 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84