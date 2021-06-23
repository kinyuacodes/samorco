<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//category
$route['Category/(:any)']='News/category/$1';
//Auth
$route['Auth']='Auth/index';
//admin
$route['Admin']='Admin/index';
$route['Admin/user']='Admin/user';

$route['Admin/addpost']='Admin/addpost';
$route['Admin/editpost']='Admin/editpost';

$route['Admin/posts']='Admin/posts';
$route['Admin/messages']='Admin/messages';

$route['Admin/category']='Admin/category';
$route['Admin/category/(:any)']='Admin/delete_category/$1';
//television
$route['TV']='TV/index';
//News
$route['News']='News/index';

//home
$route['(:any)'] = 'Home/view/$1';

$route['default_controller'] = 'Home/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
