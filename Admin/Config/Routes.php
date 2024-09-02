<?php

namespace Admin\Config;

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;
use Config\Services;
use PHPUnit\TextUI\XmlConfiguration\RemovePrinterAttributes;

/**
 * @var RouteCollection $routes
 */

 $routes = Services::Routes();

 $routes->get("admin/users","\Admin\Controllers\Users::index",['as'=>'users_index']);