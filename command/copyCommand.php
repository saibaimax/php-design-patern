<?php

require_once 'receiver.php';
require_once 'command.php';

class CopyCommand implements Command
{
	private $receiver;

	public function __construct(Receiver $receiver)
	{
		$this->receiver = $receiver;
	}

	public function execute()
	{
		$receiver = new Receiver('copy_of_' . $this->receiver->getName());
		$receiver->create();
	}
}

