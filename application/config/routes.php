<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'homepageuser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Authenticate
$route['auth'] = 'Auth';
$route['auth/register'] = 'Auth/insert';

//Homepages or Dashboard
$route['dashboard'] = 'HomepageUser';

//About
$route['settings/about'] = 'SettingsAbout';
$route['settings/about/show'] = 'SettingsAbout/show';
$route['settings/about/update/(:any)'] = 'SettingsAbout/update/$1';

//Tournament
$route['tournament'] = 'Tournament';
$route['tournament/add'] = 'Tournament/add';
$route['tournament/delete/(:any)'] = 'Tournament/delete/$1';
$route['tournament/show/(:any)'] = 'Tournament/show/$1';
$route['tournament/edit/(:any)'] = 'Tournament/edit/$1';
$route['tournament/update/(:any)'] = 'Tournament/update/$1';
$route['tournament/update-info/(:any)'] = 'Tournament/updateInfo/$1';
$route['tournament/update-file/(:any)'] = 'Tournament/updateFile/$1';
