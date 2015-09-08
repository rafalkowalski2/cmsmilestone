<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-30 00:00:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/User.php [ 121 ] in file:line
2015-07-30 00:00:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 00:00:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/User.php [ 121 ] in file:line
2015-07-30 00:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:29:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTTP::redirec() ~ APPPATH/classes/Controller/User.php [ 136 ] in file:line
2015-07-30 22:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:29:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/User.php [ 136 ] in file:line
2015-07-30 22:29:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:29:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/User.php [ 136 ] in file:line
2015-07-30 22:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:30:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/User.php [ 136 ] in file:line
2015-07-30 22:30:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:40:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 148 ] in file:line
2015-07-30 22:40:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:40:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 148 ] in file:line
2015-07-30 22:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:40:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 148 ] in file:line
2015-07-30 22:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:40:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 148 ] in file:line
2015-07-30 22:40:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-30 22:55:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The about property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-30 22:55:57 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('about')
#1 /var/www/application/views/template/admin/user/my_account.php(29): Kohana_ORM->__get('about')
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(56): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(27): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-30 22:55:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The about property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-07-30 22:55:59 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('about')
#1 /var/www/application/views/template/admin/user/my_account.php(29): Kohana_ORM->__get('about')
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#5 /var/www/application/views/template/admin/default.php(56): Kohana_View->__toString()
#6 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#7 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#8 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/application/classes/Controller/AdminTemplate.php(27): Kohana_Controller_Template->after()
#10 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603