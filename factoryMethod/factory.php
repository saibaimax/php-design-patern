<?php

require_once "factoryExec.php";
require_once "factoryInterface.php";

class FactoryClass
{

	public function create($filename)
	{
		$instance = $this->createInstance($filename);
		return $instance;
	}

	private function createInstance($filename)
	{
	/*
		$aaa = stripos($filename);
		$bbb = stripos($filename);
		if ($aaa !== false) {
			return new Hoge($filename);
		} elseif ($bbb !== false) {
			return new Fuga($filename);
		} else {
			die("this filename is not supported:" . $filename);
																			}
	*/
	}
}
