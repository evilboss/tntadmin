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
//$route['dashboard'] = 'home';

/*
| -------------------------------------------------------------------------
|                                   ADMIN
| -------------------------------------------------------------------------
*/
$route['admin'] = 'Admin/AdminDashboardController/index';

$route['admin/products'] = 'Admin/Products/AdminProductsController/index';
$route['admin/products/store'] = 'Admin/Products/AdminProductsController/store';
$route['admin/products/create'] = 'Admin/Products/AdminProductsController/create';
$route['admin/products/edit/(:num)'] = 'Admin/Products/AdminProductsController/edit/$1';
$route['admin/products/delete/(:num)'] = 'Admin/Products/AdminProductsController/delete/$1';

$route['admin/categories'] = 'Admin/Categories/AdminCategoriesController/index';
$route['admin/categories/store'] = 'Admin/Categories/AdminCategoriesController/store';
$route['admin/categories/create'] = 'Admin/Categories/AdminCategoriesController/create';

$route['admin/categories/edit/(:num)'] = 'Admin/Categories/AdminCategoriesController/edit/$1';
$route['admin/categories/delete/(:num)'] = 'Admin/Categories/AdminCategoriesController/delete/$1';


$route['admin/brand'] = 'Admin/Categories/AdminCategoriesController/brand';
$route['admin/brand/create'] = 'Admin/Categories/AdminCategoriesController/createBrand';
$route['admin/brand/edit/(:num)'] = 'Admin/Categories/AdminCategoriesController/editBrand/$1';
$route['admin/brand/delete/(:num)'] = 'Admin/Categories/AdminCategoriesController/delete/$1';


$route['admin/orders'] = 'Admin/Orders/AdminOrdersController/index';
$route['admin/orders/show/(:num)'] = 'Admin/Orders/AdminOrdersController/show/$1';
$route['admin/orders/delete/(:num)'] = 'Admin/Orders/AdminOrdersController/delete/$1';

$route['admin/slider'] = 'Admin/Slider/AdminSliderController/index';
$route['admin/slider/create'] = 'Admin/Slider/AdminSliderController/create';
$route['admin/slider/delete/(:num)'] = 'Admin/Slider/AdminSliderController/delete/$1';

$route['admin/contact-us'] = 'Admin/ContactUs/AdminContactUsController/index';
$route['admin/contact-us/(:num)'] = 'Admin/ContactUs/AdminContactUsController/show/$1';
$route['admin/contact-us/delete/(:num)'] = 'Admin/ContactUs/AdminContactUsController/delete/$1';