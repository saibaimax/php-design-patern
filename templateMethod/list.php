<?php

require_once 'abstract.php';

class ListDisplay extends AbstractClass
{

	protected function displayHeader()
	{
		echo '<dl>';
	}


	protected function displayBody()
	{
		foreach ($this->getData() as $key => $value) {
			echo '<dt>Fruit' . $key . '</dt>';
			echo '<dd>' . $value . '</dd>';
		}
	}

	protected function displayFooter()
	{
		echo '</dl>';
	}


}

