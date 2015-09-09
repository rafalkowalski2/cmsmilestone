<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-09 12:04:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'children' (T_STRING) ~ APPPATH/classes/Controller/Folders.php [ 167 ] in file:line
2015-09-09 12:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 12:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/folders/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-09-09 12:04:52 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Folders.php(154): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-09-09 12:05:44 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/folders/edit.php [ 65 ] in /var/www/application/views/template/admin/folders/edit.php:65
2015-09-09 12:05:44 --- DEBUG: #0 /var/www/application/views/template/admin/folders/edit.php(65): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 65, Array)
#1 /var/www/application/views/template/admin/folders/edit.php(79): walkTree(NULL)
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
#16 {main} in /var/www/application/views/template/admin/folders/edit.php:65
2015-09-09 12:11:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:11:27 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('find')
#1 /var/www/application/classes/Controller/Folders.php(155): Kohana_ORM->__get('find')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:11:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:11:28 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('find')
#1 /var/www/application/classes/Controller/Folders.php(155): Kohana_ORM->__get('find')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:11:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Folders class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:11:30 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('find')
#1 /var/www/application/classes/Controller/Folders.php(155): Kohana_ORM->__get('find')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-09-09 12:21:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/template/admin/folders/edit.php [ 95 ] in file:line
2015-09-09 12:21:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 12:21:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/views/template/admin/folders/edit.php [ 95 ] in file:line
2015-09-09 12:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 20:18:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/admin/others/confirm_delete could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-09-09 20:18:10 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template/admin/...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/admin/...', NULL)
#2 /var/www/application/classes/Controller/Folders.php(171): Kohana_View::factory('template/admin/...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-09-09 20:21:28 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/others/confirm_delete.php [ 65 ] in /var/www/application/views/template/admin/others/confirm_delete.php:65
2015-09-09 20:21:28 --- DEBUG: #0 /var/www/application/views/template/admin/others/confirm_delete.php(65): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 65, Array)
#1 /var/www/application/views/template/admin/others/confirm_delete.php(79): walkTree(NULL)
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(86): Kohana_View->__toString()
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
#16 {main} in /var/www/application/views/template/admin/others/confirm_delete.php:65
2015-09-09 20:53:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Folders.php [ 177 ] in file:line
2015-09-09 20:53:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:07:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function count_all() on null ~ APPPATH/classes/Controller/Folders.php [ 177 ] in file:line
2015-09-09 21:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:25:38 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Folders.php [ 181 ] in /var/www/application/classes/Controller/Folders.php:181
2015-09-09 21:25:38 --- DEBUG: #0 /var/www/application/classes/Controller/Folders.php(181): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 181, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Folders.php:181
2015-09-09 21:25:42 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Folders.php [ 181 ] in /var/www/application/classes/Controller/Folders.php:181
2015-09-09 21:25:42 --- DEBUG: #0 /var/www/application/classes/Controller/Folders.php(181): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 181, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Folders.php:181
2015-09-09 21:28:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete files model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Folders.php:180
2015-09-09 21:28:47 --- DEBUG: #0 /var/www/application/classes/Controller/Folders.php(180): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Folders.php:180
2015-09-09 21:29:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::delete() ~ APPPATH/classes/Controller/Folders.php [ 180 ] in file:line
2015-09-09 21:29:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-09 21:33:46 --- EMERGENCY: ErrorException [ 2 ]: rmdir(public/upload/other/archiwum): Directory not empty ~ APPPATH/classes/Controller/Folders.php [ 70 ] in file:line
2015-09-09 21:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(public/up...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/Folders.php(70): rmdir('public/upload/o...')
#2 /var/www/application/classes/Controller/Folders.php(178): Controller_Folders->delete_folder('', 'public/upload/o...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-09 21:43:59 --- EMERGENCY: ErrorException [ 2 ]: rmdir(public/upload/other/archiwum): Directory not empty ~ APPPATH/classes/Controller/Folders.php [ 70 ] in file:line
2015-09-09 21:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rmdir(public/up...', '/var/www/applic...', 70, Array)
#1 /var/www/application/classes/Controller/Folders.php(70): rmdir('public/upload/o...')
#2 /var/www/application/classes/Controller/Folders.php(188): Controller_Folders->delete_folder('', 'public/upload/o...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Folders->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Folders))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line