<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome/auth';
$route['404_override'] = 'welcome/Page404';
$route['translate_uri_dashes'] = FALSE;

$route['authentication'] = 'welcome/authAction';
$route['authLogout'] = 'welcome/logout';

$route['dashboard'] = 'welcome/index';
$route['sensor'] = 'welcome/suhu';
$route['sensorUpdate/(:any)/(:any)'] = 'welcome/sensorUpdate/$1/$2';

// Edit
$route['edit/slider_images'] = 'SliderImages_Controller/editPage';
$route['edit/upload'] = 'SliderImages_Controller/uploadImage';

$route['edit/extra'] = 'Extras_Controller/editPage';
$route['edit/extra/(:any)'] = 'Extras_Controller/editAction/$1';

$route['edit/news'] = 'News_Controller/editPage';
$route['edit/news/(:any)'] = 'News_Controller/editAction/$1';

$route['edit/alumni'] = 'Alumni_Controller/editPage';
$route['edit/alumni/(:any)'] = 'Alumni_Controller/editAction/$1';

$route['edit/achievement'] = 'Achievement_Controller/editPage';
$route['edit/achievement/(:any)'] = 'Achievement_Controller/editAction/$1';

$route['edit/achievedetail'] = 'AchieveDetail_Controller/editPage';
$route['edit/achievedetail/(:any)'] = 'AchieveDetail_Controller/editAction/$1';

$route['edit/teacher'] = 'Teacher_Controller/editPage';
$route['edit/teacher/(:any)'] = 'Teacher_Controller/editAction/$1';

$route['edit/superadmin'] = 'Welcome/superAdmin';
$route['edit/superadmin/(:any)'] = 'Welcome/editAction/$1';
// News Section
$route['news/update'] = 'News_Controller/update';
$route['news/delete/(:any)'] = 'News_Controller/delete/$1';
$route['news/create'] = 'News_Controller/create';
$route['news/insert'] = 'News_Controller/createAction';

// Extras Section
$route['extra/update'] = 'Extras_Controller/update';
$route['extra/create'] = 'Extras_Controller/create';
$route['extra/insert'] = 'Extras_Controller/insert';
$route['extra/delete/(:any)'] = 'Extras_Controller/delete/$1';

// Alumni Section
$route['alumni/update'] = 'Alumni_Controller/update';
$route['alumni/delete/(:any)'] = 'Alumni_Controller/delete/$1';
$route['alumni/create'] = 'Alumni_Controller/create';
$route['alumni/insert'] = 'Alumni_Controller/createAction';

// Achievement Section
$route['achievement/update'] = 'Achievement_Controller/update';
$route['achievement/delete/(:any)'] = 'Achievement_Controller/delete/$1';
$route['achievement/create'] = 'Achievement_Controller/create';
$route['achievement/insert'] = 'Achievement_Controller/insert';

// Achieve Detail
$route['achievedetail/update'] = 'AchieveDetail_Controller/update';
$route['achievedetail/delete/(:any)'] = 'AchieveDetail_Controller/delete/$1';
$route['achievedetail/create'] = 'AchieveDetail_Controller/create';
$route['achievedetail/insert'] = 'AchieveDetail_Controller/insert';

// Teacher Section
$route['teacher/update'] = 'Teacher_Controller/update';
$route['teacher/delete/(:any)'] = 'Teacher_Controller/delete/$1';
$route['teacher/create'] = 'Teacher_Controller/create';
$route['teacher/insert'] = 'Teacher_Controller/createAction';
$route['teacher/jabatan'] = 'Teacher_Controller/getTeacher';
$route['teacher/updateJabatan'] = 'Teacher_Controller/updateJabatan';

$route['superadmin/update'] = 'Welcome/updateAdmin';
$route['superadmin/create'] = 'Welcome/create';
$route['superadmin/insert'] = 'Welcome/insert';
$route['superadmin/delete/(:any)'] = 'Welcome/delete/$1';
