<?php

require_once "component.php";

class Leaf extends Component
{

	public function __construct($code, $name)
	{
		parent::__construct($code, $name);
	}

	public function add(Component $component)
	{
		throw new Exception(("method not allowed"));
	}
}
