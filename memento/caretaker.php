<?php

class DataCaretaker
{
	public  function __construct()
	{
		if (!isset($_SESSION)) {
			session_start();
		}
	}

	public function setSnapshot($snapshot)
	{
		$this->snapshot = $snapshot;
		$_SESSION['snapshot'] = $this->shapshot;
	}

	public function getShapshot()
	{
		return (isset($_SESSION['snapshot']) ? $_SESSION['snapshot'] : null);
	}
}
