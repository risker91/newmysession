<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-24 12:57:15 --- CRITICAL: Kohana_Exception [ 0 ]: The active property does not exist in the Model_MyUser class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-24 12:57:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('active', 0)
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(188): Kohana_ORM->__set('active', 0)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(43): Model_Classmate->AddClassmate('??????????????', '????????', NULL, 'ruslan_risk1@ma...', 'gzfpjbNH', 'ruslan_risk1@ma...')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-24 13:03:16 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-01-24 13:03:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test1.r...', 33, Array)
#1 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #120, 'group_id')
#2 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('group_id')
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(36): Kohana_Database_Result->offsetGet('group_id')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in :
2013-01-24 13:03:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Invites' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-24 13:03:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-24 13:04:42 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-01-24 13:04:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test1.r...', 33, Array)
#1 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #120, 'group_id')
#2 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('group_id')
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(36): Kohana_Database_Result->offsetGet('group_id')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in :
2013-01-24 13:04:58 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-01-24 13:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\test1.r...', 33, Array)
#1 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #120, 'group_id')
#2 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('group_id')
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(36): Kohana_Database_Result->offsetGet('group_id')
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in :
2013-01-24 13:05:07 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Invite as array ~ APPPATH\classes\Controller\Invite.php [ 36 ] in :
2013-01-24 13:05:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-24 16:57:17 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-24 16:57:17 --- DEBUG: #0 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-24 16:58:04 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-24 16:58:04 --- DEBUG: #0 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-24 18:03:33 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Classmate.php [ 94 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:03:33 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 94, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:03:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Classmate.php [ 94 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:03:51 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 94, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:03:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\Model\Classmate.php [ 94 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:03:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 94, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:04:02 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-24 18:04:02 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_ORM->__get('user')
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-24 18:13:02 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-24 18:13:02 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('users')
#1 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_ORM->__get('users')
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-24 18:19:03 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:03 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:27 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:27 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:28 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:41 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:50 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:50 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:51 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:19:51 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:21:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\Model\Classmate.php [ 94 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:21:06 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(94): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 94, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:94
2013-01-24 18:21:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:21:32 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:21:33 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:21:33 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:22:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Classmate.php [ 96 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96
2013-01-24 18:22:18 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(96): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 96, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Group.php(24): Model_Classmate->ShowClassmates('22')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Group->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Group))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php:96