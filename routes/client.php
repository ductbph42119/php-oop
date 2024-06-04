<?php

use Admin\PhpOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');