<?php

require_once 'student.php';

class WrapperIterator extends FilterIterator
{
	public function __construct($iterator)
	{
		parent::__construct($iterator);
	}

	public function accept()
	{
		$student = $this->getInnerIterator()->current();
		return ($student->getSex() === 'MAN');
	}

}


