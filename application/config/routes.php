<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'shop';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['update-profile'] = 'auth/update_profile';
$route['login'] = 'auth/login';
$route['forgot_password'] = 'auth/forgot_password';


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

$route['admin/blog'] = 'Admin/Blog/AdminBlogController/index';

$route['admin/brand'] = 'Admin/Categories/AdminCategoriesController/brand';
$route['admin/brand/create'] = 'Admin/Categories/AdminCategoriesController/createBrand';
$route['admin/brand/edit/(:num)'] = 'Admin/Categories/AdminCategoriesController/editBrand/$1';
$route['admin/brand/delete/(:num)'] = 'Admin/Categories/AdminCategoriesController/delete/$1';

$route['admin/manufacturer'] = 'Admin/Categories/AdminCategoriesController/manufacturer';
$route['admin/manufacturer/create'] = 'Admin/Categories/AdminCategoriesController/createManufacturer';
$route['admin/manufacturer/edit/(:num)'] = 'Admin/Categories/AdminCategoriesController/editManufacturer/$1';
$route['admin/manufacturer/delete/(:num)'] = 'Admin/Categories/AdminCategoriesController/delete/$1';

$route['admin/producttype'] = 'Admin/Categories/AdminCategoriesController/productType';
$route['admin/producttype/create'] = 'Admin/Categories/AdminCategoriesController/createProductType';
$route['admin/producttype/edit/(:num)'] = 'Admin/Categories/AdminCategoriesController/editProductType/$1';
$route['admin/producttype/delete/(:num)'] = 'Admin/Categories/AdminCategoriesController/delete/$1';


$route['admin/orders'] = 'Admin/Orders/AdminOrdersController/index';
$route['admin/orders/show/(:num)'] = 'Admin/Orders/AdminOrdersController/show/$1';
$route['admin/orders/delete/(:num)'] = 'Admin/Orders/AdminOrdersController/delete/$1';

$route['admin/slider'] = 'Admin/Slider/AdminSliderController/index';
$route['admin/slider/create'] = 'Admin/Slider/AdminSliderController/create';
$route['admin/slider/delete/(:num)'] = 'Admin/Slider/AdminSliderController/delete/$1';

$route['admin/contact-us'] = 'Admin/ContactUs/AdminContactUsController/index';
$route['admin/contact-us/(:num)'] = 'Admin/ContactUs/AdminContactUsController/show/$1';

$route['admin/contact-us/delete/(:num)'] = 'Admin/ContactUs/AdminContactUsController/delete/$1';


//===============Shop=================//

$route['categories/brands'] = 'shop/brands';// $1 is category-type
$route['categories/manufacturers'] = 'shop/manufacturers';// $1 is category-type
$route['categories/producttypes'] = 'shop/producttypes';// $1 is category-type
$route['categories/genres'] = 'shop/genres';// $1 is category-type

//$route['categories/brands/(:any)'] = 'StoreFront/StoreFrontController/brands/$1';// $1 is category-type
$route['new'] = 'shop/newProducts';
$route['coming-soon'] = 'shop/comingSoon';
$route['pre-orders'] = 'shop/preOrders';

$route['categories'] = 'shop/categories';

$route['categories/(:any)'] = 'shop/categories/$1';// $1 is category-type

//===============Categories=================//

/*$route['categories/(:any)'] = 'shop/categories/$1';
$route['categories/(:any)/(:any)'] = 'shop/categories/$1/$2';*/


//===============Cart=====================//

$route['cart'] = 'CartModule/CartController/show';
$route['add-to-cart'] = 'CartModule/CartController/addToCart';
$route['cart/update'] = 'CartModule/CartController/updateCart';
$route['cart/remove']['POST'] = 'CartModule/CartController/removeItem';

//================Check out ==============//

$route['cart/checkout'] = 'CheckOut/CheckoutController';
$route['place-order']['POST'] = 'CheckOut/CheckoutController/placeOrder';

//================Products ==============//

$route['products'] = 'shop/products';
