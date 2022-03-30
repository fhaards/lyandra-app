<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homepageuser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Authenticate
$route['auth'] = 'Auth';

//Homepages or Dashboard
$route['dashboard'] = 'HomepageUser';

//About
$route['settings/about'] = 'SettingsAbout';