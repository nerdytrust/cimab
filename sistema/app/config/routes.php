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
|	example.com/class/method/id/
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "index";
$route['404_override'] = '';

$route['newsletter']		= 'index/newsletter';
$route['contacto']			= 'index/nuevo_contacto';
$route['platicas']			= 'index/nueva_platica';
$route['voluntarios']		= 'index/nuevo_voluntario';
$route['add-patient']		= 'pacientes/add_patient';
$route['add-diagnostic']    = 'pacientes/add_diagnostic';
$route['add-atention']      = 'pacientes/add_atention';
$route['add-recidivism']    = 'pacientes/add_recidivism';
$route['login-process']		= 'login/login_form';
$route['logout']  			= 'login/logout';


/* End of file routes.php */
/* Location: ./application/config/routes.php */