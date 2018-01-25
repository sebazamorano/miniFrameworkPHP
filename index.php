<?php

use Mini\Request;
use Mini\Router;

include_once 'vendor/autoload.php';

Router::load('route.php')
    ->execute(Request::uri(), Request::method());

