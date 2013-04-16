<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-25 12:46:28 --- CRITICAL: Kohana_Exception [ 0 ]: The accept property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:46:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('accept', 1)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(106): Kohana_ORM->__set('accept', 1)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:47:03 --- CRITICAL: Kohana_Exception [ 0 ]: The acept property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:47:03 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('acept', 1)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(106): Kohana_ORM->__set('acept', 1)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:47:32 --- CRITICAL: Kohana_Exception [ 0 ]: The acept property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:47:32 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('acept', 1)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(106): Kohana_ORM->__set('acept', 1)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 12:53:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Elder.php [ 104 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:104
2013-01-25 12:53:51 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 104, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:104
2013-01-25 13:37:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:37:50 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(115): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:47:14 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:47:14 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(115): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:47:39 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 13:47:39 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(114): Kohana_ORM->__get('user')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 13:50:01 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:50:01 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(118): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:50:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:50:33 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(118): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 13:58:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\Controller\Elder.php [ 114 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 13:58:29 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(114): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 114, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 13:59:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$active ~ APPPATH\classes\Controller\Elder.php [ 114 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 13:59:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(114): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 114, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 14:00:13 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$active ~ APPPATH\classes\Controller\Elder.php [ 114 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 14:00:13 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(114): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 114, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:114
2013-01-25 14:08:31 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 14:08:31 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('username')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(116): Kohana_ORM->__get('username')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 14:11:28 --- CRITICAL: Kohana_Exception [ 0 ]: The active property does not exist in the Model_Classmate class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 14:11:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('active', 1)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(117): Kohana_ORM->__set('active', 1)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 14:12:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:12:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:15 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:46 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:46 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:49 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:13:49 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:14:06 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:14:06 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:14:08 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 14:14:08 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 16:01:57 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Role_user' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-25 16:01:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 16:13:17 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Invite::setStatus(), called in Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php on line 48 and defined ~ APPPATH\classes\Model\Invite.php [ 25 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Invite.php:25
2013-01-25 16:13:17 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Invite.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\test1.r...', 25, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(48): Model_Invite->setStatus('12', '???????????????...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Invite.php:25
2013-01-25 16:14:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'ruslan_risk1@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `profile_id`, `password`, `email`, `active`) VALUES ('vxn3xp', 38, 'dedf05105dcdf7300c74de73a684b6b15b86442be81f592d2f1598a050ed42ef', 'ruslan_risk1@mail.ru', 0) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:14:47 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Model\Classmate.php(201): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\application\classes\Controller\Invite.php(47): Model_Classmate->AddClassmate('????????????', '???????????????...', '22', 'vxn3xp', 'MiFZ3sRE', 'ruslan_risk1@ma...')
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Invite->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Invite))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:36:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT `user`.`id` AS `user:id`, `user`.`email` AS `user:email`, `user`.`username` AS `user:username`, `user`.`password` AS `user:password`, `user`.`logins` AS `user:logins`, `user`.`last_login` AS `user:last_login`, `user`.`profile_id` AS `user:profile_id`, `user`.`active` AS `user:active`, `invite`.`id` AS `id`, `invite`.`code` AS `code`, `invite`.`group_id` AS `group_id`, `invite`.`status` AS `status`, `invite`.`firstname` AS `firstname`, `invite`.`acept` AS `acept`, `invite`.`profile_id` AS `profile_id` FROM `invites` AS `invite` LEFT JOIN `users` AS `user` ON (`invite`.`id` = `user`.`profile_id`) WHERE `user_id` = '12' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:36:04 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(107): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:36:16 --- CRITICAL: Database_Exception [ 1052 ]: Column 'profile_id' in where clause is ambiguous [ SELECT `user`.`id` AS `user:id`, `user`.`email` AS `user:email`, `user`.`username` AS `user:username`, `user`.`password` AS `user:password`, `user`.`logins` AS `user:logins`, `user`.`last_login` AS `user:last_login`, `user`.`profile_id` AS `user:profile_id`, `user`.`active` AS `user:active`, `invite`.`id` AS `id`, `invite`.`code` AS `code`, `invite`.`group_id` AS `group_id`, `invite`.`status` AS `status`, `invite`.`firstname` AS `firstname`, `invite`.`acept` AS `acept`, `invite`.`profile_id` AS `profile_id` FROM `invites` AS `invite` LEFT JOIN `users` AS `user` ON (`invite`.`id` = `user`.`profile_id`) WHERE `profile_id` = '12' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:36:16 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(107): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:38:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: da ~ APPPATH\classes\Controller\Elder.php [ 109 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:38:41 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(109): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 109, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:39:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Controller\Elder.php [ 109 ] in :
2013-01-25 16:39:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 16:45:58 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 16:45:58 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(108): Kohana_ORM->find()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 16:47:03 --- CRITICAL: Database_Exception [ 1052 ]: Column 'profile_id' in where clause is ambiguous [ SELECT `user`.`id` AS `user:id`, `user`.`email` AS `user:email`, `user`.`username` AS `user:username`, `user`.`password` AS `user:password`, `user`.`logins` AS `user:logins`, `user`.`last_login` AS `user:last_login`, `user`.`profile_id` AS `user:profile_id`, `user`.`active` AS `user:active`, `invite`.`id` AS `id`, `invite`.`code` AS `code`, `invite`.`group_id` AS `group_id`, `invite`.`status` AS `status`, `invite`.`firstname` AS `firstname`, `invite`.`acept` AS `acept`, `invite`.`profile_id` AS `profile_id` FROM `invites` AS `invite` LEFT JOIN `users` AS `user` ON (`invite`.`id` = `user`.`profile_id`) WHERE `profile_id` = '12' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:47:03 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(107): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 16:50:54 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Elder.php [ 109 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:50:54 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(109): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 109, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:51:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH\classes\Controller\Elder.php [ 109 ] in :
2013-01-25 16:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 16:56:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\Controller\Elder.php [ 109 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:56:23 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 109, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:56:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Elder.php [ 109 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 16:56:32 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(109): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 109, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 17:01:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Elder.php [ 110 ] in :
2013-01-25 17:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 17:01:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Elder.php [ 110 ] in :
2013-01-25 17:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 17:01:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Elder.php [ 110 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:110
2013-01-25 17:01:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(110): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 110, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:110
2013-01-25 17:02:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Elder.php [ 109 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 17:02:13 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(109): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\test1.r...', 109, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:109
2013-01-25 17:02:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:02:39 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(108): Kohana_ORM->find()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:02:54 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:02:54 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(108): Kohana_ORM->find()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:02:59 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:02:59 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(108): Kohana_ORM->find()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:108
2013-01-25 17:40:01 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:40:01 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(130): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:40:26 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:40:26 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(130): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:42:10 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:42:10 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(130): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:42:58 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:42:58 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(130): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:45:44 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:45:44 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(131): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:47:24 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:47:24 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(131): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 17:51:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Rolesusers' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-01-25 17:51:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 19:01:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT `invite`.`id` AS `id`, `invite`.`code` AS `code`, `invite`.`group_id` AS `group_id`, `invite`.`status` AS `status`, `invite`.`firstname` AS `firstname`, `invite`.`acept` AS `acept`, `invite`.`profile_id` AS `profile_id` FROM `invites` AS `invite` WHERE `user_id` = '39' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:01:52 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `invite`...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(107): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:02:38 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'profile' in 'where clause' [ SELECT `invite`.`id` AS `id`, `invite`.`code` AS `code`, `invite`.`group_id` AS `group_id`, `invite`.`status` AS `status`, `invite`.`firstname` AS `firstname`, `invite`.`acept` AS `acept`, `invite`.`profile_id` AS `profile_id` FROM `invites` AS `invite` WHERE `profile` = '39' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:02:38 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `invite`...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(107): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:04:34 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:04:34 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(120): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:06:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:06:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:08:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\Controller\Elder.php [ 116 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:116
2013-01-25 19:08:34 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(116): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 116, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:116
2013-01-25 19:08:43 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '333-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (333, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:08:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:16:23 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:16:23 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(122): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:16:46 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Elder.php [ 119 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:119
2013-01-25 19:16:46 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(119): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 119, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:119
2013-01-25 19:16:58 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:16:58 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(122): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:20:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Rolesuser::execute() ~ APPPATH\classes\Controller\Elder.php [ 116 ] in :
2013-01-25 19:20:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 19:20:29 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:20:29 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:24 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:24 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:36 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:36 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:50 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:22:50 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:23:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'rolesuser.id' in 'where clause' [ SELECT `rolesuser`.`user_id` AS `user_id`, `rolesuser`.`role_id` AS `role_id` FROM `roles_users` AS `rolesuser` WHERE `rolesuser`.`id` = '14' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:23:33 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `rolesus...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('14')
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(116): Kohana_ORM::factory('Rolesuser', '14')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:31:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'rolesuser.id' in 'where clause' [ SELECT `rolesuser`.`user_id` AS `user_id`, `rolesuser`.`role_id` AS `role_id` FROM `roles_users` AS `rolesuser` WHERE `rolesuser`.`id` = '14' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:31:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `rolesus...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('14')
#5 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(116): Kohana_ORM::factory('Rolesuser', '14')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#9 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:31:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:31:53 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:32:11 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:32:11 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(122): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:34:32 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:34:32 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(124): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:36:04 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:36:04 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(124): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:36:58 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:36:58 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(124): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:37:09 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:37:09 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(125): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:37:21 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:37:21 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(125): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:38:33 --- CRITICAL: Kohana_Exception [ 0 ]: The rolesuser property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 19:38:33 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('rolesuser')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->__get('rolesuser')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 19:41:22 --- CRITICAL: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 19:41:22 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('role_id', 1)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(123): Kohana_ORM->__set('role_id', 1)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:699
2013-01-25 19:42:15 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 19:42:15 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(126): Kohana_ORM->save()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:1299
2013-01-25 19:48:14 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:116
2013-01-25 19:48:14 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(116): Kohana_ORM->find()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:116
2013-01-25 19:52:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:52:13 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(125): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:53:00 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:53:00 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(126): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:56:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 19:56:47 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(130): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 20:06:18 --- CRITICAL: Kohana_Exception [ 0 ]: The rolesuser property does not exist in the Model_Rolesuser class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 20:06:18 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('rolesuser')
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(127): Kohana_ORM->__get('rolesuser')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php:600
2013-01-25 20:06:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Rolesuser::is_loaded() ~ APPPATH\classes\Controller\Elder.php [ 127 ] in :
2013-01-25 20:06:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 20:08:34 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:120
2013-01-25 20:08:34 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(120): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:120
2013-01-25 20:09:43 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:09:43 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:09:45 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:09:45 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:09:59 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`role_id`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 20:09:59 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 20:12:28 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:12:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(121): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:121
2013-01-25 20:21:04 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '14-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('14', 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 20:21:04 --- DEBUG: #0 Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\subdomain\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(123): Kohana_ORM->save()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\modules\database\classes\Kohana\Database\Query.php:251
2013-01-25 20:21:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::apdate() ~ APPPATH\classes\Controller\Elder.php [ 118 ] in :
2013-01-25 20:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-25 20:21:47 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123
2013-01-25 20:21:47 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(123): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123
2013-01-25 20:22:04 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123
2013-01-25 20:22:04 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(123): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123
2013-01-25 20:22:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update rolesuser model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123
2013-01-25 20:22:07 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php(123): Kohana_ORM->update()
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Elder->action_GenerateInvite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Elder))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Elder.php:123