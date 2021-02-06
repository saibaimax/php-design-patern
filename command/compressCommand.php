<?php

require_once 'receiver.php';
require_once 'command.php';

class CompressCommand implements Command
{
	private $receiver;

	public function __construct(Receiver $receiver)
	{
		$this->receiver = $receiver;
	}

	public function execute()
	{
		$this->receiver->compress();
	}
}

