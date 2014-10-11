<?php
require_once __DIR__.'/src/config/registerApp.php';

require __DIR__.'/src/application/acesso.php';
require __DIR__.'/src/application/autorizacao.php';



$app['debug'] = true;
$app->run();