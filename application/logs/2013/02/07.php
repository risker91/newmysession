<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-07 20:43:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-02-07 20:43:27 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(131): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84