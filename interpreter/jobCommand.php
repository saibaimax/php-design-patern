<?php

class JobCommand implements Command
{
	public function execute(Context $context)
	{
		if ($context->getCurrentCommand() !== 'begin') {
			throw new Exception('illegal command : ' . $context->getCurrentCommand());
		}
		$command_list = new CommandListCommand();
		$command_list->execute($context->next());
	}
}


