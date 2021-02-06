<?php
require_once "invoker.php";
require_once "receiver.php";
require_once "copyCommand.php";
require_once "compressCommand.php";

$invoker = new Invoker();
$receiver = new Receiver("sample.txt");
$invoker->addCommand(new CompressCommand($receiver));
$invoker->addCommand(new CopyCommand($receiver));

$invoker->run();
