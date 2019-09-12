<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['(:any)'] = 'site/$1';
$route['default_controller'] = 'site';
$route['admin'] = 'admin/pages/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
