<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-16 14:04:01 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:01 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:14 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:14 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#10 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:26 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-16 14:04:26 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
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
2016-05-16 14:04:45 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:45 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#10 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:04:57 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-16 14:04:57 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
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
2016-05-16 14:05:15 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:05:15 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#10 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:05:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2016-05-16 14:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-16 14:07:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2016-05-16 14:07:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-16 14:09:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2016-05-16 14:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-05-16 14:11:02 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:11:02 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('tests')
#3 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(19): Kohana_ORM->__construct()
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#10 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\MySQL.php:171
2016-05-16 14:11:40 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-16 14:11:40 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
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
2016-05-16 14:12:49 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:12:49 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:13:48 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:13:48 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:14:02 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:14:02 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:14:12 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:14:12 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:00 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:00 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:13 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:13 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:49 --- CRITICAL: Database_Exception [ 0 ]: invalid data source name ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:15:49 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM `...', false, Array)
#2 D:\OpenServer_work\domains\remember.loc\www\application\classes\Controller\test.php(15): Kohana_Database_Query->execute()
#3 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Controller.php(84): Controller_Test->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#6 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer_work\domains\remember.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer_work\domains\remember.loc\www\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer_work\domains\remember.loc\www\modules\database\classes\Kohana\Database\PDO.php:130
2016-05-16 14:18:49 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 235 ] in D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php:1668
2016-05-16 14:18:49 --- DEBUG: #0 D:\OpenServer_work\domains\remember.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
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