<?php

require_once 'singleton.php';

$instance1 = singletonClass::getInstance();
sleep(1);
$instance2 = singletonClass::getInstance();

echo '<hr>';

echo '----checkID----' . '<br>';
echo 'instance1 ID :'. $instance1->getID() . '<br>';
echo 'instance2 ID :'. $instance2->getID() . '<br>';
echo '$instance1->getID() === $instance2->getID() :' . ($instance1->getID() ===$instance2->getID() ? 'true' : 'false');
echo '<hr>';


echo '----check Instance----' . '<br>';
echo '$instance1 === $instance2 :' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

$instance1_clone = clone $instance1;



