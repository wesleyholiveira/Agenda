<?php
namespace App;

use Command\CommandContext;
use Command\Command;

class ControllerApp
{  
  private $command;
  private $context;

  public function __construct(CommandContext $context)
  {
    $this->context = $context;
  } 
     
  public function execute(Command $command, $view = '', $dados = array())
  {
    $this->context->param('view', $view);
    $this->context->param('dados', $dados);
    return $command->execute($this->context);
  }
}