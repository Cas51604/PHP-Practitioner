<?php

equire 'core/bootstrap.php';

die(var_dump($app));

$router = Router::load('routes.php');
    ->direct(Request::$uri);
