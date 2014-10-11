<?php
namespace App\Login\Commands;
use Exception;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Command\Command;
use Command\CommandContext;
use App\View\View;
use Login\Login;

class CommandAutenticacao implements Command
{
  public function __construct(View $view, Login $login, Application $app)
  {
    session_start();
    $this->view  = $view;
    $this->login = $login;
    $this->app = $app;
  }
  public function execute(CommandContext $context)
  {
    $context = $context->get();
    if($context !== 'autenticar')
      throw new Exception("Esse comando deve ser executado por outro objeto");
    
    try
    { 
      $logado = $this->login->userLogged();
      if($logado)    
      {
        $_SESSION['login'] = $this->login;
        $nomeUsuario = $this->login->getNameUserLogged();
        $content = array("rota" => 'inicio');
        return $this->app->redirect("$nomeUsuario");

      }
    }
    catch(Exception $e)
    {  
      return var_dump($e->getMessage());
      $content = array("rota" => 'login', "mensagem" => $e->getMessage());
      return $this->view->load('acessar', $content);
    }
  } 
}