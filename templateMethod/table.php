<?php
require_once'abstract.php';

class TableDisplay extends AbstractClass
{

	protected function displayHeader()
	{
		echo '<table border="1" cellpadding="2" cellspacing="2">';
	}

	protected function displayBody()
	{
		foreach ($this->getData() as $key => $value) {
			echo '<tr>';
			echo '<th>' . $key . '</th>';
			echo '<td>' . $value . '</td>';
			echo '</tr>';
		}
	}

	protected function displayFooter()
	{
		echo '</table>';
	}

}
