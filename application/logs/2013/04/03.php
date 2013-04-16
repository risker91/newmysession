<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-03 09:42:21 --- CRITICAL: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\classes\Controller\Test.php [ 51 ] in :
2013-04-03 09:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'Z:\home\localho...', 51, Array)
#1 Z:\home\localhost\mysession\application\classes\Controller\Test.php(51): split()
#2 Z:\home\localhost\mysession\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\mysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Test))
#5 Z:\home\localhost\mysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\mysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\mysession\index.php(124): Kohana_Request->execute()
#8 {main} in :
2013-04-03 10:18:43 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be assigned by reference ~ APPPATH\classes\Controller\Test.php [ 29 ] in Z:\home\localhost\mysession\application\classes\Controller\Test.php:29
2013-04-03 10:18:43 --- DEBUG: #0 Z:\home\localhost\mysession\application\classes\Controller\Test.php(29): Kohana_Core::error_handler(2048, 'Only variables ...', 'Z:\home\localho...', 29, Array)
#1 Z:\home\localhost\mysession\application\classes\Controller\Test.php(63): Controller_Test->check_word('??????', '3', '??????')
#2 Z:\home\localhost\mysession\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\mysession\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Test))
#5 Z:\home\localhost\mysession\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\mysession\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\mysession\index.php(124): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\mysession\application\classes\Controller\Test.php:29
2013-04-03 10:48:37 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Test.php [ 7 ] in :
2013-04-03 10:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :