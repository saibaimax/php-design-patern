<?php

require_once 'list.php';
require_once 'table.php';

$data = array('apple',
			  'banana',
			  'grape',
			  'melon');

$display1 = new ListDisplay($data);

$display2 = new TableDisplay($data);

$display1->display();

echo '<hr>';

$display2->display();

