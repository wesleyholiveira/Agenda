<?php
namespace App\App;
require __DIR__.'/../../../helper/verificaLogin.php';
use Exception;
session_start();
function index($view)
{
	try
  {
    /*if(verificaLogin()){
      $content = array("rota" => 'login', "mensagem" => "Usuário não autenticado");
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();*/
    $content = array("navegacao" => '');    
    return $view->load('index', $content);
  } 
  catch(Exception $e)
  {
    $content = array("navegacao" => '', "mensagem" => $e->getMessage());
    return $view->load('index', $content); 
  }   
}