<?php

require_once "abstraction.php";
require_once "refinedAbstraction.php";
require_once "concreteImplementor.php";

$instance1 = new Abstraction(new ConcreteImplementor("data.txt"));
$instance2 = new RefinedAbstraction(new ConcreteImplementor("data.txt"));

try {
	$instance1->open();
	$instance2->open();
} catch (Exception $e) {
	die($e->getMessage());
}

$data1 = $instance1->read();
echo $data1;

$data2 = $instance2->read();
echo $data2;

$instance1->close();
$instance2->close();
