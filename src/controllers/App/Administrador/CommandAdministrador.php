<?php
namespace App\App;
require ('ExeCommand.php');
use Exception;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Command\Command;
use Command\CommandContext;
use App\View\View;

class CommandApp implements Command
{
  public function __construct(View $view)
  {
    $this->view  = $view;
  }
  public function execute(CommandContext $context)
  {
    switch ($context->get()) 
    {
      case 'index':
        return index($this->view);     
      break;
    }
  } 
}