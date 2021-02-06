<?php
require_once 'component.php';

class Employee extends OrganizationEntry
{

	public function __construct($code, $name)
	{
		parent::__construct($code, $name);
	}

	/**
	* 子要素を追加する
	* Leafクラスは子要素を持たないので、例外を発生させている
	*/
	public function add(OrganizationEntry $entry)
	{
		throw new Exception('method not allowed');
	}

	public function getChildren()
	{
		return array();
	}

}
