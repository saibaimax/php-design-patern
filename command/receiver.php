<?php

class Receiver
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function decompress()
	{
		echo $this->name . 'is decompressed.<br>';
	}

	public function compress()
	{
		echo $this->name . 'is compressed<br>';
	}

	public function create()
	{
		echo $this->name . 'is created<br>';
	}
}


