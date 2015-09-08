<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-03 12:29:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 20 ] in file:line
2015-08-03 12:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 12:29:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 20 ] in file:line
2015-08-03 12:29:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:27:23 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 25 ] in file:line
2015-08-03 14:27:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 25, Array)
#1 /var/www/application/classes/Controller/Files.php(25): mkdir('/var/www/public...', 511)
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->create_folder(NULL)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 14:41:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 14:41:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:50:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Model/Files.php [ 38 ] in file:line
2015-08-03 14:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:50:41 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 41 ] in file:line
2015-08-03 14:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 41, Array)
#1 /var/www/application/classes/Controller/Files.php(41): mkdir('/var/www/public...', 511)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->create_folder('documents', '/var/www/public...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 14:50:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/Files.php [ 24 ] in file:line
2015-08-03 14:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:51:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Files::save() ~ APPPATH/classes/Controller/Files.php [ 25 ] in file:line
2015-08-03 14:51:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:53:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Files::save() ~ APPPATH/classes/Controller/Files.php [ 25 ] in file:line
2015-08-03 14:53:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:56:31 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 41 ] in file:line
2015-08-03 14:56:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 41, Array)
#1 /var/www/application/classes/Controller/Files.php(41): mkdir('/var/www/public...', 511)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->create_folder('documents', '/var/www/public...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 14:56:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_files' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-08-03 14:56:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:57:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Files::save() ~ APPPATH/classes/Controller/Files.php [ 25 ] in file:line
2015-08-03 14:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 14:58:35 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'cms_milestone.fileses' doesn't exist [ SELECT files.id AS id, files.parent_id AS parent_id, files.user_id AS user_id, files.display_name AS display_name, files.name AS name, files.dir AS dir, files.date_create AS date_create, files.date_last_change AS date_last_change, files.description AS description FROM fileses AS files WHERE name = 'documents' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-03 14:58:35 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT files.id...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(2348): Kohana_ORM->find()
#4 [internal function]: Kohana_ORM->unique('name', 'documents')
#5 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#6 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#7 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#8 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#9 /var/www/application/classes/Controller/Files.php(25): Kohana_ORM->save()
#10 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-03 15:00:26 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'cms_milestone.folderses' doesn't exist [ SELECT folders.id AS id, folders.parent_id AS parent_id, folders.user_id AS user_id, folders.display_name AS display_name, folders.name AS name, folders.dir AS dir, folders.date_create AS date_create, folders.date_last_change AS date_last_change, folders.description AS description FROM folderses AS folders WHERE name = 'documents' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-03 15:00:26 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT folders....', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/modules/orm/classes/Kohana/ORM.php(2348): Kohana_ORM->find()
#4 [internal function]: Kohana_ORM->unique('name', 'documents')
#5 /var/www/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#6 /var/www/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#7 /var/www/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#8 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#9 /var/www/application/classes/Controller/Files.php(25): Kohana_ORM->save()
#10 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-08-03 15:03:52 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 41 ] in file:line
2015-08-03 15:03:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 41, Array)
#1 /var/www/application/classes/Controller/Files.php(41): mkdir('/var/www/public...', 511)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->create_folder('documents', '/var/www/public...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 15:05:44 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 56 ] in file:line
2015-08-03 15:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 56, Array)
#1 /var/www/application/classes/Controller/Files.php(56): mkdir('/var/www/public...', 511)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->create_folder('documents', '/var/www/public...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 15:09:36 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:09:37 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:09:39 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:09:39 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:09:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:09:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:18:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'find_all' (T_STRING) ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 15:18:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:18:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'find_all' (T_STRING) ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 15:18:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:18:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'find_all' (T_STRING) ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 15:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:18:23 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 15:18:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:18:38 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 60 ] in file:line
2015-08-03 15:18:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 60, Array)
#1 /var/www/application/classes/Controller/Files.php(60): mkdir('public/upload/m...', 511)
#2 /var/www/application/classes/Controller/Files.php(16): Controller_Files->create_folder('media', 'public/upload/')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 15:19:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 11 ] in file:line
2015-08-03 15:19:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 15:25:29 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/add_folder.php [ 64 ] in /var/www/application/views/template/admin/files/add_folder.php:64
2015-08-03 15:25:29 --- DEBUG: #0 /var/www/application/views/template/admin/files/add_folder.php(64): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 64, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/application/views/template/admin/default.php(77): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/admin/files/add_folder.php:64
2015-08-03 16:24:53 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Files.php [ 61 ] in file:line
2015-08-03 16:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/var/www/applic...', 61, Array)
#1 /var/www/application/classes/Controller/Files.php(61): mkdir('public/upload/p...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('office', 'public/upload/p...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 16:28:19 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 74 ] in file:line
2015-08-03 16:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:28:21 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 74 ] in file:line
2015-08-03 16:28:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:30:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 77 ] in file:line
2015-08-03 16:30:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:30:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 77 ] in file:line
2015-08-03 16:30:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:31:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function arra() ~ APPPATH/classes/Controller/Files.php [ 72 ] in file:line
2015-08-03 16:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:31:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function arra() ~ APPPATH/classes/Controller/Files.php [ 72 ] in file:line
2015-08-03 16:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:48:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 75 ] in /var/www/application/classes/Controller/Files.php:75
2015-08-03 16:48:06 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(75): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 75, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:75
2015-08-03 16:48:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 75 ] in /var/www/application/classes/Controller/Files.php:75
2015-08-03 16:48:09 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(75): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 75, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:75
2015-08-03 16:49:10 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for generate(), called in /var/www/application/classes/Controller/Files.php on line 93 and defined ~ APPPATH/classes/Controller/Files.php [ 73 ] in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:10 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 73, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for generate(), called in /var/www/application/classes/Controller/Files.php on line 93 and defined ~ APPPATH/classes/Controller/Files.php [ 73 ] in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 73, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for generate(), called in /var/www/application/classes/Controller/Files.php on line 93 and defined ~ APPPATH/classes/Controller/Files.php [ 73 ] in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 73, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for generate(), called in /var/www/application/classes/Controller/Files.php on line 93 and defined ~ APPPATH/classes/Controller/Files.php [ 73 ] in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:49:11 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 73, Array)
#1 /var/www/application/classes/Controller/Files.php(93): generate()
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:73
2015-08-03 16:52:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/classes/Controller/Files.php [ 70 ] in file:line
2015-08-03 16:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 16:52:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/classes/Controller/Files.php [ 70 ] in file:line
2015-08-03 16:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 17:36:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:36:56 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:36:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:36:59 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:16 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:17 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 82 ] in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:17 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 82, Array)
#1 /var/www/application/classes/Controller/Files.php(86): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(98): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:82
2015-08-03 17:37:47 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:47 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:48 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:37:59 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:38:25 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:38:25 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:38:26 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 83 ] in /var/www/application/classes/Controller/Files.php:83
2015-08-03 17:38:26 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(83): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 83, Array)
#1 /var/www/application/classes/Controller/Files.php(87): generate('3', NULL)
#2 /var/www/application/classes/Controller/Files.php(99): generate(0, Array)
#3 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:83
2015-08-03 18:05:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Files.php [ 78 ] in file:line
2015-08-03 18:05:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:05:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Files.php [ 78 ] in file:line
2015-08-03 18:05:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:05:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$temp' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 84 ] in file:line
2015-08-03 18:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:05:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$temp' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 84 ] in file:line
2015-08-03 18:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:06:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Controller_Files::prepare_folder_list(), called in /var/www/application/classes/Controller/Files.php on line 11 and defined ~ APPPATH/classes/Controller/Files.php [ 70 ] in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:06:31 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(70): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:06:31 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Controller_Files::prepare_folder_list(), called in /var/www/application/classes/Controller/Files.php on line 11 and defined ~ APPPATH/classes/Controller/Files.php [ 70 ] in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:06:31 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(70): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:06:33 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Controller_Files::prepare_folder_list(), called in /var/www/application/classes/Controller/Files.php on line 11 and defined ~ APPPATH/classes/Controller/Files.php [ 70 ] in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:06:33 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(70): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:70
2015-08-03 18:07:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 78 ] in file:line
2015-08-03 18:07:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:07:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 78 ] in file:line
2015-08-03 18:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:13:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:14:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::order_by() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:15:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::orderby() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:15:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:15:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::orderby() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:15:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:15:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::orderby() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:15:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:15:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::orderby() ~ APPPATH/classes/Controller/Files.php [ 10 ] in file:line
2015-08-03 18:15:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:28:49 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 75 ] in file:line
2015-08-03 18:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 18:28:49 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Folders as array ~ APPPATH/classes/Controller/Files.php [ 75 ] in file:line
2015-08-03 18:28:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 19:52:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/classes/Controller/Files.php [ 98 ] in file:line
2015-08-03 19:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 19:52:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/classes/Controller/Files.php [ 98 ] in file:line
2015-08-03 19:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 19:52:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/classes/Controller/Files.php [ 98 ] in file:line
2015-08-03 19:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 20:17:52 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Files.php [ 123 ] in file:line
2015-08-03 20:17:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/var/www/applic...', 123, Array)
#1 /var/www/application/classes/Controller/Files.php(123): array_key_exists('children', '3')
#2 /var/www/application/classes/Controller/Files.php(126): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(131): calculate(Array)
#4 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-08-03 20:17:54 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, string given ~ APPPATH/classes/Controller/Files.php [ 123 ] in file:line
2015-08-03 20:17:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/var/www/applic...', 123, Array)
#1 /var/www/application/classes/Controller/Files.php(123): array_key_exists('children', '3')
#2 /var/www/application/classes/Controller/Files.php(126): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(131): calculate(Array)
#4 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-08-03 20:18:44 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'children' ~ APPPATH/classes/Controller/Files.php [ 123 ] in /var/www/application/classes/Controller/Files.php:123
2015-08-03 20:18:44 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(123): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/applic...', 123, Array)
#1 /var/www/application/classes/Controller/Files.php(126): calculate(Array)
#2 /var/www/application/classes/Controller/Files.php(131): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:123
2015-08-03 20:18:45 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'children' ~ APPPATH/classes/Controller/Files.php [ 123 ] in /var/www/application/classes/Controller/Files.php:123
2015-08-03 20:18:45 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(123): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/applic...', 123, Array)
#1 /var/www/application/classes/Controller/Files.php(126): calculate(Array)
#2 /var/www/application/classes/Controller/Files.php(131): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/application/classes/Controller/Files.php:123
2015-08-03 20:20:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 122 ] in /var/www/application/classes/Controller/Files.php:122
2015-08-03 20:20:06 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(122): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 122, Array)
#1 /var/www/application/classes/Controller/Files.php(128): calculate(NULL)
#2 /var/www/application/classes/Controller/Files.php(128): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(128): calculate(Array)
#4 /var/www/application/classes/Controller/Files.php(134): calculate(Array)
#5 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/classes/Controller/Files.php:122
2015-08-03 20:20:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Files.php [ 122 ] in /var/www/application/classes/Controller/Files.php:122
2015-08-03 20:20:09 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(122): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 122, Array)
#1 /var/www/application/classes/Controller/Files.php(128): calculate(NULL)
#2 /var/www/application/classes/Controller/Files.php(128): calculate(Array)
#3 /var/www/application/classes/Controller/Files.php(128): calculate(Array)
#4 /var/www/application/classes/Controller/Files.php(134): calculate(Array)
#5 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#6 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/classes/Controller/Files.php:122
2015-08-03 20:22:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$levels' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 128 ] in file:line
2015-08-03 20:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 20:22:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$levels' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 128 ] in file:line
2015-08-03 20:22:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 20:22:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$levels' (T_VARIABLE) ~ APPPATH/classes/Controller/Files.php [ 128 ] in file:line
2015-08-03 20:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 20:27:33 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/Controller/Files.php [ 124 ] in /var/www/application/classes/Controller/Files.php:124
2015-08-03 20:27:33 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(124): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/applic...', 124, Array)
#1 /var/www/application/classes/Controller/Files.php(135): calculate(Array)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:124
2015-08-03 20:27:36 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ APPPATH/classes/Controller/Files.php [ 124 ] in /var/www/application/classes/Controller/Files.php:124
2015-08-03 20:27:36 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(124): Kohana_Core::error_handler(2, 'Illegal offset ...', '/var/www/applic...', 124, Array)
#1 /var/www/application/classes/Controller/Files.php(135): calculate(Array)
#2 /var/www/application/classes/Controller/Files.php(12): Controller_Files->levels_array(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/application/classes/Controller/Files.php:124
2015-08-03 20:35:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Files.php [ 128 ] in file:line
2015-08-03 20:35:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 20:36:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Files.php [ 128 ] in file:line
2015-08-03 20:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 21:48:00 --- EMERGENCY: ErrorException [ 2 ]: key_exists() expects parameter 2 to be array, null given ~ APPPATH/views/template/admin/files/add_folder.php [ 67 ] in file:line
2015-08-03 21:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'key_exists() ex...', '/var/www/applic...', 67, Array)
#1 /var/www/application/views/template/admin/files/add_folder.php(67): key_exists(3, NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(77): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2015-08-03 21:51:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '>=' (T_IS_GREATER_OR_EQUAL), expecting variable (T_VARIABLE) or '$' ~ APPPATH/views/template/admin/files/add_folder.php [ 71 ] in file:line
2015-08-03 21:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 22:00:21 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 61 ] in file:line
2015-08-03 22:00:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 61, Array)
#1 /var/www/application/classes/Controller/Files.php(61): mkdir('public/upload/m...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('media', 'public/upload/')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:00:37 --- EMERGENCY: ErrorException [ 2 ]: unlink(public/upload/media): Is a directory ~ APPPATH/classes/Controller/Files.php [ 49 ] in file:line
2015-08-03 22:00:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(public/u...', '/var/www/applic...', 49, Array)
#1 /var/www/application/classes/Controller/Files.php(49): unlink('public/upload/m...')
#2 /var/www/application/classes/Controller/Files.php(34): Controller_Files->delete_folder('media', 'public/upload/')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:00:45 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ APPPATH/classes/Controller/Files.php [ 61 ] in file:line
2015-08-03 22:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/applic...', 61, Array)
#1 /var/www/application/classes/Controller/Files.php(61): mkdir('public/upload/m...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('media', 'public/upload/')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:00:53 --- EMERGENCY: ErrorException [ 2 ]: unlink(public/upload/media): Is a directory ~ APPPATH/classes/Controller/Files.php [ 49 ] in file:line
2015-08-03 22:00:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(public/u...', '/var/www/applic...', 49, Array)
#1 /var/www/application/classes/Controller/Files.php(49): unlink('public/upload/m...')
#2 /var/www/application/classes/Controller/Files.php(34): Controller_Files->delete_folder('media', 'public/upload/')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:14:12 --- EMERGENCY: ErrorException [ 1 ]: Cannot redeclare show() (previously declared in /var/www/application/views/template/admin/files/add_folder.php:71) ~ APPPATH/views/template/admin/files/add_folder.php [ 71 ] in file:line
2015-08-03 22:14:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 22:19:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/add_folder.php [ 69 ] in /var/www/application/views/template/admin/files/add_folder.php:69
2015-08-03 22:19:56 --- DEBUG: #0 /var/www/application/views/template/admin/files/add_folder.php(69): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 69, Array)
#1 /var/www/application/views/template/admin/files/add_folder.php(73): show(NULL)
#2 /var/www/application/views/template/admin/files/add_folder.php(73): show(Array)
#3 /var/www/application/views/template/admin/files/add_folder.php(76): show(Array)
#4 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#7 /var/www/application/views/template/admin/default.php(77): Kohana_View->__toString()
#8 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#9 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#10 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#12 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#15 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/application/views/template/admin/files/add_folder.php:69
2015-08-03 22:20:00 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/add_folder.php [ 69 ] in /var/www/application/views/template/admin/files/add_folder.php:69
2015-08-03 22:20:00 --- DEBUG: #0 /var/www/application/views/template/admin/files/add_folder.php(69): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 69, Array)
#1 /var/www/application/views/template/admin/files/add_folder.php(73): show(NULL)
#2 /var/www/application/views/template/admin/files/add_folder.php(73): show(Array)
#3 /var/www/application/views/template/admin/files/add_folder.php(76): show(Array)
#4 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#5 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#6 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#7 /var/www/application/views/template/admin/default.php(77): Kohana_View->__toString()
#8 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#9 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#10 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#12 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#15 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/application/views/template/admin/files/add_folder.php:69
2015-08-03 22:26:26 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Files.php [ 61 ] in file:line
2015-08-03 22:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/var/www/applic...', 61, Array)
#1 /var/www/application/classes/Controller/Files.php(61): mkdir('public/upload/m...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('testtest', 'public/upload/m...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:28:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Files.php [ 82 ] in file:line
2015-08-03 22:28:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 22:28:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The director property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:27 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('director')
#1 /var/www/application/classes/Controller/Files.php(81): Kohana_ORM->__get('director')
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The director property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:27 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('director')
#1 /var/www/application/classes/Controller/Files.php(81): Kohana_ORM->__get('director')
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The director property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:28 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('director')
#1 /var/www/application/classes/Controller/Files.php(81): Kohana_ORM->__get('director')
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The director property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:28:28 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('director')
#1 /var/www/application/classes/Controller/Files.php(81): Kohana_ORM->__get('director')
#2 /var/www/application/classes/Controller/Files.php(11): Controller_Files->prepare_folder_list(Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-08-03 22:30:26 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Files.php [ 61 ] in file:line
2015-08-03 22:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/var/www/applic...', 61, Array)
#1 /var/www/application/classes/Controller/Files.php(61): mkdir('public/upload/p...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('rock', 'public/upload/p...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:32:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Files.php [ 26 ] in file:line
2015-08-03 22:32:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 22:39:17 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Files.php [ 68 ] in file:line
2015-08-03 22:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/var/www/applic...', 68, Array)
#1 /var/www/application/classes/Controller/Files.php(68): mkdir('public/upload/p...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('office', 'public/upload/p...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:39:52 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Files.php [ 69 ] in file:line
2015-08-03 22:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/var/www/applic...', 69, Array)
#1 /var/www/application/classes/Controller/Files.php(69): mkdir('public/upload/p...', 511)
#2 /var/www/application/classes/Controller/Files.php(17): Controller_Files->create_folder('office', 'public/upload/p...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add_folder()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-03 22:42:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/views/template/admin/files/add_folder.php [ 69 ] in file:line
2015-08-03 22:42:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 23:10:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$str' (T_VARIABLE), expecting :: (T_PAAMAYIM_NEKUDOTAYIM) ~ APPPATH/views/template/admin/files/add_folder.php [ 82 ] in file:line
2015-08-03 23:10:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 23:15:00 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 536870912 bytes exhausted (tried to allocate 535035858 bytes) ~ APPPATH/views/template/admin/files/add_folder.php [ 77 ] in file:line
2015-08-03 23:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 23:15:21 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 536870912 bytes exhausted (tried to allocate 535035858 bytes) ~ APPPATH/views/template/admin/files/add_folder.php [ 77 ] in file:line
2015-08-03 23:15:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-03 23:16:02 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 536870912 bytes exhausted (tried to allocate 535035858 bytes) ~ APPPATH/views/template/admin/files/add_folder.php [ 77 ] in file:line
2015-08-03 23:16:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line