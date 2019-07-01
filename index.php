<?php

require 'core/bootstrap.php';

$routes = new Route();

require 'routes.php';

require $routes->redirect(Request::uri(),Request::method());
