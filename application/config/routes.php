<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There is one reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
*/

$route['default_controller'] = "home";
//$route['default_controller'] = "intropages";
$route['admin'] = 'users/admin/auth/login';

$route['wallpapers/admin/wallpapers/([^/]+)/form'] = "wallpapers/admin/wallpapers/form/$1";
$route['wallpapers/admin/wallpapers/([^/]+)/form/([^/]+)'] = "wallpapers/admin/wallpapers/form/$1/$2";

$route['brochures/admin/brochures/([^/]+)/form'] = "brochures/admin/brochures/form/$1";
$route['brochures/admin/brochures/([^/]+)/form/([^/]+)'] = "brochures/admin/brochures/form/$1/$2";

$route['categories/admin/categories/save'] = "categories/admin/categories/save";
$route['categories/admin/categories/form'] = "categories/admin/categories/form";
$route['categories/admin/categories/delete'] = "categories/admin/categories/delete";
$route['categories/admin/categories/save_orderlist'] = "categories/admin/categories/save_orderlist";
$route['categories/admin/categories/([^/]+)'] = "categories/admin/categories/index/$1";
$route['categories/admin/categories/([^/]+)/form'] = "categories/admin/categories/form/$1";
$route['categories/admin/categories/([^/]+)/form/([^/]+)'] = "categories/admin/categories/form/$1/$2";

 
/* Ex : $route['contents/([^/]+)'] = "contents/index/$1"; */
/* End of file routes.php */
/* Location: ./application/config/routes.php */