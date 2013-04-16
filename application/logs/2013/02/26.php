<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-26 10:16:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 146 ] in Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php:146
2013-02-26 10:16:35 --- DEBUG: #0 Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\localho...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\localhost\subdomain\application\classes\Controller\Settings.php(42): Kohana_Validation->check()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Settings->action_ChangeAvatar()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php:146
2013-02-26 10:29:19 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH\classes\Kohana\Upload.php [ 146 ] in Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php:146
2013-02-26 10:29:19 --- DEBUG: #0 Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\localho...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Validation.php(410): ReflectionMethod->invokeArgs(NULL, Array)
#3 Z:\home\localhost\subdomain\application\classes\Controller\Settings.php(42): Kohana_Validation->check()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Settings->action_ChangeAvatar()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Settings))
#7 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\subdomain\system\classes\Kohana\Upload.php:146
2013-02-26 10:30:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\localhost\subdomain\application\classes\Model\Item.php:84
2013-02-26 10:30:29 --- DEBUG: #0 Z:\home\localhost\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 84, Array)
#1 Z:\home\localhost\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('20', '')
#2 Z:\home\localhost\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\localhost\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\subdomain\application\classes\Model\Item.php:84