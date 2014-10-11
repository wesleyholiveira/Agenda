<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', function() use ($app){
    return $app['view']->load('acessar');
});

// rotas referentes a autenticao
$app->post('/autenticar', function(Request $request) use ($app){
    try
    {
        $email = $request->get('email');
        $senha  = $request->get('senha');
        if(empty($email) || empty($senha))
            throw new Exception("email ou senha não pode ser vazio");
            
        $app['usuario']->setEmail($email);
        $app['usuario']->setSenha($senha);
        return $app['autenticacao']->autenticar($app['commandAutenticacao']);
    }
    catch(Exception $e)
    {
        $content = array('rota' => '', 'mensagem' => $e->getMessage());
        return $app['view']->load('acessar', $content);
    }
});
//fim rotas autenticação