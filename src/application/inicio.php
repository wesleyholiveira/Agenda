<?php
use Symfony\Component\HttpFoundation\Request;

//rota que carrega a tela inicial
$app->get('/{usuario}', function($usuario) use ($app){
    try
    {
        return $app['view']->load('inicio');
    }
    catch(Exception $e)
    {
        $content =  array('mensagem' => $e->getMessage());
        return $app['view']->load('acessar', $content);
    }
})->before($autenticado);
//final rota
