<?php

require_once 'student.php';

class Students implements IteratorAggregate
{
	private $students;

	public function __construct()
	{
		$this->students = new ArrayObject();
	}

	public function add(Student $student)
	{
		$this->students[] = $student;
	}

	public function getIterator()
	{
		return $this->students->getIterator();
	}

}
