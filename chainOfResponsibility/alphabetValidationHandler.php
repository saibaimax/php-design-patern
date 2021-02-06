<?php
require_once 'handler.php';

class AlphabetValidationHandler extends Handler
{

	protected function execValidation($input)
	{
		return preg_match('/^[a-z]*$/i', $input);
	}

	protected function getErrorMessage()
	{
		return '半角英字で入力してください';
	}
}
