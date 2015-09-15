<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-31 13:23:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get() ~ APPPATH/classes/Controller/User.php [ 170 ] in file:line
2015-07-31 13:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:23:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get() ~ APPPATH/classes/Controller/User.php [ 170 ] in file:line
2015-07-31 13:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:24:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get() ~ APPPATH/classes/Controller/User.php [ 131 ] in file:line
2015-07-31 13:24:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:24:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instacje() ~ APPPATH/classes/Controller/User.php [ 131 ] in file:line
2015-07-31 13:24:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:24:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth::instacje() ~ APPPATH/classes/Controller/User.php [ 131 ] in file:line
2015-07-31 13:24:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:24:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get() ~ APPPATH/classes/Controller/User.php [ 131 ] in file:line
2015-07-31 13:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:24:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::get() ~ APPPATH/classes/Controller/User.php [ 131 ] in file:line
2015-07-31 13:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:29:44 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 173 ] in file:line
2015-07-31 13:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:29:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 173 ] in file:line
2015-07-31 13:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:30:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 173 ] in file:line
2015-07-31 13:30:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 13:52:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::pk() ~ APPPATH/classes/Controller/User.php [ 190 ] in file:line
2015-07-31 13:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 14:19:23 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be of the type array, null given, called in /var/www/application/classes/Controller/User.php on line 226 and defined ~ SYSPATH/classes/Kohana/Upload.php [ 52 ] in /var/www/system/classes/Kohana/Upload.php:52
2015-07-31 14:19:23 --- DEBUG: #0 /var/www/system/classes/Kohana/Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/system...', 52, Array)
#1 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(NULL, NULL, NULL)
#2 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/Upload.php:52
2015-07-31 14:19:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:19:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:12 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:24 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:25 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:20:25 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:21:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:21:21 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:27 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:28 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:41 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:41 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:42 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:42 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:43 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:44 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/application/classes/Controller/User.php:226
2015-07-31 14:22:48 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(226): Kohana_Upload::save(Array, NULL, NULL)
#1 /var/www/application/classes/Controller/User.php(193): Controller_User->_update_avatar('6', Array)
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_my_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Controller/User.php:226
2015-07-31 20:03:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_roles' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-31 20:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 20:09:45 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 305 ] in /var/www/application/classes/Controller/User.php:305
2015-07-31 20:09:45 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(305): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/applic...', 305, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:305
2015-07-31 20:36:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'try' (T_TRY) ~ APPPATH/classes/Controller/User.php [ 315 ] in file:line
2015-07-31 20:36:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 20:48:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The conf_pass property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 20:48:37 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('conf_pass', '')
#1 /var/www/application/classes/Controller/User.php(334): Kohana_ORM->__set('conf_pass', '')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 20:48:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The conf_pass property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 20:48:43 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('conf_pass', '')
#1 /var/www/application/classes/Controller/User.php(334): Kohana_ORM->__set('conf_pass', '')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 20:48:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The conf_pass property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 20:48:46 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('conf_pass', '')
#1 /var/www/application/classes/Controller/User.php(334): Kohana_ORM->__set('conf_pass', '')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-07-31 21:01:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 331 ] in file:line
2015-07-31 21:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:01:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 331 ] in file:line
2015-07-31 21:01:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:12:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/User.php [ 42 ] in file:line
2015-07-31 21:12:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:13:06 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 24 ] in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:13:06 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 24, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:13:07 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 24 ] in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:13:07 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 24, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:13:07 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/AdminTemplate.php [ 24 ] in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:13:07 --- DEBUG: #0 /var/www/application/classes/Controller/AdminTemplate.php(24): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/applic...', 24, Array)
#1 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/AdminTemplate.php:24
2015-07-31 21:24:01 --- EMERGENCY: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/User.php [ 356 ] in file:line
2015-07-31 21:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/var/www/applic...', 356, Array)
#1 /var/www/application/classes/Controller/User.php(356): print_r()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-07-31 21:24:03 --- EMERGENCY: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/User.php [ 356 ] in file:line
2015-07-31 21:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/var/www/applic...', 356, Array)
#1 /var/www/application/classes/Controller/User.php(356): print_r()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-07-31 21:25:57 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/User.php [ 358 ] in file:line
2015-07-31 21:25:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:25:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/User.php [ 358 ] in file:line
2015-07-31 21:25:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:26:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/User.php [ 358 ] in file:line
2015-07-31 21:26:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:26:16 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH/classes/Controller/User.php [ 358 ] in file:line
2015-07-31 21:26:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:27:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/User.php [ 355 ] in file:line
2015-07-31 21:27:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:27:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/User.php [ 355 ] in file:line
2015-07-31 21:27:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:27:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on array ~ APPPATH/classes/Controller/User.php [ 355 ] in file:line
2015-07-31 21:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 21:56:43 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template/admin/user/edit.php [ 75 ] in /var/www/application/views/template/admin/user/edit.php:75
2015-07-31 21:56:43 --- DEBUG: #0 /var/www/application/views/template/admin/user/edit.php(75): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 75, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/application/views/template/admin/default.php(60): Kohana_View->__toString()
#5 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#6 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#7 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/application/classes/Controller/AdminTemplate.php(27): Kohana_Controller_Template->after()
#9 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/application/views/template/admin/user/edit.php:75
2015-07-31 22:01:07 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/User.php [ 361 ] in /var/www/application/classes/Controller/User.php:361
2015-07-31 22:01:07 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(361): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 361, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:361
2015-07-31 22:01:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/User.php [ 361 ] in /var/www/application/classes/Controller/User.php:361
2015-07-31 22:01:09 --- DEBUG: #0 /var/www/application/classes/Controller/User.php(361): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/applic...', 361, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/User.php:361
2015-07-31 22:01:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/Controller/User.php [ 363 ] in file:line
2015-07-31 22:01:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 22:01:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/classes/Controller/User.php [ 363 ] in file:line
2015-07-31 22:01:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 22:01:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:35 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('role')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:36 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('role')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:37 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('role')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:41 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('rolename')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('rolename')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The role_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:45 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role_name')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('role_name')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:45 --- EMERGENCY: Kohana_Exception [ 0 ]: The role_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:01:45 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role_name')
#1 /var/www/application/classes/Controller/User.php(363): Kohana_ORM->__get('role_name')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_list()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-31 22:13:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-31 22:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 22:13:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-07-31 22:13:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 22:15:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::roles() ~ APPPATH/classes/Controller/User.php [ 360 ] in file:line
2015-07-31 22:15:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 22:15:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::roles() ~ APPPATH/classes/Controller/User.php [ 360 ] in file:line
2015-07-31 22:15:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:01:23 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user.id' in 'group statement' [ SELECT users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.id AS r_id FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '7' GROUP BY user.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:01:23 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(372): Model_User->get_user_detail('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:01:25 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user.id' in 'group statement' [ SELECT users.id AS u_id, users.avatar AS u_avatar, users.name AS u_name, users.surname AS u_surname, users.email AS u_email, users.active AS u_active, users.active_off AS u_active_off, users.active_to AS u_active_to, roles.id AS r_id FROM users JOIN roles_users ON (roles_users.user_id = users.id) JOIN roles ON (roles_users.role_id = roles.id) WHERE users.id = '7' GROUP BY user.id ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:01:25 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT users.id...', false, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/User.php(372): Model_User->get_user_detail('7')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:08:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/User.php [ 94 ] in file:line
2015-07-31 23:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:09:37 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::limit(), called in /var/www/application/classes/Model/User.php on line 93 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php [ 173 ] in /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php:173
2015-07-31 23:09:37 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php(173): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/module...', 173, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query_Builder_Where->limit()
#2 /var/www/application/classes/Controller/User.php(372): Model_User->get_user_detail('12')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php:173
2015-07-31 23:09:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::limit(), called in /var/www/application/classes/Model/User.php on line 93 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php [ 173 ] in /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php:173
2015-07-31 23:09:40 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php(173): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/module...', 173, Array)
#1 /var/www/application/classes/Model/User.php(93): Kohana_Database_Query_Builder_Where->limit()
#2 /var/www/application/classes/Controller/User.php(372): Model_User->get_user_detail('12')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query/Builder/Where.php:173
2015-07-31 23:10:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Model/User.php [ 95 ] in file:line
2015-07-31 23:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:38:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 390 ] in file:line
2015-07-31 23:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:38:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 390 ] in file:line
2015-07-31 23:38:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:38:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on null ~ APPPATH/classes/Controller/User.php [ 390 ] in file:line
2015-07-31 23:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-31 23:47:42 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:47:42 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(407): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:22 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:22 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(407): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:31 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:31 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(407): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:55 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:48:55 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:12 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:12 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:15 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:15 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:16 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:16 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:17 --- EMERGENCY: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry '7-1' for key 'PRIMARY' [ INSERT INTO roles_users (user_id, role_id) VALUES ('7', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-07-31 23:49:17 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rol...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/application/classes/Controller/User.php(408): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_User->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251