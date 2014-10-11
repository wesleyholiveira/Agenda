<?php
require_once __DIR__.'/src/config/registerSite.php';
use Symfony\Component\HttpFoundation\Request;


$app['debug'] = true;
$app->run();
