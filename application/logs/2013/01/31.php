<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-31 12:35:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: one ~ APPPATH\classes\Model\Item.php [ 84 ] in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-31 12:35:36 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Model\Item.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 84, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Ajax.php(129): Model_Item->getItemsCourse('22', '')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_getItems2()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\subdomain\application\classes\Model\Item.php:84
2013-01-31 19:37:34 --- CRITICAL: ErrorException [ 2 ]: filesize() [function.filesize]: stat failed for /uploads/lesson/1392996034.docx ~ APPPATH\classes\Controller\Files.php [ 20 ] in :
2013-01-31 19:37:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize() [<a ...', 'Z:\home\test1.r...', 20, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(20): filesize('/uploads/lesson...')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in :
2013-01-31 19:39:07 --- CRITICAL: ErrorException [ 2 ]: fopen(/uploads/1392996034.docx) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Files.php [ 31 ] in :
2013-01-31 19:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/uploads/...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(31): fopen('/uploads/139299...', 'r')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in :
2013-01-31 19:39:11 --- CRITICAL: ErrorException [ 2 ]: fopen(/uploads/1392996034.docx) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Files.php [ 31 ] in :
2013-01-31 19:39:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/uploads/...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(31): fopen('/uploads/139299...', 'r')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in :
2013-01-31 19:39:24 --- CRITICAL: ErrorException [ 2 ]: fopen(/uploads/1392996034.docx) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Files.php [ 31 ] in :
2013-01-31 19:39:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/uploads/...', 'Z:\home\test1.r...', 31, Array)
#1 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(31): fopen('/uploads/139299...', 'r')
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#8 {main} in :
2013-01-31 19:45:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\Files.php [ 17 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17
2013-01-31 19:45:09 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17
2013-01-31 19:45:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\Files.php [ 17 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17
2013-01-31 19:45:28 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17
2013-01-31 19:45:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\Controller\Files.php [ 17 ] in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17
2013-01-31 19:45:42 --- DEBUG: #0 Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 17, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Controller.php(84): Controller_Files->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client\Internal.php(105): ReflectionMethod->invoke(Object(Controller_Files))
#4 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\subdomain\application\classes\Controller\Files.php:17