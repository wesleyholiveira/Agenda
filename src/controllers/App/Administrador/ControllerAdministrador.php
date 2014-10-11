<?php
namespace App\App;
use Silex\Application;
use Command\CommandContext;
class ControllerApp
{  
  private $command;
  private $context;

  public function __construct(CommandApp $cmd, CommandContext $context)
  {
    $this->command = $cmd;
    $this->context = $context;
  } 
     
  public function index()
  {
    $this->context->set('index');
    $this->context->param(array('rota' => null));
    return $this->command->execute($this->context);
  }
}