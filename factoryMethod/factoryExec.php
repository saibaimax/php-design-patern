<?php

require_once "factoryInterface.php";

class FactoryExec implements Factory
{

	private $filename;

	public function __construct($filename)
	{
		if (!is_readable($filename)) {
			throw new Exception("file" . $filename . "is not readable !");
		}
		$this->filename = $filename;
	}

	public function read()
	{
		$this->handler = fopen($this->filename, "r");
	}

	public function display()
	{
	// do what you want.
	}

}
