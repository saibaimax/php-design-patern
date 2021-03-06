<?php

require_once 'decorator.php';

class DoubleByteText extends TextDecorator
{
	public function __construct(Text $target)
	{
		parent::__construct($target);
	}

	public function getText()
	{
		$str = parent::getText();
		$str = mb_convert_kana($str, "RANDKV");
		return $str;
	}
}

