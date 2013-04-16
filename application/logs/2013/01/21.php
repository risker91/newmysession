<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-21 15:23:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Classmate.php [ 65 ] in :
2013-01-21 15:23:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-21 19:28:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 104 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-01-21 19:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Route.php(420): preg_match('#^group(?P<grou...', 'group22/elder/a...', NULL)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#5 {main} in :
2013-01-21 19:28:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 104 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-01-21 19:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\test1.r...', 420, Array)
#1 Z:\home\test1.ru\subdomain\system\classes\Kohana\Route.php(420): preg_match('#^group(?P<grou...', 'favicon.ico', NULL)
#2 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 Z:\home\test1.ru\subdomain\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\test1.ru\subdomain\index.php(122): Kohana_Request->execute()
#5 {main} in :