<?php
require_once 'item.php';

class ItemFactory
{
	private $pool;
	private static $instance = null;

	private function __construct($filename)
	{
		$this->buildPool($filename);
	}

	public static function getInstance($filename) {
		if (is_null(self::$instance)) {
			self::$instance = new ItemFactory($filename);
		}
		return self::$instance;
	}

	public function getItem($code)
	{
		if (array_key_exists($code, $this->pool)) {
			return $this->pool[$code];
		} else {
			return null;
		}
	}

	private function buildPool($filename)
	{
		$this->pool = array();

		$fp = fopen($filename, 'r');
		while ($buffer = fgets($fp, 4096)) {
			list($item_code, $item_name, $price) = preg_split("\t", $buffer);
			$this->pool[$item_code] = new Item($item_code, $item_name, $price);
		}
		fclose($fp);
	}

	public final function __clone() {
		throw new Exception ('Clone is not allowed against ' . get_class($this));
	}
}
