<?php

require_once 'itemDao.php';
require_once 'item.php';

class DbItemDao implements ItemDao
{
	public function findById($item_id)
	{
		$fp = fopen('data.txt', 'r');

		$dummy = fgets($fp, 4096);

		$item = null;
		while ($buffer = fgets($fp, 4096)) {
			$id = trim(substr($buffer, 0, 10));
			$name = trim(substr($buffer, 10));

			if ($item_id == (int)$id) {
				$item = new Item($id, $name);
				break;
			}
		}
		fclose($fp);

		return $item;
	}
}
