<?php

class Student
{
	private $name;
	private $age;
	private $sex;

	public function __construct($name, $age, $sex)
	{
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getSex()
	{
		return $this->sex;
	}

}



