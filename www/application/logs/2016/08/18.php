<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-18 13:02:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:38 --- DEBUG: #0 /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ym_uid', NULL)
#1 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ym_uid')
#2 /home/d/d0geryn5/rem/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:39 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:39 --- DEBUG: #0 /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ym_uid', NULL)
#1 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ym_uid')
#2 /home/d/d0geryn5/rem/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:49 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:49 --- DEBUG: #0 /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ym_uid', NULL)
#1 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ym_uid')
#2 /home/d/d0geryn5/rem/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:49 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:02:49 --- DEBUG: #0 /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('_ym_uid', NULL)
#1 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('_ym_uid')
#2 /home/d/d0geryn5/rem/www/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/d/d0geryn5/rem/www/system/classes/Kohana/Cookie.php:67
2016-08-18 13:04:42 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'where clause' [ UPDATE `next_repeat` SET `next_date` = DATE_ADD(NOW(), INTERVAL 1 DAY) WHERE `user_id` = '1' AND `item_id` = '6' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:04:42 --- DEBUG: #0 /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE `next_re...', false, Array)
#1 /home/d/d0geryn5/rem/www/application/classes/Model/NextRepeat.php(36): Kohana_Database_Query->execute()
#2 /home/d/d0geryn5/rem/www/application/classes/Model/Result.php(41): Model_NextRepeat::update_next_date('6')
#3 /home/d/d0geryn5/rem/www/application/classes/Controller/Test.php(76): Model_Result::set_result('6', '1')
#4 /home/d/d0geryn5/rem/www/system/classes/Kohana/Controller.php(84): Controller_Test->action_result()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/d/d0geryn5/rem/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:05:15 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'where clause' [ UPDATE `next_repeat` SET `next_date` = DATE_ADD(NOW(), INTERVAL 1 DAY) WHERE `user_id` = '1' AND `item_id` = '6' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:05:15 --- DEBUG: #0 /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE `next_re...', false, Array)
#1 /home/d/d0geryn5/rem/www/application/classes/Model/NextRepeat.php(36): Kohana_Database_Query->execute()
#2 /home/d/d0geryn5/rem/www/application/classes/Model/Result.php(41): Model_NextRepeat::update_next_date('6')
#3 /home/d/d0geryn5/rem/www/application/classes/Controller/Test.php(76): Model_Result::set_result('6', '-1')
#4 /home/d/d0geryn5/rem/www/system/classes/Kohana/Controller.php(84): Controller_Test->action_result()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/d/d0geryn5/rem/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:05:23 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'where clause' [ UPDATE `next_repeat` SET `next_date` = DATE_ADD(NOW(), INTERVAL 1 DAY) WHERE `user_id` = '1' AND `item_id` = '6' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 13:05:23 --- DEBUG: #0 /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE `next_re...', false, Array)
#1 /home/d/d0geryn5/rem/www/application/classes/Model/NextRepeat.php(36): Kohana_Database_Query->execute()
#2 /home/d/d0geryn5/rem/www/application/classes/Model/Result.php(41): Model_NextRepeat::update_next_date('6')
#3 /home/d/d0geryn5/rem/www/application/classes/Controller/Test.php(76): Model_Result::set_result('6', '1')
#4 /home/d/d0geryn5/rem/www/system/classes/Kohana/Controller.php(84): Controller_Test->action_result()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/d/d0geryn5/rem/www/index.php(118): Kohana_Request->execute()
#10 {main} in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/Query.php:251
2016-08-18 22:43:53 --- EMERGENCY: Database_Exception [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'mysql'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/PDO.php:130
2016-08-18 22:43:53 --- DEBUG: #0 /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/PDO.php(262): Kohana_Database_PDO->query(1, 'SHOW FULL COLUM...', false)
#2 /home/d/d0geryn5/rem/www/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('tests')
#3 /home/d/d0geryn5/rem/www/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/d/d0geryn5/rem/www/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/d/d0geryn5/rem/www/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/d/d0geryn5/rem/www/application/classes/Model/Test.php(25): Kohana_ORM->__construct()
#7 /home/d/d0geryn5/rem/www/application/classes/Controller/Test.php(20): Model_Test::get_current_test()
#8 /home/d/d0geryn5/rem/www/system/classes/Kohana/Controller.php(84): Controller_Test->action_test()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#11 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/d/d0geryn5/rem/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/d/d0geryn5/rem/www/index.php(118): Kohana_Request->execute()
#14 {main} in /home/d/d0geryn5/rem/www/modules/database/classes/Kohana/Database/PDO.php:130