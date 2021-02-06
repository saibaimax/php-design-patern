<?php

require_once "./chat.php";

/*
	colleagueとconcrete colleagueに相当する
 */

class User
{

	private $chat;
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setChat(Chat $chat)
	{
		$this->chat = $chat;
	}

	public function getChat()
	{
		return $this->chat;
	}

	public function sendMessage($to, $message)
	{
		$this->chat->sendMessage($this->name, $to, $message);
	}

	public function receiveMessage($from, $message)
	{
		printf('<font color="008800">%sさんから%sさんへ</font>: %s<hr>', $from, $this->getName(), $message);
	}

}
