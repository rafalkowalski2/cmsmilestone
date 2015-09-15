<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-21 16:59:47 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Films.php [ 124 ] in /var/www/application/classes/Controller/Films.php:124
2015-05-21 16:59:47 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(124): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 124, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Films.php:124
2015-05-21 17:25:19 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-05-21 17:25:19 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(22): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-05-21 17:25:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-21 17:25:24 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(130): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-21 17:25:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:25:42 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('test')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:25:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:25:50 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('angry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:26:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:26:11 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:26:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:26:48 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:27:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:27:35 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:27:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:27:44 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:28:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:28:00 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:23 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/default.php [ 116 ] in /var/www/application/views/default.php:116
2015-05-21 17:30:23 --- DEBUG: #0 /var/www/application/views/default.php(116): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 116, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/PageTemplate.php(18): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_PageTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(117): Kohana_Request->execute()
#11 {main} in /var/www/application/views/default.php:116
2015-05-21 17:30:24 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/default.php [ 116 ] in /var/www/application/views/default.php:116
2015-05-21 17:30:24 --- DEBUG: #0 /var/www/application/views/default.php(116): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 116, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/PageTemplate.php(18): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_PageTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(117): Kohana_Request->execute()
#11 {main} in /var/www/application/views/default.php:116
2015-05-21 17:30:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/default.php [ 116 ] in /var/www/application/views/default.php:116
2015-05-21 17:30:30 --- DEBUG: #0 /var/www/application/views/default.php(116): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/applic...', 116, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/application/classes/Controller/PageTemplate.php(18): Kohana_Controller_Template->after()
#5 /var/www/system/classes/Kohana/Controller.php(87): Controller_PageTemplate->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(117): Kohana_Request->execute()
#11 {main} in /var/www/application/views/default.php:116
2015-05-21 17:30:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:38 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:54 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:30:57 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:31:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:31:31 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:32:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:32:42 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:33:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:33:19 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:33:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 282 ] in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:33:30 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(282): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 282, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:282
2015-05-21 17:34:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 283 ] in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:34:06 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(283): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 283, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:35:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 283 ] in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:35:00 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(283): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 283, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:36:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 283 ] in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:36:02 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(283): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 283, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:36:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 283 ] in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:36:29 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(283): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 283, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:38:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Films.php [ 283 ] in /var/www/application/classes/Controller/Films.php:283
2015-05-21 17:38:05 --- DEBUG: #0 /var/www/application/classes/Controller/Films.php(283): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/applic...', 283, Array)
#1 /var/www/application/classes/Controller/Films.php(199): Controller_Films->_ajax_get_fw_list_film('harry')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_ajax_list_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/Films.php:283