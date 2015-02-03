<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['login'] ='/main/login_page';
$route['register'] = '/main/register_page';
$route['dashboard'] ='/dash/show_dashboard';
$route['users/new'] ='/users/shownew';
$route['/users/show/'] ='/users/show/';
$route['404_override'] = '';

//end of routes.php