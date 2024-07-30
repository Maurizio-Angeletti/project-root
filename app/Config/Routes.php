<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class,'home'], ['as'=>'home']);// se usiamo questo metodo dobbiqmo riportare l' use della classe in qusto caso il namespace App\Controllers\Home più il nome della classe

$routes->get('/announcements/index','AnnouncementController::index',['as'=> 'index_announcements']);
$routes->get('/announcement/new', 'AnnouncementController::new', ['as'=> 'new_announcement']);
$routes->post('/announcement/create', 'AnnouncementController::create', ['as'=> 'create_announcement']);
$routes->get('/announcement/(:num)','AnnouncementController::show/$1', ['as'=> 'show_announcement']);
$routes->get('/announcement/edit(:num)','AnnouncementController::edit/$1', ['as'=> 'edit_announcement']);
$routes->post('/announcement/update(:num)','AnnouncementController::update/$1', ['as'=> 'update_announcement']);

// $routes->get('announcement/delete(:num)', 'AnnouncementController::delete/$1');
// $routes->post('announcement/delete(:num)', 'AnnouncementController::delete/$1');
//dato che le due rotte sopra hanno la stessa uri e gli stessi parametri possiamo uasare il seguente metodo add() che racchiude tutti i metodi.

// $routes->add('announcement/delete(:num)', 'AnnouncementController::delete/$1');
// ma questo metodo non è molto sicuro, in questo caso possiamo usare il metodo match al quale passiamo un array di metodi da utilizzare

$routes->match(["get","delete"],'/announcement/delete(:num)', 'AnnouncementController::delete/$1', ['as'=> 'delete_announcement']);

service('auth')->routes($routes);

// possiamo creare delle rotte crud in automatico utilizzando resources e passando come placeholder (:num)
// $routes->resource("articles", ["placeholder" => "(:num"]);

$routes->get('set-password','PasswordController::set', ['as'=> 'set_password']);
$routes->post('set-password','PasswordController::update', ['as'=> 'update_password']);


$routes->get('counter', 'CountController::counter',['as'=> 'counter']);

$routes->post('/update-counter', 'CounterController::updateCounter');

