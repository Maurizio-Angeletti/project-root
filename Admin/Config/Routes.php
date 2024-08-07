<?php

namespace Admin\Config;


use CodeIgniter\Router\RouteCollection;
use Admin\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */

//  $routes->get("admin/users",[UserController::class, 'index'],['as'=> 'index_users']);//posso usare anche questa sintassi

//  $routes->get("admin/users",'\Admin\Controllers\UserController::index',['as'=> 'index_users']); //posso usare anche questa sintassi

// $routes->get("admin/user/(:num)",'\Admin\Controllers\UserController::show/$1',['as'=> 'show_user']);

$routes->group("admin", ["namespace" => "Admin\Controllers","filter" => "session"],static function($routes){//il primo valore "admin" passato a group() ci indica il prefisso che sarà uguale per tutte le rotte, come secondo parametro passiamo il namespace che dell controller che dobbiamo usare.

    $routes->get("users",'UserController::index',['as'=> 'index_users']);
    $routes->get("user/(:num)",'UserController::show/$1',['as'=> 'show_user']);
    $routes->post('user/(:num)/toggle-ban','UserController::toggleBan/$1',['as'=> '']);

});