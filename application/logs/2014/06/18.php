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