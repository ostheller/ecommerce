<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users_ideas';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//aadi's backend routes
$route['admin']='admins_orders/index';
$route['login']='admins_orders/login';

// Molly's front-end routes
$route['ideas/show/(:num)'] ='users_ideas/show/$1';
$route['category/(:any)'] = 'users_ideas/category_index/$1';
$route['browse'] = 'users_ideas/browsing';
