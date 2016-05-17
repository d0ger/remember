<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-17 11:35:39 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-17 11:35:39 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
#1 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#8 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-17 11:43:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: type ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 263 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:263
2016-05-17 11:43:40 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(263): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\OpenServer_w...', 263, Array)
#1 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:263
2016-05-17 11:44:00 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-17 11:44:00 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
#1 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#8 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-17 11:46:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_PDO::mysql_datatype() ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 255 ] in file:line
2016-05-17 11:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line