<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-03 10:24:17 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\elder-add-result.php [ 14 ] in Z:\home\test1.ru\subdomain\application\views\elder-add-result.php:14
2012-11-03 10:24:17 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\views\elder-add-result.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\test1.r...', 14, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\subdomain\application\views\basic.php(64): Kohana_View->__toString()
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Elder))
#11 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\subdomain\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\subdomain\application\views\elder-add-result.php:14