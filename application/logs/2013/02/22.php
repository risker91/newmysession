<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-22 21:23:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatar_url ~ APPPATH\views\vgroup.php [ 17 ] in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:23:37 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\vgroup.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:24:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatar_url ~ APPPATH\views\vgroup.php [ 17 ] in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:24:11 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\vgroup.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:24:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: avatar_url ~ APPPATH\views\vgroup.php [ 17 ] in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:24:41 --- DEBUG: #0 Z:\home\localhost\subdomain\application\views\vgroup.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\localhost\subdomain\application\views\main-group.php(55): Kohana_View->__toString()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\localho...')
#6 Z:\home\localhost\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#11 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\subdomain\application\views\vgroup.php:17
2013-02-22 21:25:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'classmate.avatar_url' in 'field list' [ SELECT `classmates`.`firstname`, `classmates`.`name`, `classmates`.`id`, `classmate`.`avatar_url` FROM `classmates` JOIN `users` ON (`classmates`.`id` = `users`.`profile_id`) WHERE `users`.`active` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-02-22 21:25:45 --- DEBUG: #0 Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `classma...', false, Array)
#1 Z:\home\localhost\subdomain\application\classes\Model\Classmate.php(135): Kohana_Database_Query->execute()
#2 Z:\home\localhost\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#3 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\subdomain\modules\database\classes\Kohana\Database\Query.php:251