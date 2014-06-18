<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-18 05:01:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\www\my\cygnus\system\classes\Kohana\Cookie.php:67
2014-06-18 05:01:01 --- DEBUG: #0 D:\www\my\cygnus\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 D:\www\my\cygnus\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 D:\www\my\cygnus\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\www\my\cygnus\system\classes\Kohana\Cookie.php:67
2014-06-18 12:43:35 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Upload.php [ 9 ] in D:\www\my\cygnus\application\classes\Controller\Upload.php:9
2014-06-18 12:43:35 --- DEBUG: #0 D:\www\my\cygnus\application\classes\Controller\Upload.php(9): Kohana_Core::error_handler(2048, 'Only variables ...', 'D:\www\my\cygnu...', 9, Array)
#1 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#4 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#7 {main} in D:\www\my\cygnus\application\classes\Controller\Upload.php:9
2014-06-18 12:43:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\upload\debug.php [ 2 ] in file:line
2014-06-18 12:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 13:16:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ext ~ APPPATH\classes\Controller\Upload.php [ 37 ] in D:\www\my\cygnus\application\classes\Controller\Upload.php:37
2014-06-18 13:16:54 --- DEBUG: #0 D:\www\my\cygnus\application\classes\Controller\Upload.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\www\my\cygnu...', 37, Array)
#1 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#4 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#7 {main} in D:\www\my\cygnus\application\classes\Controller\Upload.php:37
2014-06-18 13:17:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Upload.php [ 38 ] in file:line
2014-06-18 13:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-18 13:18:42 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/my/cygnus/./uploads/a8763af518758f6dea0e194e20952d866154160b.): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Upload.php [ 41 ] in file:line
2014-06-18 13:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\www\my\cygnu...', 41, Array)
#1 D:\www\my\cygnus\application\classes\Controller\Upload.php(41): move_uploaded_file('C:\Windows\Temp...', '/my/cygnus/./up...')
#2 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#5 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-06-18 13:19:56 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/my/cygnus/./uploads/a8763af518758f6dea0e194e20952d866154160b.bin): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Upload.php [ 40 ] in file:line
2014-06-18 13:19:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\www\my\cygnu...', 40, Array)
#1 D:\www\my\cygnus\application\classes\Controller\Upload.php(40): move_uploaded_file('C:\Windows\Temp...', '/my/cygnus/./up...')
#2 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#5 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-06-18 13:20:45 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/my/cygnus/uploads/a8763af518758f6dea0e194e20952d866154160b.bin): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Upload.php [ 40 ] in file:line
2014-06-18 13:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\www\my\cygnu...', 40, Array)
#1 D:\www\my\cygnus\application\classes\Controller\Upload.php(40): move_uploaded_file('C:\Windows\Temp...', '/my/cygnus/uplo...')
#2 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#5 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-06-18 13:35:33 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php:1668
2014-06-18 13:35:33 --- DEBUG: #0 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('cygnus_file')
#1 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\www\my\cygnus\application\classes\Controller\Upload.php(56): Kohana_ORM->__construct()
#5 D:\www\my\cygnus\application\classes\Controller\Upload.php(43): Controller_Upload->insertToDb('./uploads/a8763...', Array)
#6 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#9 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#12 {main} in D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php:1668
2014-06-18 13:36:30 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php:1668
2014-06-18 13:36:30 --- DEBUG: #0 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('cygnus_file')
#1 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\www\my\cygnus\application\classes\Controller\Upload.php(56): Kohana_ORM::factory('File')
#6 D:\www\my\cygnus\application\classes\Controller\Upload.php(43): Controller_Upload->insertToDb('./uploads/a8763...', Array)
#7 D:\www\my\cygnus\system\classes\Kohana\Controller.php(84): Controller_Upload->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\www\my\cygnus\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Upload))
#10 D:\www\my\cygnus\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\www\my\cygnus\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\www\my\cygnus\index.php(118): Kohana_Request->execute()
#13 {main} in D:\www\my\cygnus\modules\orm\classes\Kohana\ORM.php:1668