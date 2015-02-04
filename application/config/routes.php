<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['login'] ='/main/login_page';
$route['register'] = '/main/register_page';
$route['dashboard'] ='/dash/show_dashboard';
$route['dashboard/admin'] ='/dash/show_admin_dashboard';
$route['users/new'] ='/users/shownew';
$route['/users/show/'] ='/users/show/';
$route['edit/user'] ='users/edit';
$route['edit/users/admin'] = 'users/adminedit';
$route['users/login'] ='users/login';
$route['logoff'] ='users/logoff/';
$route['404_override'] = '';

//end of routes.php