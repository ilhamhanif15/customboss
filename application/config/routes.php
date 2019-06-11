<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
/*$route['default_controller'] = 'LandingPage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] ='Welcome/about';
$route['contact'] ='Welcome/contact';*/

$route = [
	'default_controller' => 'LandingPage',
	'404_override' => '',
	'translate_uri_dashes' => FALSE,

	/*------------LANDING PAGE CUSTOM BOSS MAIN PAGE-------------*/
	'about' => 'LandingPage/about',
	'contact' => 'LandingPage/contact',
	'gallery' => 'LandingPage/gallery',
	/*-----------------------------------------------------------*/

	/*---------------------PRINT CUT DOT CO----------------------*/
	'printcut' => 'PC_Main/index',
	'printcut/about' => 'PC_Main/about',
	'printcut/kontak' => 'PC_Main/contact',
	'printcut/katalog' => 'PC_Main/katalogGrid',
	'printcut/katalog/(:any)' => 'PC_Main/katalogSingle/$1',
	'printcut/order-desain' => 'PC_Main/order_desain',
	/*-----------------------------------------------------------*/

	/*---------------------Authentication------------------------*/
	'admin/auth' => 'Auth_C/auth',
	'admin/logout' => 'Auth_C/logout',
	/*-----------------------------------------------------------*/

	/*--------------------Admin----------------------------------*/
	'admin/home' => 'Admin_Main/index',
	'admin/login' => 'Admin_Main/login',
	'admin/katalog/list' => 'Admin_Main/katalog_list',
	'admin/katalog/tambah' => 'Admin_Main/katalog_tambah_view',
	'admin/katalog/tambah/proses' => 'Admin_Main/katalog_tambah',
	'admin/order/list' => 'Admin_Main/order_list',
	/*-----------------------------------------------------------*/

	/*---------------------JASA WEB DOT CO----------------------*/
	'jasaweb' => 'JW_Main/index',
	/*-----------------------------------------------------------*/
];
