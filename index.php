<?php
require 'vendor/autoload.php';

$router = new App\Router\Router($_GET['url']);
    include 'src/Config/Routes.php';
$router->run();
