<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'shop';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['update-profile'] = 'auth/update_profile';
$route['login'] = 'auth/login';
$route['forgot_password'] = 'auth/forgot_password';

$route['categories'] = 'shop/categories';
$route['categories/(:any)'] = 'shop/categories/$1';
$route['categories/(:any)/(:any)'] = 'shop/categories/$1/$2';
$route['dashboard'] = 'home';