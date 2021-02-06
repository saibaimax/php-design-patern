<?php

require_once 'abstraction.php';

class RefinedAbstraction extends Abstraction
{

	function __construct($data_source) {
		parent::__construct($data_source);
	}

	function readWithEncode() {
		return htmlspecialchars($this->read(), ENT_QUOTES, mb_internal_encoding());
	}
}

