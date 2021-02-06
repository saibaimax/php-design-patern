<?php

require_once 'component.php';

class Composite extends Component
{
	private $component;

	public function __construct($code, $name)
	{
		parent::__construct($code, $name);
		$this->component = array();
	}

	public function add(Component $component)
	{
		array_push ($this->component, $component);
	}

	public function dump()
	{
		parent::dump();
		foreach ($this->component as $component) {
			$component->dump();
		}
	}
}
