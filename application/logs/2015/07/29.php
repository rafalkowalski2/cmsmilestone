<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-29 06:24:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:24:02 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/application/classes/Controller/User.php(12): Kohana_ORM::factory('User')
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:24:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:24:28 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/application/classes/Controller/User.php(12): Kohana_ORM::factory('User')
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:26:55 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/modules/database/classes/Kohana/Database/MySQL.php:171
2015-07-29 06:26:55 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/application/classes/Controller/User.php(12): Kohana_ORM::factory('User')
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/modules/database/classes/Kohana/Database/MySQL.php:171
2015-07-29 06:32:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 14 ] in /var/www/application/classes/Controller/User.php:14
2015-07-29 06:32:21 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 14, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:14
2015-07-29 06:33:33 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user.last_logn' in 'field list' [ SELECT user.id AS id, user.email AS email, user.username AS username, user.password AS password, user.logins AS logins, user.last_logn AS last_logn FROM users AS user WHERE username = 'rafal.kowalski' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-29 06:33:33 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.id ...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(2348): Kohana_ORM->find()
#4 [internal function]: Kohana_ORM->unique('username', 'rafal.kowalski')
#5 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#6 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#7 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#8 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#9 /var/www/application/classes/Controller/User.php(20): Kohana_ORM->save()
#10 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-29 06:34:15 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /var/www/system/classes/Kohana/Cookie.php:67
2015-07-29 06:34:15 --- DEBUG: #0 /var/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /var/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/system/classes/Kohana/Cookie.php:67
2015-07-29 06:35:13 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 06:35:13 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/User.php(20): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 06:39:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-29 06:39:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 06:39:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 06:39:45 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/User.php(20): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 06:41:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:41:24 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('roles')
#1 /var/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /var/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /var/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /var/www/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /var/www/application/classes/Controller/User.php(21): Kohana_ORM::factory('Role')
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1668
2015-07-29 06:45:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 39 ] in file:line
2015-07-29 06:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 06:45:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 39 ] in file:line
2015-07-29 06:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:14:53 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-07-29 07:14:53 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/modules/orm/classes/Model/Auth/User.php(59): Kohana_Auth::instance()
#5 /var/www/modules/orm/classes/Kohana/ORM.php(1173): Model_Auth_User->filters()
#6 /var/www/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('username', 'rafal.kowalski')
#7 /var/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('username', 'rafal.kowalski')
#8 /var/www/application/classes/Controller/User.php(14): Kohana_ORM->__set('username', 'rafal.kowalski')
#9 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-07-29 07:14:56 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user.pactive_to' in 'field list' [ SELECT user.id AS id, user.email AS email, user.username AS username, user.password AS password, user.active AS active, user.active_off AS active_off, user.pactive_to AS pactive_to, user.logins AS logins, user.last_login AS last_login FROM users AS user WHERE username = 'rafal.kowalski' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-29 07:14:56 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT user.id ...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(2348): Kohana_ORM->find()
#4 [internal function]: Kohana_ORM->unique('username', 'rafal.kowalski')
#5 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#6 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#7 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#8 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#9 /var/www/application/classes/Controller/User.php(21): Kohana_ORM->save()
#10 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-29 07:24:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 07:24:09 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/User.php(23): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 07:24:12 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 07:24:12 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/application/classes/Controller/User.php(23): Kohana_ORM->save()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:1302
2015-07-29 07:25:32 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User::_is_active(), called in /var/www/application/classes/Controller/User.php on line 43 and defined ~ APPPATH/classes/Controller/User.php [ 70 ] in /var/www/application/classes/Controller/User.php:70
2015-07-29 07:25:32 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(70): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/User.php(43): Controller_User->_is_active()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:70
2015-07-29 07:25:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'User' not found ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:25:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:25:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'User' not found ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:25:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'User' not found ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:26:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::user_active() ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:26:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:27:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::user_active() ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:27:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::user_active() ~ APPPATH/classes/Controller/User.php [ 72 ] in file:line
2015-07-29 07:27:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:29:32 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/classes/Controller/User.php [ 72 ] in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:29:32 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(72): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 72, Array)
#1 /var/www/application/classes/Controller/User.php(43): Controller_User->_is_active('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:31:15 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_Result_Cached could not be converted to string ~ APPPATH/classes/Controller/User.php [ 72 ] in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:31:15 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(72): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 72, Array)
#1 /var/www/application/classes/Controller/User.php(43): Controller_User->_is_active('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:32:04 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/User.php [ 72 ] in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:32:04 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(72): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 72, Array)
#1 /var/www/application/classes/Controller/User.php(43): Controller_User->_is_active('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:72
2015-07-29 07:32:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-07-29 07:32:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:33:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_string() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-07-29 07:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:33:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_string() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-07-29 07:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:37:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/User.php [ 60 ] in file:line
2015-07-29 07:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 07:39:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_User::_is_active_off(), called in /var/www/application/classes/Controller/User.php on line 46 and defined ~ APPPATH/classes/Controller/User.php [ 78 ] in /var/www/application/classes/Controller/User.php:78
2015-07-29 07:39:39 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(78): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 78, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:78
2015-07-29 07:55:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function now() ~ APPPATH/classes/Model/User.php [ 23 ] in file:line
2015-07-29 07:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 15:17:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: active_to ~ APPPATH/classes/Controller/User.php [ 96 ] in /var/www/application/classes/Controller/User.php:96
2015-07-29 15:17:32 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 96, Array)
#1 /var/www/application/classes/Controller/User.php(49): Controller_User->_is_active_to('1')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:96
2015-07-29 15:17:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: active_to ~ APPPATH/classes/Controller/User.php [ 96 ] in /var/www/application/classes/Controller/User.php:96
2015-07-29 15:17:49 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(96): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 96, Array)
#1 /var/www/application/classes/Controller/User.php(49): Controller_User->_is_active_to('1')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:96
2015-07-29 15:20:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_to ~ APPPATH/classes/Controller/User.php [ 97 ] in /var/www/application/classes/Controller/User.php:97
2015-07-29 15:20:48 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 97, Array)
#1 /var/www/application/classes/Controller/User.php(49): Controller_User->_is_active_to('1')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:97
2015-07-29 17:53:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN), expecting ',' or ';' ~ APPPATH/classes/Controller/User.php [ 98 ] in file:line
2015-07-29 17:53:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 17:54:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 97 ] in /var/www/application/classes/Controller/User.php:97
2015-07-29 17:54:05 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(97): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 97, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:97
2015-07-29 17:54:50 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 98 ] in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:50 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 98, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:51 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 98 ] in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:51 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 98, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:52 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 98 ] in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:52 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 98, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:53 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 98 ] in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:53 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 98, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:56 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ APPPATH/classes/Controller/User.php [ 98 ] in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:54:56 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(98): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 98, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:98
2015-07-29 17:59:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_off ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 17:59:45 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 88, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 17:59:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_off ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 17:59:49 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 88, Array)
#1 /var/www/application/classes/Controller/User.php(46): Controller_User->_is_active_off('6')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:10:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:03 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:03 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:04 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:59 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:10:59 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:00 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 15 ] in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:01 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 15, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:15
2015-07-29 18:11:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:33 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:33 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:33 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:34 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:11:34 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:06 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:07 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/dashboar/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:12:08 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Dashboard.php(8): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-07-29 18:18:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/views/template/admin/dashboard/index.php [ 1 ] in /var/www/application/views/template/admin/dashboard/index.php:1
2015-07-29 18:18:42 --- DEBUG: #0 /var/www/application/views/template/admin/dashboard/index.php(1): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/application/views/template/admin/default.php(15): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/admin/dashboard/index.php:1
2015-07-29 18:18:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/views/template/admin/dashboard/index.php [ 1 ] in /var/www/application/views/template/admin/dashboard/index.php:1
2015-07-29 18:18:45 --- DEBUG: #0 /var/www/application/views/template/admin/dashboard/index.php(1): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 1, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/application/views/template/admin/default.php(15): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/admin/dashboard/index.php:1
2015-07-29 18:18:58 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:18:58 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:03 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:03 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:04 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:05 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:05 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:33 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:33 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:34 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:35 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:19:35 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:20:25 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:20:25 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:20:29 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:20:29 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:22:30 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:22:30 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:22:30 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 22 ] in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:22:30 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 22, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:22
2015-07-29 18:28:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/AdminTemplate.php [ 34 ] in /var/www/application/classes/Controller/AdminTemplate.php:34
2015-07-29 18:28:44 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 34, Array)
#1 /var/www/application/classes/Controller/User.php(83): Controller_AdminTemplate->_redirect_to_login()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/AdminTemplate.php:34
2015-07-29 18:29:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:34 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 88, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 88, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 88, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:35 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 88, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 88 ] in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:36 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(88): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 88, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:88
2015-07-29 18:29:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:50 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:51 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:51 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:29:52 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:31:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/User.php [ 80 ] in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:31:14 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 80, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:80
2015-07-29 18:34:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/views/template/admin/default.php [ 15 ] in file:line
2015-07-29 18:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 18:34:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/views/template/admin/default.php [ 15 ] in file:line
2015-07-29 18:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 18:34:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instace() ~ APPPATH/views/template/admin/default.php [ 15 ] in file:line
2015-07-29 18:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 18:59:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instacje() ~ APPPATH/classes/Controller/Dashboard.php [ 10 ] in file:line
2015-07-29 18:59:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 19:52:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 60 ] in /var/www/application/views/template/admin/default.php:60
2015-07-29 19:52:54 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 60, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:60
2015-07-29 19:52:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 60 ] in /var/www/application/views/template/admin/default.php:60
2015-07-29 19:52:56 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 60, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:60
2015-07-29 19:52:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template/admin/default.php [ 60 ] in /var/www/application/views/template/admin/default.php:60
2015-07-29 19:52:57 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 60, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/AdminTemplate.php(25): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/application/views/template/admin/default.php:60
2015-07-29 20:14:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">Another action' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/template/admin/default.php [ 42 ] in file:line
2015-07-29 20:14:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 20:14:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '">Another action' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/template/admin/default.php [ 42 ] in file:line
2015-07-29 20:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 22:50:42 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/admin/default.php [ 32 ] in file:line
2015-07-29 22:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 22:50:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/admin/default.php [ 32 ] in file:line
2015-07-29 22:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 22:50:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/admin/default.php [ 32 ] in file:line
2015-07-29 22:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 23:46:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:05 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:12 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:36 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:36 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:46:37 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:28 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:30 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:31 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:47:34 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:49:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:49:54 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:49:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:49:55 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:02 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:03 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:04 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:04 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:05 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/system...', 376, Array)
#1 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:376
2015-07-29 23:50:54 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:50:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:50:55 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:52:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH/classes/Controller/User.php [ 120 ] in file:line
2015-07-29 23:52:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 23:52:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH/classes/Controller/User.php [ 120 ] in file:line
2015-07-29 23:52:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 23:52:25 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:52:26 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:52:26 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:07 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:08 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:32 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:33 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:33 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:54:55 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(122): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:55:12 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:55:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:55:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH/classes/Controller/User.php [ 121 ] in file:line
2015-07-29 23:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 23:55:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH/classes/Controller/User.php [ 121 ] in file:line
2015-07-29 23:55:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-29 23:55:40 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:55:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:01 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:10 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:32 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:33 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:34 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:57:35 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:57:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(123): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:58:45 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:58:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:01 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:01 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:02 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:03 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:04 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:05 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:06 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, array must have exactly two members ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-07-29 23:59:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/system...', 377, Array)
#1 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-29 23:59:21 --- EMERGENCY: ReflectionException [ 0 ]: Function min_leght() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2015-07-29 23:59:21 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('min_leght')
#1 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:396
2015-07-29 23:59:22 --- EMERGENCY: ReflectionException [ 0 ]: Function min_leght() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2015-07-29 23:59:22 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('min_leght')
#1 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:396
2015-07-29 23:59:23 --- EMERGENCY: ReflectionException [ 0 ]: Function min_leght() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /var/www/system/classes/Kohana/Validation.php:396
2015-07-29 23:59:23 --- DEBUG: #0 /var/www/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('min_leght')
#1 /var/www/application/classes/Controller/User.php(124): Kohana_Validation->check()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_change_password()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/system/classes/Kohana/Validation.php:396