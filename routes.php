<?php

/*
* @//Route Has To Method For Request GET and POST
* GET->   $routes->get(url, here controller)
* POST->  $routes->post(url,here controller)
*
*/

$routes->get('','controller/index.php');

$routes->get('details','controller/details.php');
