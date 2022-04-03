<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'homepagepublic';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Homepages or Dashboard
$route['public'] = 'HomepagePublic';
$route['public/event-detail/(:any)'] = 'HomepagePublic/show/$1';

//Authenticate
$route['auth'] = 'Auth';
$route['auth/register'] = 'Auth/insert';

//Profile
$route['profile'] = 'Profile';
// $route['profile/add'] = 'Profile/add';
// $route['profile/delete/(:any)'] = 'Profile/delete/$1';
// $route['profile/show/(:any)'] = 'Profile/show/$1';
// $route['profile/edit/(:any)'] = 'Profile/edit/$1';
$route['profile/update/(:any)'] = 'Profile/update/$1';
$route['profile/update-photo/(:any)'] = 'Profile/updatePhoto/$1';
// $route['profile/update-file/(:any)'] = 'Profile/updateFile/$1';


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

//Contingent
$route['contingent'] = 'Contingent';
$route['contingent/add'] = 'Contingent/add';
$route['contingent/delete/(:any)'] = 'Contingent/delete/$1';
$route['contingent/show/(:any)'] = 'Contingent/show/$1';
$route['contingent/edit/(:any)'] = 'Contingent/edit/$1';
$route['contingent/update/(:any)'] = 'Contingent/update/$1';
$route['contingent/update-info/(:any)'] = 'Contingent/updateInfo/$1';
$route['contingent/update-file/(:any)'] = 'Contingent/updateFile/$1';
