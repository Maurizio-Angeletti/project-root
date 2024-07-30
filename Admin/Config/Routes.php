<?php

namespace Admin\Config;


use CodeIgniter\Router\RouteCollection;
use Admin\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */

 $routes->get("admin/users",[UserController::class, 'index'],['as'=> 'index_users']);//posso usare anche questa sintassi

//  $routes->get("admin/users",'\Admin\Controllers\UserController::index',['as'=> 'index_users']); //posso usare anche questa sintassi