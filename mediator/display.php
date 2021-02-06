<?php

require_once "./user.php";
require_once "./chat.php";

$chat = new Chat();

$sasaki = new User("佐々木");
$suzuki = new User("鈴木");
$yoshida = new User("吉田");
$kawamuara = new User("川村");
$tajima = new User("田島");

$chat->login($sasaki);
$chat->login($suzuki);
$chat->login($yoshida);
$chat->login($kawamuara);
$chat->login($tajima);

$sasaki->sendMessage("鈴木", "Hi!1");
$suzuki->sendMessage("川村", "Hi!2");
$yoshida->sendMessage("荻原", "Hi!3");
$kawamuara->sendMessage("佐々木", "Hi!4");
$tajima->sendMessage("吉田", "Hi!5");
