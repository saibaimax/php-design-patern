<?php

require_once 'adapter.php';
require_once 'adapterInterface.php';

class AdapterInterfaceImpl extends AdapterClass implements Adapter
{
	public function __construct($filename)
	{
		parent::__construct($filename);
	}

	public function display()
	{
		parent::showHighlight();
	}
}
