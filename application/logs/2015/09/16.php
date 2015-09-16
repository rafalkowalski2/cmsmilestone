<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-16 03:39:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/pages/add_category could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-09-16 03:39:19 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Pages.php(19): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Pages->action_add_category()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-09-16 03:40:18 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/pages/add_category.php [ 80 ] in /var/www/application/views/template/admin/pages/add_category.php:80
2015-09-16 03:40:18 --- DEBUG: #0 /var/www/application/views/template/admin/pages/add_category.php(80): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 80, Array)
#1 /var/www/application/views/template/admin/pages/add_category.php(110): show(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(89): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/pages/add_category.php:80
2015-09-16 03:40:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/pages/add_category.php [ 80 ] in /var/www/application/views/template/admin/pages/add_category.php:80
2015-09-16 03:40:48 --- DEBUG: #0 /var/www/application/views/template/admin/pages/add_category.php(80): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 80, Array)
#1 /var/www/application/views/template/admin/pages/add_category.php(110): show(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(89): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/pages/add_category.php:80
2015-09-16 03:58:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Pages.php [ 26 ] in file:line
2015-09-16 03:58:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 03:58:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Pages.php [ 26 ] in file:line
2015-09-16 03:58:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 04:15:21 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/pages/add_category.php [ 59 ] in /var/www/application/views/template/admin/pages/add_category.php:59
2015-09-16 04:15:21 --- DEBUG: #0 /var/www/application/views/template/admin/pages/add_category.php(59): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 59, Array)
#1 /var/www/application/views/template/admin/pages/add_category.php(97): walkTree(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(89): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/pages/add_category.php:59
2015-09-16 04:17:53 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/pages/add_category.php [ 58 ] in /var/www/application/views/template/admin/pages/add_category.php:58
2015-09-16 04:17:53 --- DEBUG: #0 /var/www/application/views/template/admin/pages/add_category.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 58, Array)
#1 /var/www/application/views/template/admin/pages/add_category.php(68): walkTree(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(89): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/pages/add_category.php:58
2015-09-16 04:17:54 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/pages/add_category.php [ 58 ] in /var/www/application/views/template/admin/pages/add_category.php:58
2015-09-16 04:17:54 --- DEBUG: #0 /var/www/application/views/template/admin/pages/add_category.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 58, Array)
#1 /var/www/application/views/template/admin/pages/add_category.php(68): walkTree(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(89): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pages))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/pages/add_category.php:58
2015-09-16 04:33:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Categories.php [ 43 ] in file:line
2015-09-16 04:33:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 04:33:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/categories/list could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-09-16 04:33:33 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Categories.php(42): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Categories->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Categories))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-09-16 04:59:48 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'categories.date_change' in 'field list' [ SELECT categories.id AS category_id, categories.parent_id AS category_parent_id, categories.name AS category_name, categories.user_id AS category_uid, categories.date_add AS category_create_date, categories.date_change AS category_date_change, users.name AS user_name, users.surname AS user_surname FROM categories JOIN users ON (users.id = category.user_id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 04:59:48 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT categori...', false, Array)
#1 /var/www/application/classes/Model/Categories.php(49): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Categories.php(43): Model_Categories->_get_category_list()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Categories->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Categories))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:00:05 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'categories.date_change' in 'field list' [ SELECT categories.id AS category_id, categories.parent_id AS category_parent_id, categories.name AS category_name, categories.user_id AS category_uid, categories.date_add AS category_create_date, categories.date_change AS category_date_change, users.name AS user_name, users.surname AS user_surname FROM categories JOIN users ON (users.id = category.user_id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:00:05 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT categori...', false, Array)
#1 /var/www/application/classes/Model/Categories.php(49): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Categories.php(43): Model_Categories->_get_category_list()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Categories->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Categories))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:01:32 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'category.user_id' in 'on clause' [ SELECT categories.id AS category_id, categories.parent_id AS category_parent_id, categories.name AS category_name, categories.user_id AS category_uid, categories.date_add AS category_create_date, categories.change_date AS category_date_change, users.name AS user_name, users.surname AS user_surname FROM categories JOIN users ON (users.id = category.user_id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:01:32 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT categori...', false, Array)
#1 /var/www/application/classes/Model/Categories.php(49): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Categories.php(43): Model_Categories->_get_category_list()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Categories->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Categories))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:01:33 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'category.user_id' in 'on clause' [ SELECT categories.id AS category_id, categories.parent_id AS category_parent_id, categories.name AS category_name, categories.user_id AS category_uid, categories.date_add AS category_create_date, categories.change_date AS category_date_change, users.name AS user_name, users.surname AS user_surname FROM categories JOIN users ON (users.id = category.user_id) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:01:33 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT categori...', false, Array)
#1 /var/www/application/classes/Model/Categories.php(49): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Categories.php(43): Model_Categories->_get_category_list()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Categories->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Categories))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-16 05:10:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::as_object() ~ APPPATH/classes/Model/Categories.php [ 50 ] in file:line
2015-09-16 05:10:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 05:11:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$temp' (T_VARIABLE) ~ APPPATH/classes/Controller/Categories.php [ 55 ] in file:line
2015-09-16 05:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 05:11:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$temp' (T_VARIABLE) ~ APPPATH/classes/Controller/Categories.php [ 55 ] in file:line
2015-09-16 05:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-16 05:52:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/template/admin/categories/list.php [ 37 ] in file:line
2015-09-16 05:52:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line