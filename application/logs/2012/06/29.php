<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-29 00:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL photodemo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-29 00:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL photodemo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 00:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL photodemo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-29 00:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL photodemo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 00:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-29 00:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-29 00:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-29 00:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-29 00:56:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\bootstrap.php [ 122 ]
2012-06-29 00:56:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\bootstrap.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 00:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-29 00:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-29 00:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-29 00:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-29 00:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-29 00:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photodemo/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-29 09:21:21 --- ERROR: ErrorException [ 1 ]: Class 'Template_controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
2012-06-29 09:21:21 --- STRACE: ErrorException [ 1 ]: Class 'Template_controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:22:06 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
2012-06-29 09:22:06 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:23:51 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
2012-06-29 09:23:51 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH\classes\controller\main.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:25:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-29 09:25:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 09:35:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 15 ]
2012-06-29 09:35:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:36:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting ';' or '{' ~ APPPATH\classes\controller\template.php [ 17 ]
2012-06-29 09:36:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting ';' or '{' ~ APPPATH\classes\controller\template.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:44:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED ~ APPPATH\classes\controller\template.php [ 15 ]
2012-06-29 09:44:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PROTECTED ~ APPPATH\classes\controller\template.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:49:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\template.php [ 73 ]
2012-06-29 09:49:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\template.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:49:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\template.php [ 73 ]
2012-06-29 09:49:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\template.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 09:53:27 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\template.php [ 82 ]
2012-06-29 09:53:27 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\controller\template.php [ 82 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 10:11:34 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 23 ]
2012-06-29 10:11:34 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 23 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(23): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 23, Array)
#1 [internal function]: Controller_Main->after()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-29 10:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-29 10:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 10:21:42 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 11 ]
2012-06-29 10:21:42 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 11 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Main->before()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-29 10:23:19 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 11 ]
2012-06-29 10:23:19 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\main.php [ 11 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Main->before()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-29 10:24:16 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 12 ]
2012-06-29 10:24:16 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\main.php [ 12 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Main->before()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-29 10:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-29 10:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 10:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-29 10:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 10:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-29 10:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 10:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-29 10:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-29 10:27:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: javascript_messages ~ APPPATH\views\main_template.php [ 14 ]
2012-06-29 10:27:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: javascript_messages ~ APPPATH\views\main_template.php [ 14 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\main_template.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(170): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(27): Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-29 10:27:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: javascript_messages ~ APPPATH\views\main_template.php [ 14 ]
2012-06-29 10:27:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: javascript_messages ~ APPPATH\views\main_template.php [ 14 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\main_template.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(170): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(27): Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-29 10:29:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: header_block ~ APPPATH\views\main_template.php [ 19 ]
2012-06-29 10:29:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: header_block ~ APPPATH\views\main_template.php [ 19 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\main_template.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(170): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(30): Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-29 10:33:22 --- ERROR: View_Exception [ 0 ]: The requested view layout/header_block could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-29 10:33:22 --- STRACE: View_Exception [ 0 ]: The requested view layout/header_block could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(137): Kohana_View->set_filename('layout/header_b...')
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(30): Kohana_View->__construct('layout/header_b...', NULL)
#2 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(17): Kohana_View::factory('layout/header_b...')
#3 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(9): Controller_Frontend->_set_default_blocks()
#4 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(9): Controller_Frontend->before()
#5 [internal function]: Controller_Main->before()
#6 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-29 10:37:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Main::_set_testimonials() ~ APPPATH\classes\controller\frontend.php [ 10 ]
2012-06-29 10:37:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Main::_set_testimonials() ~ APPPATH\classes\controller\frontend.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 10:37:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Main::_set_style() ~ APPPATH\classes\controller\frontend.php [ 22 ]
2012-06-29 10:37:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Main::_set_style() ~ APPPATH\classes\controller\frontend.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 10:38:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: testimonial_block ~ APPPATH\views\main_template.php [ 33 ]
2012-06-29 10:38:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: testimonial_block ~ APPPATH\views\main_template.php [ 33 ]
--
#0 C:\xampp\htdocs\photodemo\application\views\main_template.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\photodemo\application\classes\controller\template.php(170): Kohana_View->render()
#4 C:\xampp\htdocs\photodemo\application\classes\controller\frontend.php(41): Controller_Template->after()
#5 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(27): Controller_Frontend->after()
#6 [internal function]: Controller_Main->after()
#7 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-29 10:45:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 11 ]
2012-06-29 10:45:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\main.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 10:45:38 --- ERROR: ErrorException [ 1 ]: Call to undefined function htmlentieies() ~ APPPATH\classes\controller\main.php [ 11 ]
2012-06-29 10:45:38 --- STRACE: ErrorException [ 1 ]: Call to undefined function htmlentieies() ~ APPPATH\classes\controller\main.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 10:55:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant DIRECTORY - assumed 'DIRECTORY' ~ APPPATH\classes\controller\main.php [ 9 ]
2012-06-29 10:55:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant DIRECTORY - assumed 'DIRECTORY' ~ APPPATH\classes\controller\main.php [ 9 ]
--
#0 C:\xampp\htdocs\photodemo\application\classes\controller\main.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Main->before()
#2 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\photodemo\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\photodemo\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\photodemo\index.php(109): Kohana_Request->execute()
#6 {main}