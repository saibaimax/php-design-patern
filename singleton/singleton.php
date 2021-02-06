<?php

class SingletonClass
{
	private $id;

	private static $instance;

	private function __construct()
	{
		$this->id = md5(date('r') . mt_rand());
	}

	public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new SingletonClass();
			echo 'a singletonclass instance was born!';
		}

		return self::$instance;
	}

	public function getID()
	{
		return $this->id;
	}

	public final function __clone() {
		throw new Exception('Clone is not allowed!' . "\n");
	}
}


