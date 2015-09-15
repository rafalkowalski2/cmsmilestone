<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-01 00:00:28 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id < 6) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:28 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:52 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = 6) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:52 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = 6) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:53 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = 6) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:53 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:53 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = 6) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:00:53 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:28 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:28 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:29 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:29 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:30 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:30 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:30 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:30 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:31 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:31 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:34 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:34 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:34 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:34 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:35 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 'roles' [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) JOIN roles ON (roles.id = roles_users.role_id) WHERE users.id != '7' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:01:35 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:08:00 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:01 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:13 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:14 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:14 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:14 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:15 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:55 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:56 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:56 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:56 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:56 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:57 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:08:57 --- EMERGENCY: ErrorException [ 2 ]: max(): When only one parameter is given, it must be an array ~ APPPATH/classes/Model/User.php [ 77 ] in file:line
2015-08-01 00:08:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'max(): When onl...', '/var/www/applic...', 77, Array)
#1 /var/www/application/classes/Model/User.php(77): max('roles.id')
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-01 00:10:47 --- EMERGENCY: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ MODPATH/database/classes/Kohana/Database/Expression.php [ 129 ] in file:line
2015-08-01 00:10:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', '/var/www/module...', 129, Array)
#1 /var/www/modules/database/classes/Kohana/Database/Expression.php(129): array_map(Array, 'max_role')
#2 /var/www/modules/database/classes/Kohana/Database.php(519): Kohana_Database_Expression->compile(Object(Database_PDO))
#3 [internal function]: Kohana_Database->quote_column(Array)
#4 /var/www/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#5 /var/www/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 /var/www/application/classes/Model/User.php(92): Kohana_Database_Query->execute()
#7 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-08-01 00:10:49 --- EMERGENCY: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ MODPATH/database/classes/Kohana/Database/Expression.php [ 129 ] in file:line
2015-08-01 00:10:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', '/var/www/module...', 129, Array)
#1 /var/www/modules/database/classes/Kohana/Database/Expression.php(129): array_map(Array, 'max_role')
#2 /var/www/modules/database/classes/Kohana/Database.php(519): Kohana_Database_Expression->compile(Object(Database_PDO))
#3 [internal function]: Kohana_Database->quote_column(Array)
#4 /var/www/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#5 /var/www/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 /var/www/application/classes/Model/User.php(92): Kohana_Database_Query->execute()
#7 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-08-01 00:11:46 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'max_role' in 'where clause' [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND max_role < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:11:46 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:11:48 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'max_role' in 'where clause' [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND max_role < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:11:48 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:06 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:06 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:07 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:07 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:08 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:08 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:12:35 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:11 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:11 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:12 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id) AS max_role, users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '7' AND MAX(roles.id) < 6 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:13:13 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(367): Model_User->get_admin_user_list('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:20:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:20:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:20:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:20:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:20:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:20:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:20:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:20:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:20:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:20:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:23:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/User.php [ 143 ] in file:line
2015-08-01 00:23:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:24:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user_detail() ~ APPPATH/classes/Controller/User.php [ 424 ] in file:line
2015-08-01 00:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 00:35:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-01 00:35:38 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role_id')
#1 /var/www/application/classes/Controller/User.php(427): Kohana_ORM->__get('role_id')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-01 00:35:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-01 00:35:47 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role_id')
#1 /var/www/application/classes/Controller/User.php(427): Kohana_ORM->__get('role_id')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-01 00:41:52 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:41:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(145): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:20 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:20 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:20 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:20 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:50 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:50 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:51 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:51 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:51 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:51 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:52 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:52 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:53 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname' at line 4 [ SELECT 
			CASE
				WHEN MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:42:53 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tCASE...', false, Array)
#1 /var/www/application/classes/Model/User.php(148): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:15 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:15 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:15 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:15 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.na' at line 2 [ SELECT 
			IF MAX(roles.id) < 6 THEN
			, users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, users.about AS u_about, roles.id AS r_id, 
			END
			 FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '8' ORDER BY roles.id DESC LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 00:51:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT \n\t\t\tIF M...', false, Array)
#1 /var/www/application/classes/Model/User.php(147): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(424): Model_User->get_user_detail('8', 6)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:42:44 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = MAX(roles.id)) WHERE users.id != '6' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:42:44 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(70): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:42:45 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = MAX(roles.id)) WHERE users.id != '6' GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:42:45 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(70): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:44:52 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' AND roles.id = MAX(roles.id) GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:44:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:06 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' AND roles.id = MAX(roles.id) GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:06 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:14 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'roles.id' in 'having clause' [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' GROUP BY users.id HAVING roles.id = MAX(roles.id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:14 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:15 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'roles.id' in 'having clause' [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' GROUP BY users.id HAVING roles.id = MAX(roles.id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:15 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:37 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' AND roles.id = MAX(roles.id) GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:37 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:38 --- EMERGENCY: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1111 Invalid use of group function [ SELECT MAX(roles.id), users.id AS u_id, users.name AS u_name, users.surname AS u_surname, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.name AS r_name FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id != '6' AND roles.id = MAX(roles.id) GROUP BY users.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 18:45:38 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT MAX(role...', false, Array)
#1 /var/www/application/classes/Model/User.php(72): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-01 21:58:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/User.php [ 65 ] in file:line
2015-08-01 21:58:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 21:59:41 --- EMERGENCY: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ MODPATH/database/classes/Kohana/Database/Expression.php [ 129 ] in file:line
2015-08-01 21:59:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', '/var/www/module...', 129, Array)
#1 /var/www/modules/database/classes/Kohana/Database/Expression.php(129): array_map(Array, 'r_test_name')
#2 /var/www/modules/database/classes/Kohana/Database.php(519): Kohana_Database_Expression->compile(Object(Database_PDO))
#3 [internal function]: Kohana_Database->quote_column(Array)
#4 /var/www/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#5 /var/www/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#6 /var/www/application/classes/Model/User.php(74): Kohana_Database_Query->execute()
#7 /var/www/application/classes/Controller/User.php(361): Model_User->get_super_admin_user_list('6')
#8 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-08-01 22:00:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/User.php [ 74 ] in file:line
2015-08-01 22:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 22:00:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/User.php [ 74 ] in file:line
2015-08-01 22:00:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 22:02:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/User.php [ 63 ] in file:line
2015-08-01 22:02:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 22:02:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/User.php [ 63 ] in file:line
2015-08-01 22:02:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-01 22:08:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/template/admin/user/list.php [ 36 ] in file:line
2015-08-01 22:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line