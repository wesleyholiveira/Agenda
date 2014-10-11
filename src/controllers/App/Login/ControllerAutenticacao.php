<?php
namespace App\Login;
use Silex\Application;
use Command\Command;
use Command\CommandContext;

class ControllerAutenticacao
{  
  private $command;
  private $context;
    
  public function __construct(CommandContext $context)
  {
    $this->context  = $context;
  } 
     
  public function autenticar(Command $command)
  {
    $this->context->set('autenticar');
    return  $command->execute($this->context);
  }
}