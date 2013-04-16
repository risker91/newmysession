<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-21 13:27:23 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php:171
2012-11-21 13:27:23 --- DEBUG: #0 /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
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
2012-11-21 13:27:24 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php:171
2012-11-21 13:27:24 --- DEBUG: #0 /var/www/isit/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
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