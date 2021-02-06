<?php

require_once "student.php";
require_once "students.php";
require_once "wrapper.php";


function dumpWithForeach($iterator)
{
	echo '<ul>';
	foreach ($iterator as $student) {
		printf(
			'<li>%s (%d, %s)</li>',
			$student->getName(),
			$student->getAge(),
			$student->getSex()
		);
	}
	echo '</ul>';
	echo '<hr>';
}

$students = new Students();
$students->add(new Student('SMITH', 13, 'MAN'));
$students->add(new Student('ALLEN', 12, 'WOMAN'));
$students->add(new Student('MARTIN', 18, 'MAN'));
$students->add(new Student('CLARK', 15, 'MAN'));
$students->add(new Student('KING', 16, 'MAN'));

$iterator = $students->getIterator();

/**
* iteratorのメソッドを利用する
*/
echo '<ul>';
while ($iterator->valid()) {
	$student = $iterator->current();
		printf(
			'<li>%s (%d, %s)</li>',
			$student->getName(),
			$student->getAge(),
			$student->getSex()
		);

	$iterator->next();
}
echo '</ul>';
echo '<hr>';
echo "\n";

/**
* foreach文を利用する
*/
dumpWithForeach($iterator);

/**
* 異なるiteratorで要素を取得する
*/
dumpWithForeach(new WrapperIterator($iterator));
