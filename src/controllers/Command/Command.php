<?php
namespace Command;
interface Command
{
  public function execute(CommandContext $command);
}