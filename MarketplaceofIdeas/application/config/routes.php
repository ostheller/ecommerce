<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users_ideas';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//aadi's backend routes
$route['admin']='admins_orders/index';
$route['login']='admins_orders/login';
$route['show']='admins_orders/show';
$route['edit']='admins_ideas/edit';
$route['delete']='admins_ideas/delete';
$route['add']='admins_ideas/add';
$route['products']='admins_ideas/index';

// Molly's front-end routes
$route['ideas/show/(:num)'] ='users_ideas/show/$1';
$route['category/(:any)'] = 'users_ideas/category_index/$1';
$route['browse'] = 'users_ideas/browsing_index';
$route['browse/(:any)'] = 'users_ideas/browsing_show/$1';
$route['logout'] = 'users_ideas/logout';
$route['purchase/(:num)'] = 'users_orders/purchase/$1';
$route['update/(:num)'] = 'users_orders/update/$1';
$route['remove/(:num)'] = 'users_orders/destroy/$1';
$route['search'] = 'users_ideas/keyword_search';
$route['ideas/sort'] = 'users_ideas/sort_by';
$route['ideas/byPrice'] = 'users_ideas/pull_by_price';
$route['ideas/byPopularity'] = 'users_ideas/pull_by_sell_count';

//jess's orders routes
$route['cart'] = 'users_orders/index';
$route['continue'] = 'users_ideas/browsing_index';