<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-10 14:08:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Translations::save() ~ APPPATH/classes/Controller/Translations.php [ 74 ] in file:line
2015-09-10 14:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:08:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Translations::save() ~ APPPATH/classes/Controller/Translations.php [ 74 ] in file:line
2015-09-10 14:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 14:09:30 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'cms_milestone.translationses' doesn't exist [ INSERT INTO translationses (language, version, create_date, date_change, user_id) VALUES ('Polsi', 'beta', '2015-09-10 14:09:30', '2015-09-10 14:09:30', '6') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-10 14:09:30 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO tra...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Controller/Translations.php(74): Kohana_ORM->save()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-09-10 20:20:25 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Helpers/Translations.php [ 43 ] in file:line
2015-09-10 20:20:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 20:31:52 --- EMERGENCY: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ SYSPATH/classes/Kohana/I18n.php [ 120 ] in file:line
2015-09-10 20:31:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/system...', 120, Array)
#1 /var/www/system/classes/Kohana/I18n.php(120): array_merge(Array, 1)
#2 /var/www/application/classes/Controller/Translations.php(92): Kohana_I18n::load('esp')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-10 20:32:31 --- EMERGENCY: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ SYSPATH/classes/Kohana/I18n.php [ 120 ] in file:line
2015-09-10 20:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/system...', 120, Array)
#1 /var/www/system/classes/Kohana/I18n.php(120): array_merge(Array, 1)
#2 /var/www/application/classes/Controller/Translations.php(92): Kohana_I18n::load('esp')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-09-10 20:47:51 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Translations.php [ 95 ] in /var/www/application/classes/Controller/Translations.php:95
2015-09-10 20:47:51 --- DEBUG: #0 /var/www/application/classes/Controller/Translations.php(95): Kohana_Core::error_handler(2048, 'Only variables ...', '/var/www/applic...', 95, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Translations.php:95
2015-09-10 21:01:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/Controller/Translations.php [ 101 ] in file:line
2015-09-10 21:01:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 21:01:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Translations.php [ 99 ] in file:line
2015-09-10 21:01:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 21:47:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/template/admin/default.php [ 181 ] in file:line
2015-09-10 21:47:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 21:48:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/template/admin/default.php [ 182 ] in file:line
2015-09-10 21:48:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 21:49:38 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Helpers_Translations::generate_languages_lists() should not be called statically ~ APPPATH/views/template/admin/default.php [ 92 ] in /var/www/application/views/template/admin/default.php:92
2015-09-10 21:49:38 --- DEBUG: #0 /var/www/application/views/template/admin/default.php(92): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/applic...', 92, Array)
#1 /var/www/application/views/template/admin/default.php(92): Helpers_Translations::generate_languages_lists()
#2 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#3 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#4 /var/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/application/classes/Controller/AdminTemplate.php(29): Kohana_Controller_Template->after()
#6 /var/www/system/classes/Kohana/Controller.php(87): Controller_AdminTemplate->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#9 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/application/views/template/admin/default.php:92
2015-09-10 22:46:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Translations.php [ 96 ] in file:line
2015-09-10 22:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-10 22:46:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Translations.php [ 96 ] in file:line
2015-09-10 22:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line