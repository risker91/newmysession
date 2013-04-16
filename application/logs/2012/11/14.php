<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-14 08:03:01 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:171
2012-11-14 08:03:01 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('groups')
#3 /var/www/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/application/classes/All.php(21): Kohana_ORM::factory('group', NULL)
#8 /var/www/system/classes/Kohana/Controller.php(69): All->before()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:171
2012-11-14 08:03:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_News' not found ~ APPPATH/classes/All.php [ 30 ] in :
2012-11-14 08:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:04:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:04:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:05:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:05:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:06:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:10:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:10:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:11:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:11:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:13:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:15:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2012-11-14 08:15:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:16:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 38 ] in :
2012-11-14 08:16:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:16:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 38 ] in :
2012-11-14 08:16:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:16:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 38 ] in :
2012-11-14 08:16:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:16:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 38 ] in :
2012-11-14 08:16:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:17:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Auth' (T_STRING) ~ MODPATH/auth/classes/Kohana/Auth.php [ 38 ] in :
2012-11-14 08:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:17:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:18:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_AuthOrm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:18:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:18:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:18:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:18:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:18:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:20:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:20:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:21:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:22:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:22:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:23:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:24:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:25:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:25:29 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Auth ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:25:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:25:38 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_Auth ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:27:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_User_orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:27:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:27:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:29:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:29:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:30:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 39 ] in :
2012-11-14 08:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:31:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:32:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 08:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:32:33 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'isit.auth_users' doesn't exist [ SHOW FULL COLUMNS FROM `auth_users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:358
2012-11-14 08:32:33 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('auth_users')
#2 /var/www/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/modules/auth/classes/Kohana/Auth.php(40): Kohana_ORM->__construct(Object(Config_Group))
#6 /var/www/application/classes/All.php(77): Kohana_Auth::instance()
#7 /var/www/system/classes/Kohana/Controller.php(69): All->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:358
2012-11-14 08:32:34 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'isit.auth_users' doesn't exist [ SHOW FULL COLUMNS FROM `auth_users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:358
2012-11-14 08:32:34 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('auth_users')
#2 /var/www/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/modules/auth/classes/Kohana/Auth.php(40): Kohana_ORM->__construct(Object(Config_Group))
#6 /var/www/application/classes/All.php(77): Kohana_Auth::instance()
#7 /var/www/system/classes/Kohana/Controller.php(69): All->before()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:358
2012-11-14 08:34:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:34:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:35:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 40 ] in :
2012-11-14 08:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:38:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:38:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:39:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:40:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:40:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:41:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:41:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:42:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:44:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:44:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:45:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:49:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:49:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:50:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 41 ] in :
2012-11-14 08:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:50:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Welcome::request() ~ APPPATH/classes/All.php [ 95 ] in :
2012-11-14 08:50:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:51:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_City' not found ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in :
2012-11-14 08:51:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 08:51:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_City' not found ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in :
2012-11-14 08:51:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:42:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_group' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 09:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:43:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 09:43:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:48:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: empty ~ APPPATH/classes/Controller/Zayavka.php [ 27 ] in /var/www/application/classes/Controller/Zayavka.php:27
2012-11-14 09:48:29 --- DEBUG: #0 /var/www/application/classes/Controller/Zayavka.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 27, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Zayavka->action_addzayavka()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Zayavka))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(122): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Zayavka.php:27
2012-11-14 09:53:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_MyUser' not found ~ APPPATH/classes/Model/Adminius.php [ 11 ] in :
2012-11-14 09:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:55:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Adminius' not found ~ APPPATH/classes/Controller/Adminius.php [ 26 ] in :
2012-11-14 09:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:55:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Adminius' not found ~ APPPATH/classes/Controller/Adminius.php [ 26 ] in :
2012-11-14 09:55:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:55:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Adminius' not found ~ APPPATH/classes/Controller/Adminius.php [ 26 ] in :
2012-11-14 09:55:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:56:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Reg' not found ~ APPPATH/classes/Controller/Adminius.php [ 28 ] in :
2012-11-14 09:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:56:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_MyUser' not found ~ APPPATH/classes/Model/Adminius.php [ 11 ] in :
2012-11-14 09:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:57:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_reg' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2012-11-14 09:57:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:58:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Univer' not found ~ APPPATH/classes/Model/Adminius.php [ 23 ] in :
2012-11-14 09:58:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:59:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Rolesuser' not found ~ APPPATH/classes/Model/MyUser.php [ 63 ] in :
2012-11-14 09:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 09:59:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_RolesUser' not found ~ APPPATH/classes/Model/MyUser.php [ 63 ] in :
2012-11-14 09:59:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 10:00:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Http_Exception_408' not found ~ MODPATH/email/classes/Email/Core.php [ 143 ] in :
2012-11-14 10:00:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-14 10:00:04 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'riskernv86@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `profile_id`) VALUES ('31HVTt', '66d9d64d1ed07af336356689bce3ccaa6abf403f7d7b692f6fea05cf651bdbea', 'riskernv86@gmail.com', 53) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2012-11-14 10:00:04 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Model/MyUser.php(85): Kohana_ORM->save()
#4 /var/www/application/classes/Model/Adminius.php(58): Model_MyUser->reg('riskernv86@gmai...', 53)
#5 /var/www/application/classes/Controller/Adminius.php(42): Model_Adminius->AcceptNewGroup('14')
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Adminius->action_AcceptGroup()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(105): ReflectionMethod->invoke(Object(Controller_Adminius))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(122): Kohana_Request->execute()
#12 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2012-11-14 10:00:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Reg' not found ~ APPPATH/classes/Controller/Adminius.php [ 13 ] in :
2012-11-14 10:00:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :