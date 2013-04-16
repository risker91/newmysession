<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-22 09:56:05 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome-invex could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-22 09:56:05 --- DEBUG: #0 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome-invex')
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome-invex', NULL)
#2 Z:\home\test1.ru\subdomain\application\classes\Controller\Welcome.php(18): Kohana_View::factory('welcome-invex')
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php:137
2013-01-22 09:56:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: con ~ APPPATH\views\welcome.php [ 50 ] in Z:\home\test1.ru\subdomain\application\views\welcome.php:50
2013-01-22 09:56:12 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\views\welcome.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 50, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\subdomain\application\views\welcome.php:50