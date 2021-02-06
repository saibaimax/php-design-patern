<?php

require_once "./user.php";

/*
	mediatorとconcrete mediatorに相当する。
 */

class Chat
{

	private $users = array();

	public function login(User $user)
	{
		$user->setChat($this);
		if (!array_key_exists($user->getName(), $this->users)) {
			$this->users[$user->getName()] = $user;
			printf('<font color="#0000dd">%sさんが入室しました</font><hr>', $user->getName());
		}
	}

	public function sendMessage($from, $to, $message)
	{
		if (array_key_exists($to, $this->users)) {
			$this->users[$to]->receiveMessage($from, $message);
		} else {
			printf('<font color="#dd0000">%sさんは入室していないようです</font><hr>', $to);
		}
	}

}
