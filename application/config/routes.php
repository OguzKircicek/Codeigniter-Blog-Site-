<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['yazilar/(:any)']='Home/yazilar/$1';
$route ['iletisim']='Home/iletisim';
$route ['mesajgonder']='Home/mesajgonder';
$route['Home/(:any)']='Home';
$route['admin/yazilar/(:any)']='admin/yazilar';
$route['translate_uri_dashes'] = FALSE;
?>
