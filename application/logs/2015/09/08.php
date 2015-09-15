<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-08 13:33:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 182 ] in file:line
2015-09-08 13:33:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 13:33:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 182 ] in file:line
2015-09-08 13:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 13:33:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH/classes/Controller/Files.php [ 182 ] in file:line
2015-09-08 13:33:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 13:56:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/Files.php [ 181 ] in file:line
2015-09-08 13:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 14:00:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:190
2015-09-08 14:00:06 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(190): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:190
2015-09-08 14:01:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:190
2015-09-08 14:01:36 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(190): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:190
2015-09-08 14:02:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:02:38 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:02:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:02:54 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:20 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:21 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:42 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:56 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:03:56 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:09:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/Files.php:191
2015-09-08 14:09:46 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(191): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/Files.php(181): Controller_Files->_upload_file(Array, 'public/upload/o...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Files.php:191
2015-09-08 15:23:17 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Files as array ~ APPPATH/classes/Controller/Files.php [ 237 ] in file:line
2015-09-08 15:23:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:23:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH/classes/Controller/Files.php [ 235 ] in file:line
2015-09-08 15:23:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:23:43 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Files as array ~ APPPATH/classes/Controller/Files.php [ 237 ] in file:line
2015-09-08 15:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:23:44 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Files as array ~ APPPATH/classes/Controller/Files.php [ 237 ] in file:line
2015-09-08 15:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:24:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/Files.php [ 234 ] in file:line
2015-09-08 15:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:24:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/Files.php [ 234 ] in file:line
2015-09-08 15:24:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:25:01 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Files as array ~ APPPATH/classes/Controller/Files.php [ 237 ] in file:line
2015-09-08 15:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:51:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/Controller/Files.php [ 235 ] in file:line
2015-09-08 15:51:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:53:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/template/admin/files/manager.php [ 56 ] in file:line
2015-09-08 15:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 15:53:49 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/manager.php [ 53 ] in /var/www/application/views/template/admin/files/manager.php:53
2015-09-08 15:53:49 --- DEBUG: #0 /var/www/application/views/template/admin/files/manager.php(53): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 53, Array)
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
#15 {main} in /var/www/application/views/template/admin/files/manager.php:53
2015-09-08 15:53:50 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/manager.php [ 53 ] in /var/www/application/views/template/admin/files/manager.php:53
2015-09-08 15:53:50 --- DEBUG: #0 /var/www/application/views/template/admin/files/manager.php(53): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 53, Array)
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
#15 {main} in /var/www/application/views/template/admin/files/manager.php:53
2015-09-08 16:01:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/manager.php [ 70 ] in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:01:07 --- DEBUG: #0 /var/www/application/views/template/admin/files/manager.php(70): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 70, Array)
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
#15 {main} in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:01:46 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ APPPATH/views/template/admin/files/manager.php [ 70 ] in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:01:46 --- DEBUG: #0 /var/www/application/views/template/admin/files/manager.php(70): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/applic...', 70, Array)
#1 /var/www/application/views/template/admin/files/manager.php(70): Kohana_Request::param()
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
#16 {main} in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:13:46 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/files/manager.php [ 70 ] in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:13:46 --- DEBUG: #0 /var/www/application/views/template/admin/files/manager.php(70): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 70, Array)
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
#15 {main} in /var/www/application/views/template/admin/files/manager.php:70
2015-09-08 16:30:23 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id IS NULL' at line 1 [ SELECT files.id AS file_id, files.name AS file_name, files.type AS file_type, files.size AS file_size, files.date_add AS file_date_add, folders.dir AS folder_director FROM  JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id IS NULL ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:23 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT files.id...', false, Array)
#1 /var/www/application/classes/Model/Files.php(56): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Files.php(234): Model_Files->get_files_list(NULL)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_manager()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:55 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22'' at line 1 [ SELECT files.id AS file_id, files.name AS file_name, files.type AS file_type, files.size AS file_size, files.date_add AS file_date_add, folders.dir AS folder_director FROM  JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:55 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT files.id...', false, Array)
#1 /var/www/application/classes/Model/Files.php(56): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Files.php(234): Model_Files->get_files_list('22')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_manager()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:56 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22'' at line 1 [ SELECT files.id AS file_id, files.name AS file_name, files.type AS file_type, files.size AS file_size, files.date_add AS file_date_add, folders.dir AS folder_director FROM  JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:56 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT files.id...', false, Array)
#1 /var/www/application/classes/Model/Files.php(56): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Files.php(234): Model_Files->get_files_list('22')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_manager()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:56 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22'' at line 1 [ SELECT files.id AS file_id, files.name AS file_name, files.type AS file_type, files.size AS file_size, files.date_add AS file_date_add, folders.dir AS folder_director FROM  JOIN folders ON (folders.id = files.folder_id) WHERE files.folder_id = '22' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:30:56 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT files.id...', false, Array)
#1 /var/www/application/classes/Model/Files.php(56): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Files.php(234): Model_Files->get_files_list('22')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_manager()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-08 16:34:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/views/template/admin/files/manager.php [ 73 ] in file:line
2015-09-08 16:34:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 16:34:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH/views/template/admin/files/manager.php [ 73 ] in file:line
2015-09-08 16:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 16:46:27 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Helpers/File.php [ 9 ] in file:line
2015-09-08 16:46:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 17:23:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'eturn' (T_STRING) ~ APPPATH/classes/Helpers/File.php [ 20 ] in file:line
2015-09-08 17:23:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 17:23:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/Helpers/File.php [ 20 ] in file:line
2015-09-08 17:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 17:23:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/Helpers/File.php [ 20 ] in file:line
2015-09-08 17:23:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 18:42:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/template/admin/files/manager.php [ 84 ] in file:line
2015-09-08 18:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-08 19:23:16 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, null given ~ APPPATH/classes/Helpers/File.php [ 50 ] in file:line
2015-09-08 19:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/applic...', 50, Array)
#1 /var/www/application/classes/Helpers/File.php(50): in_array('application/vnd...', NULL)
#2 /var/www/application/views/template/admin/files/manager.php(78): Helpers_File::file_icon('application/vnd...')
#3 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /var/www/application/views/template/admin/default.php(78): Kohana_View->__toString()
#7 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#8 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#9 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#11 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#14 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-09-08 20:15:29 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Helpers/File.php [ 59 ] in file:line
2015-09-08 20:15:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/applic...', 59, Array)
#1 /var/www/application/classes/Helpers/File.php(59): in_array('application/pdf', 'application/pdf')
#2 /var/www/application/views/template/admin/files/manager.php(78): Helpers_File::file_icon('application/pdf')
#3 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /var/www/application/views/template/admin/default.php(78): Kohana_View->__toString()
#7 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#8 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#9 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#11 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#14 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-09-08 20:15:31 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Helpers/File.php [ 59 ] in file:line
2015-09-08 20:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/applic...', 59, Array)
#1 /var/www/application/classes/Helpers/File.php(59): in_array('application/pdf', 'application/pdf')
#2 /var/www/application/views/template/admin/files/manager.php(78): Helpers_File::file_icon('application/pdf')
#3 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /var/www/application/views/template/admin/default.php(78): Kohana_View->__toString()
#7 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#8 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#9 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#11 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#14 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-09-08 20:15:50 --- EMERGENCY: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, string given ~ APPPATH/classes/Helpers/File.php [ 59 ] in file:line
2015-09-08 20:15:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', '/var/www/applic...', 59, Array)
#1 /var/www/application/classes/Helpers/File.php(59): in_array('application/vnd...', 'application/pdf')
#2 /var/www/application/views/template/admin/files/manager.php(78): Helpers_File::file_icon('application/vnd...')
#3 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#4 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#5 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#6 /var/www/application/views/template/admin/default.php(78): Kohana_View->__toString()
#7 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#8 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#9 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#11 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#14 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2015-09-08 22:07:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/application/classes/Controller/Files.php:258
2015-09-08 22:07:18 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(258): Kohana_ORM->find()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Files.php:258
2015-09-08 22:07:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/application/classes/Controller/Files.php:258
2015-09-08 22:07:19 --- DEBUG: #0 /var/www/application/classes/Controller/Files.php(258): Kohana_ORM->find()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Files->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Files.php:258
2015-09-08 23:56:30 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/folders/list.php [ 15 ] in /var/www/application/views/template/admin/folders/list.php:15
2015-09-08 23:56:30 --- DEBUG: #0 /var/www/application/views/template/admin/folders/list.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 15, Array)
#1 /var/www/application/views/template/admin/folders/list.php(47): show(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(79): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/folders/list.php:15
2015-09-08 23:58:16 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/folders/list.php [ 15 ] in /var/www/application/views/template/admin/folders/list.php:15
2015-09-08 23:58:16 --- DEBUG: #0 /var/www/application/views/template/admin/folders/list.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 15, Array)
#1 /var/www/application/views/template/admin/folders/list.php(47): show(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(79): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(28): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/application/views/template/admin/folders/list.php:15