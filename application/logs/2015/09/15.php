<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-15 20:41:42 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in /var/www/application/classes/Controller/Translations.php on line 115 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:41:42 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 34, Array)
#1 /var/www/application/classes/Controller/Translations.php(115): Kohana_ORM_Validation_Exception->__construct('ERORR_GENERATE_...')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:33 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, instance of Model_Translations given, called in /var/www/application/classes/Controller/Translations.php on line 115 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:33 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 34, Array)
#1 /var/www/application/classes/Controller/Translations.php(115): Kohana_ORM_Validation_Exception->__construct('ERORR_GENERATE_...', Object(Model_Translations))
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, instance of Model_Translations given, called in /var/www/application/classes/Controller/Translations.php on line 115 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:38 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 34, Array)
#1 /var/www/application/classes/Controller/Translations.php(115): Kohana_ORM_Validation_Exception->__construct('ERORR_GENERATE_...', Object(Model_Translations))
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:41 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, instance of Model_Translations given, called in /var/www/application/classes/Controller/Translations.php on line 115 and defined ~ MODPATH/orm/classes/Kohana/ORM/Validation/Exception.php [ 34 ] in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:41 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/module...', 34, Array)
#1 /var/www/application/classes/Controller/Translations.php(115): Kohana_ORM_Validation_Exception->__construct('ERORR_GENERATE_...', Object(Model_Translations))
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM/Validation/Exception.php:34
2015-09-15 20:43:58 --- EMERGENCY: Exception [ 0 ]: ERORR_GENERATE_TRANSLATION_FILE ~ APPPATH/classes/Controller/Translations.php [ 115 ] in /var/www/system/classes/Kohana/Controller.php:84
2015-09-15 20:43:58 --- DEBUG: #0 /var/www/system/classes/Kohana/Controller.php(84): Controller_Translations->action_edit()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Translations))
#3 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/index.php(118): Kohana_Request->execute()
#6 {main} in /var/www/system/classes/Kohana/Controller.php:84