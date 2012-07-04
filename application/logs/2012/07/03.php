<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-03 01:28:24 --- ERROR: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-07-03 01:28:24 --- STRACE: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('photos')
#4 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(17): Kohana_ORM::factory('photo')
#9 [internal function]: Controller_Main->action_index()
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-03 01:31:36 --- ERROR: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
2012-07-03 01:31:36 --- STRACE: ErrorException [ 8 ]: Use of undefined constant root - assumed 'root' ~ APPPATH\config\database.php [ 23 ]
--
#0 C:\xampp\htdocs\photodemo\application\config\database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(792): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\config\file\reader.php(49): Kohana_Core::load('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\config.php(124): Kohana_Config_File_Reader->load('database')
#4 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database.php(65): Kohana_Config->load('database')
#5 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(295): Kohana_Database::instance(NULL)
#6 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(17): Kohana_ORM::factory('photo')
#9 [internal function]: Controller_Main->action_index()
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-03 01:31:47 --- ERROR: Database_Exception [ 1146 ]: Table 'photodemo.table_photos' doesn't exist [ SHOW FULL COLUMNS FROM `table_photos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-03 01:31:47 --- STRACE: Database_Exception [ 1146 ]: Table 'photodemo.table_photos' doesn't exist [ SHOW FULL COLUMNS FROM `table_photos` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('photos')
#2 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(17): Kohana_ORM::factory('photo')
#7 [internal function]: Controller_Main->action_index()
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-03 01:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Photo' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Photo' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 01:33:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 01:33:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 01:33:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 01:33:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 01:33:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 01:33:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 02:27:44 --- ERROR: Database_Exception [ 1146 ]: Table 'photodemo.table_imagedatas' doesn't exist [ SHOW FULL COLUMNS FROM `table_imagedatas` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-03 02:27:44 --- STRACE: Database_Exception [ 1146 ]: Table 'photodemo.table_imagedatas' doesn't exist [ SHOW FULL COLUMNS FROM `table_imagedatas` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imagedatas')
#2 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(24): Kohana_ORM::factory('imagedata')
#7 [internal function]: Controller_Main->action_index()
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-03 02:27:44 --- ERROR: Database_Exception [ 1146 ]: Table 'photodemo.table_imagedatas' doesn't exist [ SHOW FULL COLUMNS FROM `table_imagedatas` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-03 02:27:44 --- STRACE: Database_Exception [ 1146 ]: Table 'photodemo.table_imagedatas' doesn't exist [ SHOW FULL COLUMNS FROM `table_imagedatas` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('imagedatas')
#2 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(24): Kohana_ORM::factory('imagedata')
#7 [internal function]: Controller_Main->action_index()
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-03 02:28:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Imagedata' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 02:28:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Imagedata' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 02:35:03 --- ERROR: Kohana_Exception [ 0 ]: The imagedata property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:35:03 --- STRACE: Kohana_Exception [ 0 ]: The imagedata property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(28): Kohana_ORM->__get('imagedata')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:37:16 --- ERROR: Kohana_Exception [ 0 ]: The imagedetail property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:37:16 --- STRACE: Kohana_Exception [ 0 ]: The imagedetail property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(28): Kohana_ORM->__get('imagedetail')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:37:18 --- ERROR: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:37:18 --- STRACE: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(28): Kohana_ORM->__get('imagedetails')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:37:32 --- ERROR: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:37:32 --- STRACE: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(28): Kohana_ORM->__get('imagedetails')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:47:37 --- ERROR: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:47:37 --- STRACE: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(29): Kohana_ORM->__get('imagedetails')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:52:38 --- ERROR: Kohana_Exception [ 0 ]: The width property does not exist in the Model_Imagedetail class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 02:52:38 --- STRACE: Kohana_Exception [ 0 ]: The width property does not exist in the Model_Imagedetail class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM->__get('width')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 02:58:56 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 16 ]
2012-07-03 02:58:56 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 16 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 02:59:36 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 18 ]
2012-07-03 02:59:36 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 18 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:00:04 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 18 ]
2012-07-03 03:00:04 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 18 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:03:22 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 20 ]
2012-07-03 03:03:22 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 20 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:03:40 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
2012-07-03 03:03:40 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:03:41 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
2012-07-03 03:03:41 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:07:30 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
2012-07-03 03:07:30 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_Image::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH\classes\model\image.php [ 23 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Image')
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): spl_autoload_call('Model_Image')
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_ORM::factory('image')
#5 [internal function]: Controller_Main->action_index()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-03 03:12:51 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 03:12:51 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(43): Kohana_ORM->__get('id')
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 03:14:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 43 ]
2012-07-03 03:14:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 43 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 43, Array)
#1 [internal function]: Controller_Main->action_index()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 03:59:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 41 ]
2012-07-03 03:59:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:00:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 41 ]
2012-07-03 04:00:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:00:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
2012-07-03 04:00:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:01:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
2012-07-03 04:01:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:03:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 38 ]
2012-07-03 04:03:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:03:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 38 ]
2012-07-03 04:03:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:03:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
2012-07-03 04:03:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\frontend.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:06:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\layout\header_block.php [ 10 ]
2012-07-03 04:06:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\layout\header_block.php [ 10 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\layout\header_block.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\views\main_template.php(43): Kohana_View->__toString()
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(168): Kohana_View->render()
#8 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(55): Controller_Template->after()
#9 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(78): Controller_Frontend->after()
#10 [internal function]: Controller_Main->after()
#11 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-03 04:20:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: title_test ~ APPPATH\views\layout\header_block.php [ 10 ]
2012-07-03 04:20:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: title_test ~ APPPATH\views\layout\header_block.php [ 10 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\layout\header_block.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\views\main_template.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(168): Kohana_View->render()
#8 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(55): Controller_Template->after()
#9 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Controller_Frontend->after()
#10 [internal function]: Controller_Main->after()
#11 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-03 04:23:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 41 ]
2012-07-03 04:23:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\main.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 04:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 04:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 04:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 04:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 04:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:00:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:00:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/tesg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/tesg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/themes/main_template_v1/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/test ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/test ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.functions.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/jquery.main.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-alert.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-modal.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-scrollspy.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-tooltip.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-popover.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-button.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-carousel.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/scripts/bootstrap/bootstrap-typeahead.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tag ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tag ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 05:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 05:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 08:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 08:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 08:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 08:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 08:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 08:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 08:30:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 08:30:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 08:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL main/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-03 08:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL main/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 08:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 08:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 09:01:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ APPPATH\classes\controller\main.php [ 39 ]
2012-07-03 09:01:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Validation::add_rules() ~ APPPATH\classes\controller\main.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 09:03:28 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 38 ]
2012-07-03 09:03:28 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 09:11:33 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 40 ]
2012-07-03 09:11:33 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\main.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 09:18:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 43 ]
2012-07-03 09:18:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 09:19:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug_path() ~ APPPATH\classes\controller\main.php [ 48 ]
2012-07-03 09:19:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug_path() ~ APPPATH\classes\controller\main.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 09:24:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: _FILE ~ APPPATH\classes\controller\main.php [ 46 ]
2012-07-03 09:24:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: _FILE ~ APPPATH\classes\controller\main.php [ 46 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Main->action_test()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 09:24:17 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\main.php [ 46 ]
2012-07-03 09:24:17 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\main.php [ 46 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Main->action_test()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 09:27:08 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\file.php [ 78 ]
2012-07-03 09:27:08 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH\classes\kohana\file.php [ 78 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\file.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(49): Kohana_File::mime_by_ext(Array)
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 09:30:37 --- ERROR: ErrorException [ 2 ]: strtolower() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\main.php [ 46 ]
2012-07-03 09:30:37 --- STRACE: ErrorException [ 2 ]: strtolower() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\main.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strtolower() ex...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(46): strtolower(Array)
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 09:31:33 --- ERROR: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\classes\controller\main.php [ 49 ]
2012-07-03 09:31:33 --- STRACE: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\classes\controller\main.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(49): split()
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 09:35:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: exts ~ APPPATH\classes\controller\main.php [ 49 ]
2012-07-03 09:35:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: exts ~ APPPATH\classes\controller\main.php [ 49 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 [internal function]: Controller_Main->action_test()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 09:35:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: exts ~ APPPATH\classes\controller\main.php [ 49 ]
2012-07-03 09:35:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: exts ~ APPPATH\classes\controller\main.php [ 49 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 [internal function]: Controller_Main->action_test()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 09:37:34 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, none given, called in C:\xampp\htdocs\photodemo\application\classes\controller\main.php on line 58 and defined ~ SYSPATH\classes\kohana\upload.php [ 52 ]
2012-07-03 09:37:34 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, none given, called in C:\xampp\htdocs\photodemo\application\classes\controller\main.php on line 58 and defined ~ SYSPATH\classes\kohana\upload.php [ 52 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 52, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(58): Kohana_Upload::save()
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 09:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 09:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 09:44:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 09:44:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('current_image.j...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('current_image.j...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(57): Kohana_Image::factory('current_image.j...')
#3 [internal function]: Controller_Main->action_test()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 09:59:58 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH\image\classes\kohana\image\gd.php [ 108 ]
2012-07-03 09:59:58 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH\image\classes\kohana\image\gd.php [ 108 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(41): Kohana_Image::factory('C:\xampp\htdocs...')
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:00:03 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH\image\classes\kohana\image\gd.php [ 108 ]
2012-07-03 10:00:03 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH\image\classes\kohana\image\gd.php [ 108 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(41): Kohana_Image::factory('C:\xampp\htdocs...')
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:03:04 --- ERROR: Kohana_Exception [ 0 ]: Cannot update imagedetail model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-07-03 10:03:04 --- STRACE: Kohana_Exception [ 0 ]: Cannot update imagedetail model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(79): Kohana_ORM->update()
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(56): Controller_Main->_save_image_data(Array, 1)
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:03:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Imagedetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 10:03:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Imagedetails' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 10:08:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'table_imagedetail.id' in 'where clause' [ SELECT `table_imagedetail`.* FROM `table_imagedetails` AS `table_imagedetail` WHERE `table_imagedetail`.`id` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-03 10:08:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'table_imagedetail.id' in 'where clause' [ SELECT `table_imagedetail`.* FROM `table_imagedetails` AS `table_imagedetail` WHERE `table_imagedetail`.`id` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\photodemo\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `table_i...', false, Array)
#1 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 C:\xampp\htdocs\photodemo\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(1)
#5 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(77): Kohana_ORM::factory('imagedetail', 1)
#6 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(56): Controller_Main->_save_image_data(Array, 1)
#7 [internal function]: Controller_Main->action_test()
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-03 10:09:39 --- ERROR: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Imagedetail class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 10:09:39 --- STRACE: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Imagedetail class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(79): Kohana_ORM->__get('imagedetails')
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(56): Controller_Main->_save_image_data(Array, 1)
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:11:54 --- ERROR: Kohana_Exception [ 0 ]: Cannot update imagedetail model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-07-03 10:11:54 --- STRACE: Kohana_Exception [ 0 ]: Cannot update imagedetail model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(79): Kohana_ORM->update()
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(56): Controller_Main->_save_image_data(Array, 1)
#2 [internal function]: Controller_Main->action_test()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:18:06 --- ERROR: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-03 10:18:06 --- STRACE: Kohana_Exception [ 0 ]: The imagedetails property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(94): Kohana_ORM->__get('imagedetails')
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:19:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 91 ]
2012-07-03 10:19:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 91 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(91): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 91, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:20:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 91 ]
2012-07-03 10:20:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 91 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(91): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 91, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:21:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:21:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:21:10 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:21:10 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:21:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:21:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:21:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:21:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:22:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:22:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:22:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:22:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:23:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:23:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:23:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:23:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:24:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:24:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:33:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:33:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:34:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 93 ]
2012-07-03 10:34:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 93 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(93): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 93, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:35:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-03 10:35:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Images' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 10:36:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:36:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:36:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:36:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:36:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:36:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_images()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:44:04 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-07-03 10:44:04 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(89): Kohana_ORM->find()
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:45:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:45:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:45:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:45:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:45:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:45:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:46:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:46:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:49:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:49:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$image ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:49:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
2012-07-03 10:49:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 92 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(92): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 10:49:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 102 ]
2012-07-03 10:49:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tags ~ APPPATH\classes\controller\main.php [ 102 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(102): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 102, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(19): Controller_Main->_get_image()
#2 [internal function]: Controller_Main->action_index()
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-03 11:41:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/undefinedstylists/retrieve_modal_window_contents_exec ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 11:41:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/undefinedstylists/retrieve_modal_window_contents_exec ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 11:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/i ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 11:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/i ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 11:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 11:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 11:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/localhost/photodemo/main/ajax ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 11:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main/localhost/photodemo/main/ajax ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 11:47:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 15 ]
2012-07-03 11:47:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 15 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(15): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(9): Controller_Frontend->_set_default_blocks()
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(9): Controller_Frontend->before()
#3 [internal function]: Controller_Main->before()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 11:47:20 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 15 ]
2012-07-03 11:47:20 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 15 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(15): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(9): Controller_Frontend->_set_default_blocks()
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(9): Controller_Frontend->before()
#3 [internal function]: Controller_Main->before()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 11:53:33 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 10 ]
2012-07-03 11:53:33 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 10 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(10): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 10, Array)
#1 [internal function]: Controller_Main->before()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 11:54:38 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 16 ]
2012-07-03 11:54:38 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\frontend.php [ 16 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(16): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(9): Controller_Frontend->_set_default_blocks()
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(9): Controller_Frontend->before()
#3 [internal function]: Controller_Main->before()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 12:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 12:00:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\classes\controller\main.php [ 32 ]
2012-07-03 12:00:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH\classes\controller\main.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:02:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Main::$post ~ APPPATH\classes\controller\main.php [ 32 ]
2012-07-03 12:02:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Main::$post ~ APPPATH\classes\controller\main.php [ 32 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 32, Array)
#1 [internal function]: Controller_Main->action_ajax()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 12:08:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\main.php [ 41 ]
2012-07-03 12:08:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_VARIABLE or '$' ~ APPPATH\classes\controller\main.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 12:20:08 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:20:08 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:20:48 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:20:48 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:20:48 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:20:48 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:20:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:20:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:20:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:20:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 12:44:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 12:44:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(65): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 13:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/main/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/main/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:10:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/main/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:10:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/main/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/jquery-ui.custom ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/css/jquery-ui.custom ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/trans.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/save.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]ohana\request.php [ 1126 ]
2012-07-03 13:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/cancel.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 13:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 13:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: themes/main_template_v1/images/jqueryui/ui-icons_222222_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 14:00:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\main.php [ 23 ]
2012-07-03 14:00:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\main.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 14:01:42 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2012-07-03 14:01:42 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('C:\xampp\htdocs...')
#1 C:\xampp\htdocs\photodemo\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(63): Kohana_Image::factory('C:\xampp\htdocs...')
#3 [internal function]: Controller_Main->action_upload()
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-03 20:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 20:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 20:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 20:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: main ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 21:28:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: image_source ~ APPPATH\views\body\interface.php [ 25 ]
2012-07-03 21:28:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: image_source ~ APPPATH\views\body\interface.php [ 25 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\body\interface.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\views\main_template.php(37): Kohana_View->__toString()
#5 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(168): Kohana_View->render()
#8 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(64): Controller_Template->after()
#9 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(106): Controller_Frontend->after()
#10 [internal function]: Controller_Main->after()
#11 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-03 21:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 21:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photoupload\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 21:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 21:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photoupload\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-03 21:44:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: array_details ~ APPPATH\classes\controller\main.php [ 77 ]
2012-07-03 21:44:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: array_details ~ APPPATH\classes\controller\main.php [ 77 ]
--
#0 C:\xampp\htdocs\photoupload\application\classes\controller\main.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 77, Array)
#1 [internal function]: Controller_Main->action_upload()
#2 C:\xampp\htdocs\photoupload\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photoupload\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photoupload\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photoupload\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-03 21:45:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\main.php [ 75 ]
2012-07-03 21:45:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH\classes\controller\main.php [ 75 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}