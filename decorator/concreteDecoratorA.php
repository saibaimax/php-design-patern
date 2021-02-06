<?php

require_once 'decorator.php';

class UpperCaseText extends TextDecorator
{
	public function __construct(Text $target)
	{
		parent::__construct($target);
	}

	public function getText()
	{
		$str = parent::getText();
		$str = mb_strtoupper($str);
		return $str;
	}

}
