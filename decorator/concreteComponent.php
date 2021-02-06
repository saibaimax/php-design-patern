<?php

require_once 'interface.php';

class PlainText implements Text
{
	private $textString = null;

	public function getText()
	{
		return $this->textString;
	}

	public function setText($str)
	{
		$this->textString = $str;
	}

}




