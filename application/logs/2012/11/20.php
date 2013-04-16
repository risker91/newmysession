<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-20 07:05:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/risk.php [ 7 ] in :
2012-11-20 07:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 07:21:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'SESSION' not found ~ APPPATH/classes/Controller/Ajax.php [ 15 ] in :
2012-11-20 07:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 07:22:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'SESSION' not found ~ APPPATH/classes/Controller/Ajax.php [ 15 ] in :
2012-11-20 07:22:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 07:23:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'SESSION' not found ~ APPPATH/classes/Controller/Ajax.php [ 15 ] in :
2012-11-20 07:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 07:24:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:24:06 --- DEBUG: #0 /var/www/application/classes/Model/Item.php(122): Kohana_ORM->find()
#1 /var/www/application/classes/Controller/Ajax.php(28): Model_Item->idquest('22')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:26:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:26:59 --- DEBUG: #0 /var/www/application/classes/Model/Item.php(122): Kohana_ORM->find()
#1 /var/www/application/classes/Controller/Ajax.php(28): Model_Item->idquest('22')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:27:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:27:44 --- DEBUG: #0 /var/www/application/classes/Model/Item.php(122): Kohana_ORM->find()
#1 /var/www/application/classes/Controller/Ajax.php(28): Model_Item->idquest('22')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:28:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 988 ] in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:28:08 --- DEBUG: #0 /var/www/application/classes/Model/Item.php(122): Kohana_ORM->find_all()
#1 /var/www/application/classes/Controller/Ajax.php(28): Model_Item->idquest('22')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_SendAns()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Item.php:122
2012-11-20 07:33:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 963 ] in /var/www/application/classes/Model/Msession.php:104
2012-11-20 07:33:12 --- DEBUG: #0 /var/www/application/classes/Model/Msession.php(104): Kohana_ORM->find()
#1 /var/www/application/classes/Controller/Sess.php(27): Model_Msession->loadQuestion('23')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Sess->action_question()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Sess))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(122): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Msession.php:104
2012-11-20 18:52:59 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php:171
2012-11-20 18:52:59 --- DEBUG: #0 /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/isit/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('news')
#3 /var/www/isit/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /var/www/isit/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /var/www/isit/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/isit/application/classes/All.php(35): Kohana_ORM->__construct()
#7 /var/www/isit/system/classes/Kohana/Controller.php(69): All->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/isit/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/isit/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/isit/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/isit/index.php(122): Kohana_Request->execute()
#13 {main} in /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php:171