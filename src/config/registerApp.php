<?php
require_once 'vendor/autoload.php';
require_once 'autoload.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

$app = new Application();
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

//criando view, esse objeto é injetado na criacao dos controllers
$app['view'] = $app->share(function() use ($app){
    return new App\View\View;
});
//fim criacao

//commandContext objeto que define o contexto
$app['commandContext'] = $app->share(function () use ($app){
  return new Command\CommandContext();
});
