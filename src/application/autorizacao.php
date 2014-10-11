<?php
use Symfony\Component\HttpFoundation\Request;

//verificação e validação de usuario 
$autenticado = function(Request $request) use ($app){
    #session_start();
    $rota = new DefineUrl\Define();

    $request = $request::createFromGlobals();
    $path = $request->getPathInfo(); 
    $login = $_SESSION['login'];
    if(empty($login)) 
       return $app->redirect($rota->generator('app.php').'');   
    
    $user =  $_SESSION['login']->getNameUserLogged();
    $userRequest = explode('/', $path);
    if($user !== $userRequest[1])
        return $app->redirect($rota->generator('app.php').'');   
};
//final verificação e validação
