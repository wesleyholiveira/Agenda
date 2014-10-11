<?php
namespace Command;

class CommandContext
{
	private $context;
    private $param = array();
    private $paramIterator;
	public function set($context)
	{
		$this->context = $context;

	}
	public function get()
	{
		return $this->context;
	}
	public function param($key, $value)
	{
		$this->param[$key] = $value;

	}
	public function getParam($key)
	{
		return $this->param[$key];
	}
}